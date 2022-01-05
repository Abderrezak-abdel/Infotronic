<?php 
  $username = $_POST['username'];
  $password = $_POST['pass'];
  session_start(); 
  $_SESSION['user'] = $username;
  $_SESSION['connect'] = 1; 
  header('location:../main.php');
