<?php
  include_once('../includes/session.php');
  include_once('../database/db_list.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
    die(header('Location: ../pages/login.php'));

  // Verifies CSRF token
  if ($_SESSION['csrf'] != $_GET['csrf']) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Invalid request!');
    die(header('Location: ../pages/list.php'));
  }

  $item_id = $_GET['item_id'];
  $item = getItem($item_id);

  // Verifies if item exists and user is owner
  if (!$item || !checkIsListOwner($_SESSION['username'], $item['list_id'])) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Can\'t delete this item!');
    die(header('Location: ../pages/list.php'));
  }

  deleteItem($item_id);
  $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Item deleted!');

  header('Location: ../pages/list.php');
?>