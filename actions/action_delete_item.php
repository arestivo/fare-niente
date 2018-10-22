<?php
  include_once('../includes/session.php');
  include_once('../database/db_list.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
    die(header('Location: ../pages/login.php'));

  $item_id = $_GET['item_id'];
  $item = getItem($item_id);

  // Verifies if item exists and user is owner
  if (!$item || !checkIsListOwner($_SESSION['username'], $item['list_id']))
    die(header('Location: ../pages/list.php'));

  deleteItem($item_id);

  header('Location: ../pages/list.php');
?>