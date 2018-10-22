<?php 
  include_once('templates/tpl_common.php');
  include_once('templates/tpl_lists.php');

  $lists = array(
    array( 
      'list_id' => 1, 
      'list_name' => 'Things to do',
      'list_items' => array(
        0 => array(
          'item_id' => 1,
          'item_text' => 'Buy milk',
          'item_done' => 0  
        ),
        1 => array(
          'item_id' => 2,
          'item_text' => 'Walk the dog',
          'item_done' => 1
        )
      )
    ), array( 
      'list_id' => 2, 
      'list_name' => 'Things NOT to do',
      'list_items' => array(
        0 => array(
          'item_id' => 3,
          'item_text' => 'Break a leg',
          'item_done' => 1  
        ),
        1 => array(
          'item_id' => 4,
          'item_text' => 'Crash the car',
          'item_done' => 0
        ),
        2 => array(
          'item_id' => 5,
          'item_text' => 'Fail the exam',
          'item_done' => 1
        )
      )
    )    
  );

  draw_header('john');
  draw_lists($lists);
  draw_footer();
?>