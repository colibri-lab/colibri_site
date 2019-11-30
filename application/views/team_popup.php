<!--
<div class="vbox-overlay " style="background: rgba(23, 23, 23, 0.85); opacity: 1;">
  <div class="vbox-preloader" style="display: none;">
    <div class="sk-double-bounce">
      <div class="sk-child sk-double-bounce1" style="background-color: rgb(210, 210, 210);"></div>
      <div class="sk-child sk-double-bounce2" style="background-color: rgb(210, 210, 210);"></div>
    </div>
  </div>
  <div class="vbox-container">
    <div class="vbox-content animated" style="opacity: 1; margin: 30px 0px;">
      <img src="http://localhost/Colibrilab/assets/img/projects/project1.jpg" class="figlio" style="padding: 0px; background: rgb(255, 255, 255);">
    </div>
  </div>
    <div class="vbox-title" style="top: -1px; color: rgb(210, 210, 210); background-color: rgb(22, 22, 23); display: none;">
    </div>
    <div class="vbox-num" style="top: -1px; color: rgb(210, 210, 210); background-color: rgb(22, 22, 23); display: none;">
      1 / 7
    </div>
    <div class="vbox-close" style="color: rgb(210, 210, 210); background-color: rgb(22, 22, 23);">×</div>
    <a class="vbox-next" style="display: block;">
    <span style="border-top-color: rgb(182, 182, 182); border-right-color: rgb(182, 182, 182);">Next</span>
    </a>
    <a class="vbox-prev" style="display: none;">
    <span style="border-top-color: rgb(182, 182, 182); border-right-color: rgb(182, 182, 182);">
      Prev
    </span>
    </a>
</div> -->
<div id="team_popup" class="team_popup our-team-area area-padding">
	<div class="container">

		<div class="team_popup_header">
				<div class="section-headline text-center">
					<h2>Our special Team</h2>
				</div>
        <button class="team_btn" type="button" name="">X</button>
		</div>

		<div class="row">
			<div class="team-top">
				<?php foreach ($teamMembers as $key => $value):?>

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
	</div>
</div>
<!-- End Team Area -->
