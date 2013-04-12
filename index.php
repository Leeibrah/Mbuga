<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mbuga</title>

	 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js" />
		 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js">
        </script>
</head>

  <body>
	<div data-role="page" > <!-- Start of page content -->
         
		<div data-role="header">
			<!-- <div id="header">Mbuga</div> -->
        </div> <!--header-->
         
         <div data-role="content" id="body" data-theme="b"  style="background-
image:url(../images/grdient_skin_bg.png) no-repeat"> <!-- Content starts -->
          		<div id="logo_image">
             	    <img src="images/main_logo.png" width="20%" alt="mbuga_logo"/><br />
                	<img src="images/mbuga_logo.png" width="30%" alt="mbuga_logo"/>
                
                </div>
                <br />
                <br />
                <br />
               
               
                	<!--//* Categories buttons */ -->
    	<div data-role="controlgroup" data-theme="a" title="Buttons">
        
          <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
					
					<li><a id="clickme" href="">Locate a Park</a></li>
                    
    <script>
		$(document).ready(function(){
			 $('#book').hide();
			$('#clickme').click(function() {
			  $('#book').slideToggle('slow', function() {
				// Animation complete.
			  });
			});
		
		});
        </script>
		<div id="book">
        <div>
			<li><a href="byname.php">by Name</a></li>
            <li><a href="bylocation.php">by Location</a></li>
            <li><a href="byactivity.php">by Activity</a></li>
		</div>

	
	</div>
					<li><a href="http://localhost/mbuga/parks.php">Kenya Parks</a></li>
					<li><a href="http://localhost/mbuga/map.php">View Map</a></li>
          </ul>	
 		 </div>
         
         <div id="social_icons">
         	<a href="http://www.facebook.com/mbugaapp" target="_blank"><img src="images/facebook_icon.png" alt="facebook_icon" width="10%"/></a>
            <a href="http://www.twitter.com/mbugaapp" target="_blank"><img src="images/twitter_icon.png" alt="twitter_icon" width="10%"/></a>
         </div>
           </div>
            	 
         <div data-role="footer" data-theme="a">
         	<div id="footer_text">
	         	Mbuga. &copy; All Rights Reserved.
            </div>
         </div> 
         <!-- closing of footer content --><!-- Closing of page content --></div>
  </body>
	
</body>
</html>