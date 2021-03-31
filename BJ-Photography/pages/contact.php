
<?php

include('../partials/header.php');

?>
<link rel="stylesheet" href="../css/form.css"/>
<div class="container" >
    <h2 style="padding-left: 45%;">Contact us</h2>
<div class="container" >
            <div id="form-main" style="background-image: url(../pictures/cloud.jpg);">
                <div id="form-div">
                    <form class="montform" id="reused_form" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" style="width: 75%;" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" style="width: 75%;"/>
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Message" style="width: 75%;"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue" style="width: 75%;">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
</div>

        <footer class="footer-section spad" style="margin-top:600px;">
<div class="container text-center"><br>
<h2>Let’s work together!</h2>
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d222b2b242e280d3928203d212c3928632e2220">[email&#160;protected]</a></p>
<div class="social">
<a href="#"><i class="fa fa-github" aria-hidden="true"></i></i></a>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></br>
</br>
Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This site was created by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Bongani Maila</a>

</div>
</div>
</footer>

<!--Load Javascript-->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="../script/form.js"></script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>
<script src="../script/index.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>


