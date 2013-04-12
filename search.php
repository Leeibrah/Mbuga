<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>

	 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
        <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
       <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js">
        </script>-->
         <script>
		$(function() {
			$( "input[type=submit], a, button" )
				.button()
				.click(function( event ) {
					event.preventDefault();
				});
		});
    </script>
    
    
  <!--  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head>

  <body>
	<div data-role="page" > <!-- Start of page content -->
         
		<div data-role="header">
			<div id="header">Mbuga</div> 
        </div> <!--header-->
         
         <div data-role="content"> <!-- Content starts -->
          		
           
               
               
                	<!--//* Categories buttons */ -->
    	<div data-role="controlgroup" data-theme="a" title="Buttons">
        
          <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
					<li data-role="list-divider">Advanced Search</li>
					<li><a href="http://localhost/mbuga/pages/locate.php">by Name</a></li>
					<li><a href="http://localhost/mbuga/pages/parks.php">by Location</a></li>
					<li><a href="http://localhost/mbuga/pages/map.php">by Activity</a></li>
          </ul>	
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