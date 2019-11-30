<!-- Start team Area -->
<div id="team" class="our-team-area area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-headline text-center">
					<h2>Our special Team</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="team-top">
				<?php foreach ($teamMembers as $key => $value):?>
					<?php if($key == 4){break;} ?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single-team-member">
						<div class="team-img">

									<img src="<?php echo base_url('assets/img/team/'. $value['img']) ?>" alt="">
							
						</div>
						<div class="team-content text-center">
							<h5><?php echo $value['name'] ?></h5>
							<p><?php echo $value['pos'] ?></p>
						</div>
					</div>
				</div>
				<!-- End column -->
				<?php endforeach ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-headline text-center">
					<button class="team_btn" type="button" name="">MEET OUR TEAM</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Team Area -->
