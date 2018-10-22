<?php
  include_once('../includes/session.php');
  include_once('../database/db_list.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
  die(header('Location: ../pages/login.php'));

  $list_id = $_POST['list_id'];
  $item_text = $_POST['item_text'];

  // Verify if user owns the list
  if (!checkIsListOwner($_SESSION['username'], $list_id))
    die(header('Location: ../pages/list.php'));

  insertItem($item_text, $list_id);

  header('Location: ../pages/list.php');
?>