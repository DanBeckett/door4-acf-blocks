<?php $content_blocks = $fcp['content_blocks']; ?>
<div class="fcp-row fcp-two_col_text_panel">
	<div class="row">
		<?php foreach($content_blocks as $content_block) { ?>
		<div class="columns large-6 small-12">
			<?php echo $content_block['content']; ?>
		</div>
		<?php }; ?>
	</div>
</div>