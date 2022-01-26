
        
		<footer id="footer">
			<div class="rg-container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="single-footer-widget rg-foot">
							<div class="head">
								<img src="../assets/images/logo.png" class="img-fluid" alt="#footer-logo">
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ullam nesciunt ut soluta, repellendus sed possimus eos maiores quas adipisci tenetur fugit cumque delectus corrupti veritatis perferendis nihil quod distinctio.</p>
								<ul class="footer-social-wrap">
									<li>
										<i class="ri-whatsapp-fill"></i>
									</li>
									<li>
										<i class="ri-twitter-fill"></i>
									</li>
									<li>
										<i class="ri-instagram-fill"></i>
									</li>
								</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-footer-widget">
							<div class="head">
								<h4>Useful Links</h4>
							</div>
							<ul class="footer-links p-0">
								<li>
									<a href="">Home</a></a>
								</li>
								<li>
									<a href="">About</a>
								</li>
								<li>
									<a href="">Pricing</a>
								</li>
								<li>
									<a href="">Trainers</a>
								</li>
								<li>
									<a href="">Contact</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-footer-widget">
							<div class="head">
								<h4>Subscribe to newsletter</h4>
							</div>
							<?php echo form_open_multipart() ?>
								<div class="form-group">
									<input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" required>
								</div>
								<div class="text-right">
									<button class="btn rg-btn">Subscribe</button>
								</div>
							<?php echo form_close() ?>
						</div>
					</div>
				</div>
			</div>
		</footer>
		</div>
        
		<script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendor/wow/wow.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendor/slick/slick.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/testimonial-slick.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/app.js"></script>
    </body>
</html>