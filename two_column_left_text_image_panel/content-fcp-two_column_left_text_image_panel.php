<?php 	$heading = $fcp['heading'];
		$content = $fcp['content'];
		$image_id =	$fcp['image']; ?>
<div class="fcp-row fcp-two_col_left_text_image_panel">
		<div class="row">
			<div class="columns large-8 small-12">
				<?php if($heading) { ?><h3 class="section_title"><?php echo $heading; ?></h3><?php }; ?>
				<?php echo $content; ?>
			</div>
			<div class="columns large-4 small-12">
				<?php $image_arr = wp_get_attachment_image_src($image_id, 'text_aside_square');
				if($image_arr) { ?><img src="<?php echo $image_arr[0]; ?>" class="rounded" /><?php }; ?>
			</div>
		</div>
</div>