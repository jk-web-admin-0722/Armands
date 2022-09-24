<?php
/* lapa atrodas uz webservera zem domēna www.programming.lv */
session_start();
$sess=session_id();
include ('conf/connect.php');
include ('conf/globals.php');
include ('get_language.php');

?>
<!DOCTYPE html>
<html lang="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROGRAMMING</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link type="text/css" media="all" href="style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<script type='text/javascript'>
function la(x)
{
  setCookie('lang', x, null);
window.location.reload(); 
}
function setCookie(cookieName,cookieValue,nDays)
{
 var today = new Date();
 var expire = new Date();
 if (nDays==null || nDays==0) nDays=9999;
 expire.setTime(today.getTime() + 3600000*24*nDays);
 document.cookie = cookieName+'='+escape(cookieValue)+';expires='+expire.toGMTString();
}


</script>
</head>

<body>
	<div class='section_1'>
    	<div class='menu'>
        	<div class='logo'>programming</div>
            <div class='soci'>
            	<div class='lang_sel'>
                	<select class='lang_selector'  onchange="la(value);">
                    	<option value='lv' class='sel_opt' <? if($_COOKIE['lang']=='lv') print 'selected';?>>LV</option>
                        <option value='ru' class='sel_opt' <? if($_COOKIE['lang']=='ru') print 'selected';?>>RU</option>
                        <option value='uk' class='sel_opt' <? if($_COOKIE['lang']=='uk') print 'selected';?>>EN</option>
                    </select>
                </div>
            	<div class='whatsap'></div>
                <div class='instagram'></div>
                <div class='twitter'></div>
                <div class='facebook'></div>
            </div>
        </div>
    </div>
       <!-- <div class='menu_links'  id="navbar">-->
        <div id="navbar">
        	<div class='menu_button'>
            <button  <?php if($_GET['page']=='') print "class=link_home_active"; else print "class=link_home"; ?> onclick="window.location.href='index.php'"><?=LANG_HOME?></button></div>
            <div class='menu_button'><button <?php if($_GET['page']=='about') print "class=link_about_active"; else print "class=link_about"; ?>  class='link_about' onclick="window.location.href='index.php?page=about'"><?=LANG_ABOUT?></button></div>
            <div class='menu_button'><button <?php if($_GET['page']=='products') print "class=link_products_active"; else print "class=link_products"; ?>  class='link_products' onclick="window.location.href='index.php?page=products'"><?=LANG_PRODUCTS?></button></div>
            
            <div class='menu_button'><button <?php if($_GET['page']=='jobs') print "class=link_jobs_active"; else print "class=link_jobs"; ?>  class='link_jobs' onclick="window.location.href='index.php?page=jobs'"><?=LANG_JOB?></button></div>
            <div class='menu_button'><button <?php if($_GET['page']=='contacts') print "class=link_contacts_active"; else print "class=link_contacts"; ?>  class='link_contacts' onclick="window.location.href='index.php?page=contacts'"><?=LANG_CONTACTS?></button></div>
        </div>
    

   
     

<?
if ($_GET['page']=='about') include ('includes/about.php');
		else if ($_GET['page']=='jobs') include ('includes/jobs.php');
		else if ($_GET['page']=='products') include ('includes/products.php');
		else if ($_GET['page']=='contacts') include ('includes/contacts.php');	
		else include ('includes/homepage.php');
?>

       
    
          
   <script type='text/javascript'>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.paddingTop = "10px";
	document.getElementById("navbar").style.backgroundColor  = "#333333";
	document.getElementById("navbar").style.borderBottomLeftRadius = "10px";
	document.getElementById("navbar").style.borderBottomRightRadius = "10px";
  } else {
    document.getElementById("navbar").style.paddingTop = "150px";
	document.getElementById("navbar").style.backgroundColor  = "transparent";
  }
}
</script>         

</body>
</html>
