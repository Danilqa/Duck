<nav>
  <ul>
    <?php foreach($pages as $i=>$title) { ?>
      <li><a href="<?php echo $i;?>"><?php echo $title; ?></a></li>
    <?php } unset($i);?>
  </ul>
</nav>