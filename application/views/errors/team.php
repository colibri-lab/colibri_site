<!--Team Sec-->
<section class="section team-sec" id="section6">
	<div class="team-sec-wrap sec-pad">
		<div class="container">
			<h2 class="text-center wow fadeInUp" data-wow-duration=".8s">Our team of <i>experts</i>.</h2>
		</div>
		<div class="team-slider-wrap wow fadeInUp" data-wow-duration=".8s">
			<!-- Team Slider -->
			<div class="team-slider">
				<?php foreach ($teamMembers as $key => $value):?>
					<?php if($key == 3){break;} ?>
				<div class="team-person">
					<div class="person-img-wrap">
						<img class="img-responsive" src="<?= base_url('assets/img/team/' . $team['img']); ?>" alt="team"/>
					</div>
					<div class="per-detail margin-top-20">
						<span class="p-name"><?= $team['name'] ?></span> <br>
						<span class="p-desn"><?= $team['pos'] ?></span>
					</div>
				</div>
				<?php endforeach ?>
			</div>
			<!-- /Team Slider -->
			<button id="myModal_team" type="submit" class="btn btn-default" data-ng-disabled="submitButtonDisabled">
				Meet our team
			</button>
		</div>
	</div>
</section>
<!--/Team Sec-->
