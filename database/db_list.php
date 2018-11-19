<?php
  include_once('../includes/database.php');

  /**
   * Returns the lists belonging to a certain user.
   */
  function getUserLists($username) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM list WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetchAll(); 
  }

  /**
   * Returns the items belonging to a certain list.
   */
  function getListItems($list_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM item WHERE list_id = ?');
    $stmt->execute(array($list_id));
    return $stmt->fetchAll(); 
  }

  /**
   * Inserts a new list into the database.
   */
  function insertList($list_name, $username) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO list VALUES(NULL, ?, ?)');
    $stmt->execute(array($list_name, $username));
  }

  /**
   * Verifies if a user owns a list.
   */
  function checkIsListOwner($username, $list_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM list WHERE username = ? AND list_id = ?');
    $stmt->execute(array($username, $list_id));
    return $stmt->fetch()?true:false; // return true if a line exists
  }

  /**
   * Inserts a new item into a list.
   */
  function insertItem($item_text, $list_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO item VALUES(NULL, ?, 0, ?)');
    $stmt->execute(array($item_text, $list_id));
  }

  /**
   * Returns a certain item from the database.
   */
  function getItem($item_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM item WHERE item_id = ?');
    $stmt->execute(array($item_id));
    return $stmt->fetch();
  }

  /**
   * Deletes a certain item from the database.
   */
  function deleteItem($item_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('DELETE FROM item WHERE item_id = ?');
    $stmt->execute(array($item_id));
  }

  /**
   * Toggles the done state of a certain item.
   */
  function toggleItem($item_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('UPDATE item SET item_done = 1 - item_done WHERE item_id = ?');
    $stmt->execute(array($item_id));
  }
?>