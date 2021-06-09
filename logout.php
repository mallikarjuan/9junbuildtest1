<?php
## changes after the reboot
#distrory session
session_start();
session_destroy();

//session_regenerate_id();
### second change####
#redirect login page 
header('Location:login.php');

?>
