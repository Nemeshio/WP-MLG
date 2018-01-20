<?php
  if(!empty($_POST['paswd'])){
     $pass = "25022004";
    if($_POST['paswd']==$pass){
      session_start();
      $_SESSION['access']=true;
      header("Location: adminpanel.php") ;
    }
    else {
       echo "YoU ARE HACKER!";
    }
  }
  else
  {
    ?>
    <form method="POST">
      <input type="text" name="paswd">
      <input type="submit" value="Login">
    </form>
    <?php
  }
?>