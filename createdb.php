<?php
   $dbhost = 'https://sg3plcpnl0194.prod.sin3.secureserver.net:2083/cpsess0460493428/3rdparty/phpMyAdmin/index.php';
   $dbuser = 'privatejet';
   $dbpass = 'privatejet';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
    //   die('Could not connect: ' . mysql_error());
    echo "cant connect";
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database privatejet';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database privatejet created successfully\n";
   mysql_close($conn);
?>