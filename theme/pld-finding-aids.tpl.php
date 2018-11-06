<?php
/**
* Template file for finding aids display
*/

?>
<h2 class="fa-page-title"><?php print t('Finding Aids'); ?></h2>
<div class="pld-finding-aids__wrapper">
	<?php foreach($items as $item) {
		$label = $item['label'];
		$pid = $item['pid'];
		$fa = $item['finding_aid']; ?>
	<div class="collection-finding-aid">
		<a href="<?php print $fa; ?>"><i class="fas fa-file" aria-hidden="true"></i>
		</a>
		<a href="islandora/object/<?php print $pid?>" class="collection-title"><?php print $label; ?></a>
		<a href="<?php print $fa; ?>" class="btn">View Finding Aid</a>
	</div>
	<?php
		}
	?>

</div>