<?php function draw_lists($lists) {
/**
 * Draws a section (#lists) containing several lists
 * as articles. Uses the draw_list function to draw
 * each list.
 */ ?>
  <section id="lists">

  <?php 
    foreach($lists as $list)
      draw_list($list);
  ?>

  <article class="new-list">
    <form action="../actions/action_add_list.php" method="post">
      <input type="text" name="list_name" placeholder="Add list">
    </form>
  </article>

  </section>
<?php } ?>

<?php function draw_list($list) {
/**
 * Draw a single list as an article (.list). Uses the
 * draw_item function to draw each item. Expects each 
 * list to have an list_id, list_name and list_items 
 * fields.
 */ ?>
  <article class="list">
    <header><h2><?=$list['list_name']?></h2></header>

    <ol>
      <?php 
        foreach ($list['list_items'] as $item)
          draw_item($item);
      ?>
    </ol>

    <form action="../actions/action_add_item.php" method="post">
      <input type="hidden" name="list_id" value="<?=$list['list_id']?>">
      <input type="text" name="item_text" placeholder="Add item">
    </form>

  </article>
<?php } ?>

<?php function draw_item($item) {
/**
 * Draws a single item. Expects each item to have
 * an item_id, item_done and item_text fields. 
 **/ ?>
  <li>
    <a href="../actions/action_delete_item.php?item_id=<?=$item['item_id']?>"><i class="fas fa-trash"></i></a>
    <label>
      <input type="checkbox" <?=$item['item_done']?'checked':''?>>
      <?=$item['item_text']?>
    </label>
  </li>
<?php } ?>