<!-- Start Service area -->
<div id="services" class="services-area area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-headline services-head text-center">
					<h2>Our Services</h2>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="services-contents">
				<?php foreach ($services as $key => $value):?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#">
										<i class="<?php echo $value['icon'] ?>"></i>
									</a>
								<h4><?php echo $value['title'] ?></h4>
								<p>
									<?php echo $value['text'] ?>
								</p>
							</div>
						</div>
						<!-- end about-details -->
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<!-- End Service area -->
