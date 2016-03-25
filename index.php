<!DOCTYPE html>
<?php
	$rss = new DOMDocument();
	$rss->load('http://neerajpro.wordpress.com/feed/');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="description" content="Neerajpro,neeraj goswami,Neeraj goswami ui developer,neeraj goswami Javascript Engineer,neerajpro.in"/>
	<meta name="description" content="neeraj goswami"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>
    Neerajpro Home  
    </title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css"/>    
        <link rel="stylesheet" href="css/flat-ui.css"/>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
      <div class="container-fluid">
          <div class="row main_content">
        <div class="">
                <div class="col-xs-3">
                <figure >
                    <img src="img/neeraj.jpg" class=" thumbnail main_image" height="200px;" width="200px;" id="image"/>
                </figure>
                <h5 class="blog-title text-center" style="font-family: Gentium Book Basic;text-align: left;font-style: italic"><a href="#" style="color:#3498DB">Neeraj Kumar</a></h5>
                <div class="navigation">
                	<ul class="nav">
                		<li><a href="about.html">About </a></li>
                		<li><a href="projects.html">Projects </a></li>
                		<li><a  href="contact.html" >Contact Me</a></li>
                		
                	</ul>
                	
                	
                	
                </div>
                </div>
            
                <div class="col-xs-7">
                <div class="row main-name">
                	
                <h5>Neeraj Kumar (Neeraj Goswami)</h5>
                <p>FrontEnd Developer | Javascript Engineer &amp; UX Enthusiast</p>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-1">
                        <btn class="btn btn-block btn-lg btn-info">Check out some of my blog Entries</btn>                      </div>
                </div>
               
<!--             blog entries -->
<?php
     $limit = 10;
		for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		
?>
                <div class="row">
                <div class="col-xs-12" id="blog_name"><span class="fui-gear"></span><a  class="blog_links" 
                  href="<?= $link = $feed[$x]['link'];?>" target="_blank">
                   <?= $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']); ?></a></h3>
                    <small class="date"><?= 	$date = date('l F d, Y', strtotime($feed[$x]['date']));?></small>
                </div>
                </div>
                <?php } ?>
<!--blog entries ends here -->
                    <!--             blog entries -->
             
<!--blog entries ends here -->
                </div>
                
                	
                	
                	
                <div class="col-xs-2">
<!--                    space left fgort g=futyure -->
                </div>
          </div>
        </div>
      </div>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- AddThis Smart Layers BEGIN -->
						<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
						<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-534cdbcf48ed0589"></script>
						<script type="text/javascript">
						  addthis.layers({
						    'theme' : 'transparent',
						    'share' : {
						      'position' : 'right',
						      'numPreferredServices' : 5
						    }, 
						    'follow' : {
						      'services' : [
						        {'service': 'facebook', 'id': 'https://www.facebook.com/neerajpro'},
						        {'service': 'twitter', 'id': 'https://twitter.com/neerajpro'},
						        {'service': 'linkedin', 'id': 'http://www.linkedin.com/profile/view?id=110334449&trk=nav_responsive_tab_profile'},
						        {'service': 'google_follow', 'id': 'https://plus.google.com//nbneeraj8@gmail.com'}
						      ]
						    },  
						    'whatsnext' : {},  
						    'recommended' : {} 
						  });
						</script>
<script type="text/javascript">
 $(document).ready(function(){
                      $('#image').mouseover(function()
                            {
                                $(this).css("cursor","pointer");
                                $(this).animate({width: "1000px",height:"1000px"}, 'fast');
                            });
                      $('#image').mouseout(function()
                        {   
                            $(this).animate({width: "200px",height:"200px"}, 'fast');
                        });
                      
                      });

</script>
						<!-- AddThis Smart Layers END -->
    </body>
    
    
</html>
