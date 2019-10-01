<?php 
        $user        =    "root";   
        $pass        =    "";
        $host        =    "localhost"; 
        $db            =    "hurriyetbot";
      
        $baglan = mysql_connect($host,$user,$pass) or die(mysql_error());
        
        mysql_select_db($db,$baglan) or die(mysql_error());   
        mysql_query("SET CHARACTER SET 'UTF8'");
        mysql_query("SET NAMES 'UTF8'"); 
?>