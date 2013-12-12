<?php $testimonials = $fcp['testimonials']; ?>
<div class="fcp-row fcp-testimonials_panel">
	<div class="row bg-extra5 pad-vert pad-sides rounded">
		<div class="testimonials testimonial-slider flexslider">
			<ul class="slides bg-extra5">
				<?php foreach($testimonials as $testimonial) {  ?>
					<li class="slide bg-extra5 pad-above">
						<div class="row margin-sides-no">
							<div class="columns large-12 pad-sides-no pad-below">
								<div class="testimonial-content">
									<?php if($testimonial['heading']) { ?><? }; ?>
									<h4 class="quote"><?php echo $testimonial['quote']; ?></h4>
								</div>
							</div>
						</div>
					</li>
				<?php }; ?>
			</ul>
		</div>
	</div>
</div>