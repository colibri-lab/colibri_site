<!-- Start About area -->
<div id="about" class="about-area area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-headline text-center">
					<h2>About Us</h2>
				</div>
			</div>
		</div>
		<div class="row" style="position: relative;">
			<!-- single-well start-->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<?php foreach ($about['image'] as $value):?>
					<div class="image_box">
						<div></div>
						<img src="<?php echo base_url('assets/img/team/'.$value )?>" alt="">
					</div>
				<?php endforeach ?>
			</div>
			<!-- single-well end-->
			<div class="text">
						<a href="#">
							<h2 class="sec-head"><?php echo $about['title_text'] ?></h2>
						</a>
						<p>
							<?php echo $about['text'] ?>
						</p>
			</div>
			<!-- End col-->
		</div>
	</div>
</div>
<!-- End About area -->
