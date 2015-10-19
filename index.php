<?php include("head.php");?>
<?php include("app/nav.php");?>

<!-- <h3> HELLO WORLD </h3> -->
<?php
  $page = array(
                "404.php",
                "app/login.php",
                "app/home.php",
                "app/rooms.php",
                "app/devices.php",
                "app/preset.php",
                "app/schedule.php"
  );

  if(isset($_GET['p'])){
    if($_GET['p']== "1" )
      include($page[1]);
    elseif($_GET['p']== "2" )
      include($page[2]);
    elseif($_GET['p']== "3" )
      include($page[3]);
    elseif($_GET['p']== "4" )
      include($page[4]);
    elseif($_GET['p']== "5" )
      include($page[5]);
    elseif($_GET['p']== "6" )
      include($page[6]);
    else
      include($page[0]);
  }else{
    include("app/login.php");
  }
?>

<?php include ("app/foot.php");?>
