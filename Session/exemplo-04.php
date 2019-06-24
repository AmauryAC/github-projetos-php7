<?php 

 //session_id('39vf4gf4a01oekjklgu2r32al6');

 require_once("config.php");

 session_regenerate_id();

 echo session_id();

 var_dump($_SESSION);

 ?>