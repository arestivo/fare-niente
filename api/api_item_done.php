<?php
  include_once('../includes/session.php');
  include_once('../database/db_list.php');

  header('Content-Type: application/json');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
    die(json_encode(array('error' => 'not_logged_in')));

  $item_id = $_POST['item_id'];
  $item = getItem($item_id);

  // Verifies if item exists and user is owner
  if (!$item || !checkIsListOwner($_SESSION['username'], $item['list_id']))
    die(json_encode(array('error' => 'not_item_owner')));

  // Toggles the done state
  toggleItem($item_id);

  // Gets the item from the database
  $item = getItem($item_id);

  // Returns the item as JSON
  echo json_encode($item);
?>