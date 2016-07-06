<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="helpper cut">
  <div class="guarantee radius4 cut">
    <dl>
      <dt><i class="g-1 icon"></i></dt>
      <dt class="mt5">放心购物</dt>
      <dd class="mt5">正品保障，付款安全</dd>
    </dl>
    <span class="sep"></span>
    <dl>
      <dt><i class="g-2 icon"></i></dt>
      <dt class="mt5">闪电发货</dt>
      <dd class="mt5">当日处理，极速配货</dd>
    </dl>
    <span class="sep"></span>
    <dl>
      <dt><i class="g-3 icon"></i></dt>
      <dt class="mt5">退换承诺</dt>
      <dd class="mt5">7日以内，尊享退换</dd>
    </dl>
    <span class="sep"></span>
    <dl>
      <dt><i class="g-4 icon"></i></dt>
      <dt class="mt5">售后无忧</dt>
      <dd class="mt5">贴心服务，快速响应</dd>
    </dl>
    <span class="sep"></span>
    <dl>
      <dt><i class="g-5 icon"></i></dt>
      <dt class="mt5">畅想低价</dt>
      <dd class="mt5">每日促销，折扣不停</dd>
    </dl>
  </div>
  <div class="cl"></div>
  <div class="helpli cut">
    <?php $_foreach_v_counter = 0; $_foreach_v_total = count($helper_list);?><?php foreach( $helper_list as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
    <dl>
      <dt><?php echo htmlspecialchars($v['cate_name'], ENT_QUOTES, "UTF-8"); ?></dt>
      <?php $_foreach_vv_counter = 0; $_foreach_vv_total = count($v['children']);?><?php foreach( $v['children'] as $vv ) : ?><?php $_foreach_vv_index = $_foreach_vv_counter;$_foreach_vv_iteration = $_foreach_vv_counter + 1;$_foreach_vv_first = ($_foreach_vv_counter == 0);$_foreach_vv_last = ($_foreach_vv_counter == $_foreach_vv_total);$_foreach_vv_counter++;?>
      <dd><a title="<?php echo htmlspecialchars($vv['title'], ENT_QUOTES, "UTF-8"); ?>" href="<?php echo htmlspecialchars($vv['link'], ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($vv['title'], ENT_QUOTES, "UTF-8"); ?></a></dd>
      <?php endforeach; ?>
    </dl>
    <?php endforeach; ?>
  </div>
</div>