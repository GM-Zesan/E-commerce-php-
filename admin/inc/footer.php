                        <!-- Footer -->
                            <footer class="footer">
								<div class="row align-items-center justify-content-xl-between">
									<div class="col-xl-12">
										<div class="copyright text-center text-xl-left text-muted">
											<p class="text-sm font-weight-500">Copyright 2018 © All Rights Reserved.Dashboard Template</p>
										</div>
									</div>
								</div>
							</footer>
						<!-- Footer -->
						</div>
					</div>
				</div>
			</div>
			<!-- app-content -->
		</div>
	</div>
	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- Core -->
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Optional JS -->
	<script src="assets/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="assets/plugins/chart.js/dist/Chart.extension.js"></script>

	<!-- Data tables -->
	<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
	
	<script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

	<!-- Fullside-menu Js-->
	<script src="assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

	<!-- Custom scroll bar Js-->
	<script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- jquery-ui min js -->
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

	<!-- Ansta JS -->
	<script src="assets/js/custom.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

	<!-- <script src="assets/js/preview.js"></script> -->
	
	<script>
		$(document).ready(function() {
            $('#data-table').DataTable();
        } );
	</script>

	<script>
		$(function () {
			// ______________Dragable cards
			// sortable
			$(".sortable").sortable({
				connectWith: '.sortable',
				items: '.card-draggable',
				revert: true,
				placeholder: 'card-draggable-placeholder',
				forcePlaceholderSize: true,
				opacity: 0.77,
				cursor: 'move'
			});
		});
	</script>
</body>


</html>