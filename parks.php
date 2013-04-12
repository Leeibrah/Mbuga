<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mbuga</title>

	 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
        <link rel="stylesheet" href="../css/style.css" />
		 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js">
        </script>
</head>

<body>
		<div data-role="page" data-theme="c">
         
        <div data-role="header" class="header_color">
          <h1>Parks</h1>
          <a href="/mbuga" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">Home</a>
        </div> <!--header-->
         
        <div data-role="controlgroup" data-theme="a" title="Buttons">
        
          <ul data-role="listview" data-filter="true">
		<?php
		include_once('includes/config.php');
		$sql = "select p.id, p.park_name, p.park_location, count(r.id) reportCount " . 
				"from parks p left join parks r on r.id = p.id " .
				"group by p.id order by p.park_name";
		//$sqll = "SELECT * FROM sites";
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->query($sql); 
			while ($emp = $stmt->fetch(PDO::FETCH_OBJ)) {  
				echo "<li><a href='parks.php?id=$emp->id'>" .					
					"<h4>$emp->park_name</h4>";
					//"<span class='ui-li-count'>$emp->reportCount</span></a></li>";
			}
			$dbh = null;
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
		?> 
			</ul>
 		 </div>
         
         <div data-role="footer" data-theme="a">
         	<div id="footer_text">
	         	Mbuga. &copy; All Rights Reserved.
            </div>
         </div> <!-- closing of footer content -->
   	</div>
    
</body>
</html>