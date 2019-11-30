<!-- Start portfolio Area -->
<div id="portfolio" class="portfolio-area area-padding fix">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="section-headline text-center">
					<h2>Our Portfolio</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Start Portfolio -page -->
			<div class="awesome-project-1 fix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="awesome-menu ">
						<ul class="project-menu">
							<li>
								<a href="#" class="active" data-filter="*">All</a>
							</li>
							<li>
								<a href="#" data-filter=".development">Development</a>
							</li>
							<li>
								<a href="#" data-filter=".design">Design</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="awesome-project-content">
				<?php foreach ($projects as $key => $value):?>
				<!-- single-awesome-project start -->
				<div class="col-md-4 col-sm-4 col-xs-12 <?php echo $value['category'] ?>">
					<div class="single-awesome-project">
						<div class="awesome-img">
							<a href="#"><img src="<?php echo base_url('assets/img/projects/' . $value['img'] ) ?>" alt="" /></a>
							<div class="add-actions text-center">
								<div class="project-dec">
									<a class="venobox" data-gall="myGallery" href="<?php echo base_url('assets/img/projects/' . $value['img'] ) ?>">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>

									<span><?php echo $value['type'] ?></span>
									<a href="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single-awesome-project end -->
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<!-- awesome-portfolio end -->
