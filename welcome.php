<?php

date_default_timezone_set('Asia/Jakarta');
   $time = date("H");
   // echo $time;
   // $timezone = date("e");
   if ($time < "12") {
       echo "Selamat Pagi!!";
   } else
   if ($time >= "12" && $time < "17") {
       echo "Selamat Siang!!";
   } else
   if ($time >= "17" && $time < "19") {
       echo "Selamat Sore!!";
   } else
   if ($time >= "19") {
       echo "Selamat Malam!!";
   }
   ?>
