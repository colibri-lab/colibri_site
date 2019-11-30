
<!--Custom portfolio modal-->
<div  class="portfolio-modal" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title text-center">Our Works</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<?php foreach ($projects as $project):?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="grid">
							<figure class="effect-bubba">
								<img class="img-responsive" src="<?= base_url('assets/img/projects/' . $project['img']); ?>" alt="">
								<figcaption>
									<h2>Fresh <span>Bubba</span></h2>
									<p>
										<span class="icon icon-paperclip"></span>
									</p>
								</figcaption>
							</figure>
						</div>
					</div>
				    <?php endforeach ?>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--End portfolio  custom modal-->
