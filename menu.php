
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


#navbar {
		max-width: 800px;
  	margin: auto;
	display: flex;
  justify-content: center;
  align-items: center;
margin-top: -10px;
  overflow: hidden;
  background-color: #333;
  padding: 90px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}



@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  
  }
}
.menu_button {
	 flex-shrink: 0;
}
.link_home {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:transparent;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_home:hover {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_home_active {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_about {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:transparent;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_about:hover {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_about_active {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_jobs {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:transparent;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_jobs:hover {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_jobs_active {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_products {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:transparent;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_products:hover {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_products_active {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_contacts {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:transparent;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_contacts:hover {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
.link_contacts_active {
	margin:10px;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	background-color:#D24242;
	color: #fff;
	border-radius: 15px;
	border: none;
}
</style>
</head>
<body>

<div  id="navbar">
        	<div class='menu_button'>
            <button  <?php if($_GET['page']=='') print "class=link_home_active"; else print "class=link_home"; ?> onclick="window.location.href='index.php'"><?=LANG_HOME?></button></div>
            <div class='menu_button'><button <?php if($_GET['page']=='about') print "class=link_about_active"; else print "class=link_about"; ?>  class='link_about' onclick="window.location.href='index.php?page=about'"><?=LANG_ABOUT?></button></div>
            <div class='menu_button'><button <?php if($_GET['page']=='products') print "class=link_products_active"; else print "class=link_products"; ?>  class='link_products' onclick="window.location.href='index.php?page=products'"><?=LANG_PRODUCTS?></button></div>
            
            <div class='menu_button'><button <?php if($_GET['page']=='jobs') print "class=link_jobs_active"; else print "class=link_jobs"; ?>  class='link_jobs' onclick="window.location.href='index.php?page=jobs'"><?=LANG_JOB?></button></div>
            <div class='menu_button'><button <?php if($_GET['page']=='contacts') print "class=link_contacts_active"; else print "class=link_contacts"; ?>  class='link_contacts' onclick="window.location.href='index.php?page=contacts'"><?=LANG_CONTACTS?></button></div>
        </div>

<!--
<div id="navbar">
  
  <div id="navbar-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
-->
<div style="margin-top:210px;padding:15px 15px 2500px;font-size:30px">
  <p><b>This example demonstrates how to shrink a navigation bar when the user starts to scroll the page.</b></p>
  <p>Scroll down this frame to see the effect!</p>
  <p>Scroll to the top to remove the effect.</p>
  <p><b>Note:</b> We have also made the navbar responsive, resize the browser window to see the effect.</p>
  <p>Lorem ipsum dolor dummy text to enable scrolling, sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
  }
}
</script>

</body>
</html>
