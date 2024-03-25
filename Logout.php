<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    echo
    "<script>
      alert('Logged out succesfully!')
      document.location='index.php'
    </script>";
}else{
    echo
    "<script>
      document.location='index.php'
    </script>";
}
?>