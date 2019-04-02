<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="logo">
					<a href="#" class="scroll-top"><em>T</em>P2 - Chat</a>

					   <?php if($_SESSION['isConnecter']){?>
					<p><a href=<?PHP echo base_url('index.php/auth/logout')?>
						data-id="logout">Deconnection</a></p><?php }?>

					<?php if(!$_SESSION['isConnecter']){?>
					<p><a href=<?PHP echo base_url('index.php/connexion')?>
						data-id="logout">Connexion</a></p><?php }?>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="location">
					<h4>Par</h4>
					<ul>
						<li>Pascal<br>Dion
						</li>
						<li>Emeric<br>Lague
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<script
	src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src=<?PHP echo base_url('assets/js/plugins.js')?>></script>
<script src=<?PHP echo base_url('assets/js/main.js')?>></script>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"
	type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>
