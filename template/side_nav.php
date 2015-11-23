<aside class="column column3">
  <h2>Каталог</h2>
    <ul>
      <?php foreach ($categories as $i=>$title) {?>
        <li><a href="<?php echo $i; ?>"><?php echo $title; ?></a></li>
			<?php } unset($i); ?>
		</ul>
</aside>  