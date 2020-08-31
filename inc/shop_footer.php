    <section class="footer pt-5">
                    <div style="background-color: #424242">
                        <div class="container">
                            <div class="row p-5 m-0 mb-2 text-justify">
                                <div class="col-md-6 ft-text">
                                    <h4>Follow Our Updates</h4>
                                    <p>Be the first to know our Fresh Arrivals and much more.</p>
                                    <div class="social ft-text pl-0">
                                        <ul class="pl-0">
                                            <li>
                                                <a href="">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <h4 class="text-center">Payment Method</h4>
                                    </div>
                                    <div class="row pt-4" style="width:60%; margin:0 auto;">
                                        <div class="col-md-3">
                                            <img style="width:65px;height:40px;" src="asset/image/payment/visa.jpg">
                                        </div>
                                        <div class="col-md-3">
                                            <img style="width:65px;height:40px;" src="asset/image/payment/rocket.png">
                                        </div>
                                        <div class="col-md-3">
                                            <img style="width:65px;height:40px;" src="asset/image/payment/bkash.jpg">
                                        </div>
                                        <div class="col-md-3">
                                            <img style="width:65px;height:40px;" src="asset/image/payment/mastercard.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 text-justify">
                                <div class="col-md-3 col-sm-6 mb-2 ft-text">
                                    <h5>INFORMATION</h5>
                                    <p class="ftinfo pt-2">
                                        About Us <br>
                                        Delevary Information <br>
                                        Privacy Policy <br>
                                        Terms & Conditions <br>
                                        Contact Us
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 mb-2 ft-text">
                                    <h5>SERVICES</h5>
                                    <p class="ftinfo pt-2">
                                        Returns <br>
                                        Site Map <br>
                                        Wish List <br>
                                        My Account <br>
                                        Order History
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 mb-2 ft-text">
                                    <h5>EXTRAS</h5>
                                    <p class="ftinfo pt-2">
                                        Brands <br>
                                        Affiliates <br>
                                        Gift Certificates <br>
                                        Specials  <br>
                                        News Letter
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 mb-2 ft-text">
                                    <h5>CONTACTS</h5>
                                    <p class="ftinfo pt-2">
                                        Warhouse & Office<br>
                                        Kaji Motahare Hossain Road, Faridpur <br>
                                        (+012) 666 888 <br>
                                        team05@gmail.com<br>
                                        www.team05.xyz
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color: #000;">
                        <p class="p-3 text-center" style="font-size: 16px;">Copyright &copy; All rights reserved team05</p>
                    </div>
                </section>
            </div>
        </div>
        
		

		<script type="text/javascript" src="<?php echo $url; ?>/asset/js/jquery-1.12.4.min.js"></script>


		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
		

		<script type="text/javascript" src="<?php echo $url; ?>/asset/js/bootstrap.min.js"></script>

		
		<script type="text/javascript" src="<?php echo $url; ?>/asset/js/wow.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

		<script src="<?php echo $url; ?>/asset/js/main.js"></script>

        <script src="<?php echo $url; ?>/asset/js/isotope.pkgd.min.js"></script>
        
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

		<script>
			var $grid = $('.grid').isotope();
				// filter items on button click
				$('.filter-button-group').on( 'click', 'button', function() {
				var filterValue = $(this).attr('data-filter');
				$grid.isotope({ filter: filterValue });
				});
		
		</script>

	</body>
</html>