<?php
/**
* Template file for finding aids display
*/

?>
<div class="pld-finding-aids__wrapper">
	<?php foreach($items as $item) {
		$label = $item['label'];
		$pid = $item['pid'];
		$fa = $item['finding_aid']; 
		$description = $item['description']; 
		$tn_image = $item['thumbnail_image'];
		$url = $item['collection_url'];
		?>
	<div class="collection-finding-aid">
		<div class="collection_thumb">
			<a href="<?php print $fa; ?>">
				<img src="<?php print $tn_image; ?>" alt="<?php print $label; ?> thumbnail" />
			</a>
		</div>

		<div class="collection_information">
			<a href="islandora/object/<?php print $pid?>" class="collection-title"><?php print $label; ?></a>
			<p class="collection_description"><?php print $description; ?></p>
			<a href="<?php print $fa; ?>" class="btn">Download Finding Aid <i class="fas fa-file-download" aria-hidden="true"></i></a>
			<a href="<?php print $url; ?>" class="btn"> View Collection <i class="fas fa-angle-right" aria-hidden="true"></i></a>
		</div>
	</div>
	<?php
		}
	?>

</div>