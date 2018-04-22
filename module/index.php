<?php
session_start();
if(!$_SESSION){
  header("location:../index.php");
} else {
    header("location:home.php");
}
?>