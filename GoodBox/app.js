$(document).ready(

function search() {
	$.getJSON('http://cors.io/?u=http://mocky.io/v2/5621d9390f00002315590f41').then(
		function(response){
			var data = response;
			console.log(data);
	    $('#categoryList').html(tabularize(data));
		},
		function(error){
			console.log("Error...");
		},
		function(failure){
			console.log("failure..........");
		});
},


window.tabularize = function(data) {
	var table = '';
	$.each(data, function(i, data){
		table += '<tr>' + 
		            '<td>' + data.category + '</td>'+
					'<td>' + data.name     + '</td>'+
					'<td>' + data.acquiredBy + '</td>'+
					'<td>' + data.paymentEnabled + '</td>'+
					'<td>' + data.address.city + '</td>'+
					'<td>' + data.address.locality + '</td>'+
					'<td>' + data.address.address + '</td>'+
					// $.each(data.storeTiming,function(storeTiming){
						'<td>' + data.storeTiming[0].openTimings + '</td>'+
						'<td>' + data.storeTiming[0].closedTimings + '</td>'+
						'<td>' + data.storeTiming[0].days + '</td>'  +
					// });
						'<td>' + data.id + '</td>'+	
				 '</tr>';
	});

	return '<table cellspacing="0" cellpadding="0">'+
			'<thead>'+
				'<tr>'+
					'<th> category </th>'+
					'<th> Name  </th>'+
					'<th> AcquiredBy </th>'+
					'<th> Payment Enabaled </th>'+
					'<th> City </th>'+
					'<th> Locality </th>'+
					'<th> Address </th>'+
					'<th> Opens AT</th>'+
					'<th> CLoses AT </th>'+
					'<th> Days Open </th>'+
					'<th> Id  </th>'+
				'</tr>'+
			'</thead>'+
			table+
			'</table>';
}



);