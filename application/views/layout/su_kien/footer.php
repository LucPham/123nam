<div class="footer">
        <div class="contact">
                <div class="author-img">
                        <h3 style="color: #fff">Kết nối</h3>
                </div>
                <div class="networld-social-icon">
                        <ul class="social-icons icon-circle list-unstyled list-inline">
                                <li> <a target="_blank" href="https://www.facebook.com/lucpham.1995" title="facebook Pham Luc" alt="facebook Pham Luc"><i class="fa fa-facebook"></i></a></li>
                        <li> <a target="_blank" href="https://plus.google.com/105390706252861414349" title="google+ Pham Luc" alt="google+ Pham Luc"><i class="fa fa-google-plus"></i></a></li>
                        <li> <a target="_blank" href="https://www.youtube.com/channel/UC3HOB_cEKVi2XYwEz8_zOHw" title="youtube Pham Luc" alt="youtube Pham Luc"><i class="fa fa-youtube"></i></a></li>   
                        <li> <a target="_blank" href="https://twitter.com/PhamVanLuc" title="twitter Pham Luc" alt="twitter Pham Luc"><i class="fa fa-twitter"></i></a></li>
                        <li> <a target="_blank" href="#" title="instagram Pham Luc" alt="instagram Pham Luc"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>
        </div>
        <div class="copyright">
               contact@123nam.com
        </div>
</div>


<script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.12.3.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var side_left_offs = $('.side-left').offset();
		var side_right_offs = $('.side-right').offset();
		var side_left_pos = side_left_offs.top;
		var side_right_pos = side_right_offs.top;
		$(window).scroll(function() {
			var x_scroll = $(this).scrollTop();
			if (x_scroll >= side_left_pos || x_scroll >= side_right_pos)
			{
				$('.side-left').addClass('side-left-fixed-top');
				$('.side-right').addClass('side-right-fixed-top');
			} else {
				$('.side-left').removeClass('side-left-fixed-top').addClass('sie_left');
				$('.side-right').removeClass('side-right-fixed-top').addClass('sie_right');
			}
		})	
	})
</script>