<?php
error_reporting(0);
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="db";


   $conn = new mysqli($servername, $username, $password, $dbname);
   if($conn)
   {
    // echo "connection ok";
   }
   else{
    echo "connection failed".mysqli_connet_error();
   }

   ?>