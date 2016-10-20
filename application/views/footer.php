<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Footer
        ============================================= -->
    <footer>
        <div class="container">
            <h1><span style='color: #cd2127;'>Red</span>  <span style='color: #858584;'>Rock</span> Tech</h1>

            <h3>We are social!</h3>
            <div class="social">
                <a id="facebook_icon" href="https://www.facebook.com/redrocktech.ro/?fref=ts" target="_blank"><img id="facebook_icon" src="<?php echo base_url('img/logo/facebook_logo.png'); ?>"></i></a>
            </div>
            <h6>&copy; 2012-<?php echo 2016 /*date("Y")*/ ?> Red Rock Tech. All rights reserved!</h6>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Magnific Popup for playing video -->
    <script src="<?php echo base_url('js/jquery.magnific-popup.js'); ?>"></script>
    <script>
        $(document).ready(function () {
            $('#popup-video1, #popup-video2, #popup-video3').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('bootstrap-assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/custom.js'); ?>"></script>
    <!-- JS PLUGINS -->
    <script src="<?php echo base_url('plugins/owl-carousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.easing.min.js'); ?>"></script>
    <!--script src="<?php echo base_url('plugins/waypoints/jquery.waypoints.min.js'); ?>"></script-->
    <script src="<?php echo base_url('plugins/countTo/jquery.countTo.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/inview/jquery.inview.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/Lightbox/dist/js/lightbox.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/WOW/dist/wow.min.js'); ?>"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    $(document).ready(function(){
        $('#googlemap').click(function () {
            $('#googlemap iframe').css("pointer-events", "auto");
        });
        $(document).on("submit", "#contact-form", function(){

            $(".response").hide();
            $.ajax({
               type: "POST",
               url: "/redrock/index.php/redrock/send_email",
               data: $(this).serialize(),
               success: function (data){
                   var response = $.parseJSON(data);
                   if(response.error == "1"){
                       var id = "response_error";
                       var classr = "bg-danger";
                   }else{
                       var id = "response_success";
                       var classr = "bg-success";
                   }
                   $("#"+id).html("<p class='"+classr+"'>"+response.message+"</p>").fadeIn();
                   
               }
            });
            return false;
        });
    });
    </script>
    <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
