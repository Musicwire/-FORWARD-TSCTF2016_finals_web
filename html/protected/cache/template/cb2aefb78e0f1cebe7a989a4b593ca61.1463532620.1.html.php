<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="carousel cut">
  <div class="carousel-imgs cut">
  <?php $_foreach_v_counter = 0; $_foreach_v_total = count($vars);?><?php foreach( $vars as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?><?php echo $v; ?><?php endforeach; ?>
  </div>
  <ul class="carousel-tog"><?php $_foreach_v_counter = 0; $_foreach_v_total = count($vars);?><?php foreach( $vars as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?><li><?php echo htmlspecialchars($k, ENT_QUOTES, "UTF-8"); ?></li><?php endforeach; ?></ul>
</div>