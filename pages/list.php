<?php 
  include_once('../database/db_list.php');

  include_once('../templates/tpl_common.php');
  include_once('../templates/tpl_lists.php');

  $lists = getUserLists('john');
  foreach ($lists as $k => $list)
    $lists[$k]['list_items'] = getListItems($list['list_id']);

  draw_header('john');
  draw_lists($lists);
  draw_footer();
?>