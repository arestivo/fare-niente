<?php
  include_once('../includes/session.php');
  include_once('../database/db_list.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
  die(header('Location: ../pages/login.php'));

  $list_name = $_POST['list_name'];
  $username = $_SESSION['username'];

  // Remove disallowed characters
  $list_name = preg_replace ("/[^a-zA-Z\s]/", '', $list_name);

  insertList($list_name, $username);

  header('Location: ../pages/list.php');
?>