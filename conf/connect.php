<?
 $cnx = mysql_connect( 'localhost', 'kamlv_avtime', 'av160377mnt22' ) or die('Cannot connect to DB server');
 mysql_select_db( 'kamlv_avtime', $cnx ) or die('Cannot open database');
 mysql_set_charset('utf8', $cnx);
 


  function ResizeImage($image_from,$image_to, $fitwidth,$fitheight,$quality) { 

        global $php_inc; 



        $os=$originalsize=getimagesize($image_from); 

        if($originalsize[2]!=2 && $originalsize[2]!=3 && $originalsize[2]!=6 && ($originalsize[2]<9 or $originalsize[2]>12)) { 

            return false; 

        } 

        if($originalsize[0]>$fitwidth or $originalsize[1]>$fitheight) { 

            $h=getimagesize($image_from); 

            if(($h[0]/$fitwidth)>($h[1]/$fitheight)) 

                { 

                    $fitheight=$h[1]*$fitwidth/$h[0]; 

                }else{ 

                    $fitwidth=$h[0]*$fitheight/$h[1]; 

                } 

            if($os[2]==2 or ($os[2]>=9 && $os[2]<=12))$i = ImageCreateFromJPEG($image_from); 

            if($os[2]==3)$i=ImageCreateFromPng($image_from); 

            $o = ImageCreateTrueColor($fitwidth, $fitheight); 

            echo $i;

            echo $o;

            imagecopyresampled($o, $i, 0, 0, 0, 0, $fitwidth, $fitheight, $h[0], $h[1]); 

            imagejpeg($o, $image_to, $quality);  

            chmod($image_to,0777); 

            imagedestroy($o); 

            imagedestroy($i);





            echo '-1-';

            return 2; 

        } 

        if($originalsize[0]<=$fitwidth && $originalsize[1]<=$fitheight) { 

            $i = ImageCreateFromJPEG($image_from); 

            imagejpeg($i, $image_to, $quality);  

            chmod($image_to,0777);

            echo '-2-'; 

            return 1; 

        } 
    }
?>