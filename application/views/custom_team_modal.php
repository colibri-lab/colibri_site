<!--Custom team modal-->
<div  class="team-modal" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close_team" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title text-center">Our Team</h4>
			</div>
			<div class="modal-body">
				<div class="container">
					  <?php
						    $t = 0;
						    foreach ($teamMembers as $team) {
							   if ($t % 3 == 0) {
				           echo '<div class="row">';
						     }
						?>
				        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				            <div class="our-team">
				                <img class="img-responsive" src="<?php echo base_url('assets/img/team/' . $team['img']); ?>" alt="team"/>
				                <div class="team-content">
				                    <h3 class="title"><?= $team['name'] ?></h3>
				                    <span class="post"><?= $team['pos'] ?></span>
				                </div>
				            </div>
				        </div>
								<?php
								    ++$t;
								    if ($t == 3) {
											$t = 0;
						          echo '</div>';
					    	    }
						   } ?>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<!--End team custom modal-->
