var videoData,
	API_KEY = 'AIzaSyBAlkZZ_wErL-y1NDIaMgK1CwqDmyyHL64';

function bind() {
    // associating events 
	$('#search').on('click', function(e){
        // getting the value of channel ID 
		var channelId = $('#channel').val();
        // calling search function and a callback function 
		search(channelId, function(data){
			 
			 videoData = data;
			 data.items.sort(function(a, b){
             return a.statistics.likeCount - b.statistics.likeCount;
             });
			// console.log(data.items);
			$('#videosList').html(tabularize(data));
		});
	});

	$('#videosList').on('click', 'tbody>tr>td>span.vid', function(){
		var vid = this.innerHTML;
		showVideo(vid);
	});

	$('#vidLightBox').click(function(){
		$('#vidLightBox iframe').attr('src','');
		$('#vidLightBox').hide();
	});

	
	

// new sort function 
$('#sortBox').on('change', function(e){
        // getting the value of channel ID
                                var channelId = $('#channel').val();
        // calling search function and a callback function
        var SortBy = $('#sortBox').val();
         console.log(SortBy);
       
      
        videoData.items.sort(function(a, b){
                                               
                                                if(SortBy=="id"){
                                               
                return a.id.videoId.toLowerCase().charCodeAt(0) -  b.id.videoId.toLowerCase().charCodeAt(0);
                                                }
                                                if (SortBy=="title") {
                                                                console.log("hi......inside title");
                console.log(a.snippet);
                                                                return a.snippet.title.toLowerCase().charCodeAt(0) -  b.snippet.title.toLowerCase().charCodeAt(0);
                                                };
                                                // console.log(a);
             return a.statistics[SortBy] - b.statistics[SortBy];
             });
         // console.log(videoData.items);
   
                                $('#videosList').html(tabularize(videoData));
                });
 
// sort function  ended ---

}
$(document).ready(bind);

// Main function that will request the API 
function search(channelId, callback) {
	$.get('https://www.googleapis.com/youtube/v3/search?part=snippet&key=' + API_KEY + '&channelId=' + channelId)
	.then(function(result){
        // then is a method that is return by the object store the videos using map function or we can also use 
		var vids = result.items.map(function(vid){return  vid.id.videoId }).join(',');
        // get all the statistics data for the particular video ids 
		var x= $.get('https://www.googleapis.com/youtube/v3/videos?part=statistics&key=' + API_KEY + '&id=' + vids).
		then(function(data){
			_.each(result.items, function(item){
				item.statistics = _.find(data.items, {id: item.id.videoId}).statistics;
			});
			if(callback){
                        callback(result);
                        }
            else{alert("something went wrong")};
		});
	});
}

function tabularize(data) {
	var table = '';
	_.each(data.items || [], function(item){
		table += '<tr>'+
					'<td><span class="vid">' + item.id.videoId + '</span><span class="thumb"><img src="' + item.snippet.thumbnails.default.url  + '" /></span>' + '</td>'+
					'<td>' + item.snippet.title + '</td>'+
					'<td>' + item.statistics.viewCount + '</td>'+
					'<td>' + item.statistics.likeCount + '</td>'+
				'</tr>';
	});

	return '<table cellspacing="0" cellpadding="0">'+
			'<thead>'+
				'<tr>'+
					'<th>Video ID</th>'+
					'<th>Title</th>'+
					'<th>Views</th>'+
					'<th>Likes</th>'+
				'</tr>'+
			'</thead>'+
			table+
			'</table>';
}

function showVideo(id) {
	$('#vidLightBox iframe').attr('src', 'https://www.youtube.com/embed/' + id);
	$('#vidLightBox').show();
}

