<?php
  include_once('../includes/session.php');
  include_once('../database/db_list.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
  die(header('Location: ../pages/login.php'));

  $list_name = $_POST['list_name'];
  $username = $_SESSION['username'];

  insertList($list_name, $username);

  header('Location: ../pages/list.php');
?>