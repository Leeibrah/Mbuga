<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css" media="screen,print">
	@import '/css/lab.css';
	body {padding:1em}
	#wrap {
		width:500px;
		margin:1em auto;
	}
	body {font:76%/1.4 Verdana,sans-serif;}
/* Disable properties specified in the imported CSS file */
	.menu a {
		border:none;
		font-weight:normal;
	}

/* Actual menu CSS starts here */
	.menu,
	.menu ul {
		margin:0;
		padding:0;
		list-style:none;
	}
	.menu {width:200px;}
	.menu li {
		display:block;
		margin:0;
		padding:0;
		margin-bottom:1px;
	}
	.menu a {
		display:block;
		padding:2px 5px;
		color:#000;
		background:#b0c23d;
		text-decoration:none;
	}
	.menu a:hover,
	.menu a:focus,
	.menu a:active {background:#d9dcb0;}
	.menu ul li {padding-left:15px;}
	.menu ul a {background:#ced174;}
	.hidden {display:none;}
	
	#header{
    overflow: visible; /* Let menu content overflow outside the header */
}
#header ul { /* Menu Name */
    margin-top: 1em;
}
#header .ui-btn-corner-all {
    /* border-radius: 0; /* Make the menu button squarish */
}
#header ul ul { /* Menu Item List */
    position: absolute; /* Position absolutely */
    display: none; /* Hide */
    z-index:500; /* Ensure visibility over other elements on page */
    margin-top: 0px; /* Bring menu closer to button; not needed on mobile */
}
#header ul ul li {
    width: 150px; /* Fixed width menu items*/
    display: block; /* JQM makes a inline-blocks... reset it to block */
}
#header ul ul li a {
    white-space: normal; /* Stop long menu names from truncating */
}
#header ul:hover ul {
    /* display: block; /* Display menu on hover over parent */
}
#menu-left {
    float: left;
    margin-left:0.5em;
}
#menu-right {
    float: right;
    margin-right:0.5em; 
}
#menu-left ul {
    margin-left:0.5em;
}
#menu-right ul {
    margin-right: 0.5em;
    right: 0em;
}
#home .ui-header {
    height: 75px;
}
#home .ui-header h1 {
    font-size: 16pt;
    margin-bottom:0px;
}
#txtSpan {
    position: relative;
    display: inline-block;
    top: -5px; /* Doesnt seem possible to vertically center otherwise */
}
#home .ui-header h2 {
    font-size: 14pt;
    margin-top: 0px;
}

$('body').bind('hideOpenMenus', function(){
    $("ul:jqmData(role='menu')").find('li > ul').hide();
}); 
var menuHandler = function(e) {
    $('body').trigger('hideOpenMenus');
    $(this).find('li > ul').show();
    e.stopPropagation();
};
$("ul:jqmData(role='menu') li > ul li").click(function(e) {
   $('body').trigger('hideOpenMenus');
e.stopPropagation();
});
$('body').delegate("ul:jqmData(role='menu')",'click',menuHandler);
$('body').click(function(e){
   $('body').trigger('hideOpenMenus');
});
​
</style>

<script type="text/javascript" src="javascript/togglemenu.js"></script>
</head>

<body>
		<ul class="menu" data-theme="c">
			<li><a href=".">Category 1</a>
				<ul>
					<li><a href="/">Sub category 1a</a></li>

					<li><a href="/">Sub category 1b</a></li>
					<li><a href="/">Sub category 1c</a></li>
					<li><a href="/">Sub category 1d</a></li>
				</ul>
			</li>
        </ul>
        
        <!-- Another starts here -->
        <a href="#popupMenu" data-rel="popup" data-role="button" data-inline="true" data-transition="fade">Menu</a>

<div data-role="popup" id="popupMenu" data-overlay-theme="b">
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="b">
        <li><a data-rel="popup" href="#popupMenuLevel1">Add</a></li>
        <li><a data-rel="popup" href="#popupMenuLevel1">Edit</a></li>
        <li><a data-rel="popup" href="#popupMenuLevel1">Manage</a></li>
        <li><a data-rel="popup" href="#popupMenuLevel1">Delete</a></li>
    </ul>
</div>

<div data-role="popup" id="popupMenuLevel1" data-overlay-theme="b">
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="b">
    <li><a data-rel="popup" href="#popupMenuLevel2">Remove</a></li>
    <li><a data-rel="popup" href="#popupMenuLevel2">Undo</a></li>
    <li><a data-rel="popup" href="#popupMenuLevel2">Splice</a></li>
    <li><a data-rel="popup" href="#popupMenuLevel2">Reticulate</a></li>
    </ul>
</div>

<div data-role="popup" id="popupMenuLevel2" data-overlay-theme="b">
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="b">
        <li><a href="index.html">Basics</a></li>
        <li><a href="options.html">Options</a></li>
        <li><a href="methods.html">Methods</a></li>
        <li><a href="events.html">Events</a></li>
    </ul>
</div>

  <li>
                <span data-role="button" data-icon="arrow-d" data-iconpos="right">Actions</span>
                <ul data-role="listview" data-inset="true">
                    <li data-icon="false"><a href="#a1">Option B1</a></li>
                       <li data-icon="false"><a href="#a1">Option B2</a></li>
                </ul>
            </li>
</body>
</html>