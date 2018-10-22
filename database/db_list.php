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
?>