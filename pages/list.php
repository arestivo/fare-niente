<?php 
  include_once('../includes/session.php');
  include_once('../database/db_list.php');
  include_once('../templates/tpl_common.php');
  include_once('../templates/tpl_lists.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
    die(header('Location: login.php'));

  // Lists owned by the user currently logged in
  $lists = getUserLists($_SESSION['username']);
  foreach ($lists as $k => $list)
    $lists[$k]['list_items'] = getListItems($list['list_id']);

  draw_header($_SESSION['username']);
  draw_lists($lists);
  draw_footer();
?>