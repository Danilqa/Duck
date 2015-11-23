<?php
    require("data/data.php");
    
    require($template_dir."/head.php");
?>

<body>
    <?php
        require($template_dir."/header.php");
    ?>
<main>
	<div class="container">
		<?php require($template_dir."/banner.php"); ?>
		<div class="row clearfix">
			<!-- боковое меню -->
      <?php
        require($template_dir."/side_nav.php");
      ?>
      <?php require($template_dir."/list_items.php"); ?>
		</div>
	</div>
</main>
<?php require($template_dir."/footer.php"); ?>