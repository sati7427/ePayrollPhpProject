<?php

 include('Connections/db_con.php');
 session_start();
// if(isset($_POST['submit'])){
//     if($_POST['captcha']!=$_SESSION['code']){
    
//         echo "<center><span style=color:red;font-size:15px>Invalid Captcha Code</center></span>";
//     }else{
         
//         echo "<pre>";
//         print_r($_POST);exit;
//     }
// }

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    //$hashpassword = md5($_POST['pwd']);
    //$sql ="select *from public.userlogin where username = '".pg_escape_string($_POST['email'])."' and pwd ='".$hashpassword."'";
    $sql ="select * from userlogin where username = '".pg_escape_string($_POST['email'])."' and pwd ='".pg_escape_string($_POST['pwdd'])."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
	$_SESSION["userl"] = $_POST['email'];
        header("Location:index.php");  
    }else{   
        echo '<script>alert("Invalid UserId Or Password")</script>';      
    }
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NIC</title>
    <!-- <link rel="stylesheet" href="css/uikit.docs.min.css"> -->
    <link href="Styles/Login/css/uikit.css" rel="stylesheet" />

    <script src="Styles/Login/js/uikit.js"></script>
    <script src="Styles/Login/js/uikit-icons.min.js"></script>
    <script src="Styles/Login/js/jquery.min.js"></script>
    <link rel="stylesheet" href="Styles/Login/css/base.css" />
    <link rel="stylesheet" href="Styles/Login/css/base-responsive.css" />
    <script src="Styles/js/ResponsiveVoice.js"></script>

    <style>
        #rcorners2 {
            border-radius: 25px;
            border: 2px solid #73AD21;
            padding: 20px;
            width: 200px;
            height: 150px;
        }
    </style>
    <script type='text/javascript'>
        function AlertModel() {
            $('[id*=modal-login]').modal('show');
        }
    </script>
</head>
<body>
    <!-- Header -->
    <div class="uk-container uk-container-center" id="b-header">
        <div class="uk-float-left b-vertical-align b-header uk-flex uk-flex-center uk-flex-middle">
            <div class="uk-float-left b-vertical-align-middle">
                <img class="emblem-img" src="Styles/images/emblem-dark.png" alt="National Emblem logo">
            </div>


            <div class="uk-vertical-align uk-float-left b-ministryname">
                <div class="uk-vertical-align-middle">
                    <strong><span>GOVERNMENT OF INDIA</span></strong><br />
                    <strong><span class="font-weight-bold">MINISTRY OF AYUSH</span><br />
                    </strong>
                    <strong style="font-size: 12px"><span>NATIONAL INSTITUTE OF SIDDHA</span></strong>
                </div>
            </div>

        </div>
    </div>




    <!-- Global Menu -->
    <nav class="uk-navbar-container b-global-menu uk-clearfix" uk-navbar="mode: click">
        <div class="uk-container uk-container-center">
            <div class="uk-float-left">
                <ul class="uk-navbar-nav b-mobile-menu">
                    <li>
                        <a href="#" style="color: #FFF;" uk-toggle="target: #offcanvas-overlay" class="b-menu-icon">
                            <span uk-icon="menu"></span>
                            <span style="display: none">Menu</span>
                        </a>
                        <div id="offcanvas-overlay" uk-offcanvas="overlay: true; flip: true;">
                            <div class="uk-offcanvas-bar uk-background-muted">
                                <button class="uk-offcanvas-close" type="button" uk-close><span style="display: none">Close</span> </button>

                                <div class="b-mobile-nav">
                                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                                        <li class="uk-active b-menu-item"><a href="#">Home</a></li>
                                        <li class="b-menu-item"><a href="#">Contact Us</a></li>

                                        <li class="b-menu-item"><a href="#modal-login" uk-toggle>Log In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>







                <ul class="uk-navbar-nav b-web-menu">
                    <li class="b-menu-item-web"><a class="uk-navbar-item uk-logo b-home" href="#" style="color: #000;">Home </a></li>


                    <li class="b-menu-item-web"><a href="#">Contact Us</a></li>
                </ul>

            </div>

            <div class="uk-float-right">
                <ul class="uk-navbar-nav">
                    <li class="b-menu-item-web"><a class="uk-button uk-button-success" href="#modal-login" uk-toggle>Log In</a> </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Banner -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; autoplay-interval: 6000; ratio: 1800:560	">
        <ul class="uk-slideshow-items">
            <li>

                <img src="Styles/pay1.jpg" />

            </li>

        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous">
            <span style="display: none">Previous</span>
        </a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next">
            <span style="display: none">Next</span>
        </a>

        <div class="uk-position-bottom-center uk-position-small b-dotnav">
            <ul class="uk-dotnav">
                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>

            </ul>
        </div>

    </div>




    <!-- Footer logos -->
    <div class="uk-container uk-container-center">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 3000">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@s uk-child-width-1-5@m">
                <li>
                    <img src="Styles/images/carousel/digital-india.png" alt="Digital Imdia logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/data-gov.png" alt="Data Gov logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/eci.png" alt="ECI logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/e-gazette.png" alt="eGazette logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/ganhri.png" alt="Ganhri logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/goidirectory.png" alt="GOI directory logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/incredible-india.png" alt="Incredible India logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/india-gov.png" alt="India Gov logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/makeinindia.png" alt="Make in India logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/mygov.png" alt="MyGov logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/myvisit-logo.png" alt="MyVisit logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/pg-portal.png" alt="PG portal logo">
                </li>
                <li>
                    <img src="Styles/images/carousel/pmnrf.png" alt="PMNRF logo">
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-dark" href="#" uk-slidenav-previous uk-slider-item="previous">
                <span style="display: none">Previous</span>
            </a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-dark" href="#" uk-slidenav-next uk-slider-item="next">
                <span style="display: none">Next</span>
            </a>

        </div>
    </div>

    <!-- Footer Links -->
    <div class="uk-background-secondary uk-light uk-padding b-footer-bg">

        <div class="uk-container uk-container-center">
            <div class="uk-container uk-container-center" uk-grid>
                <div class="uk-width-2-3@m b-quick-links">
                    <div class="uk-card uk-card-body">
                        <ul class="uk-subnav uk-subnav-divider" uk-margin>
                            <li><a href="inner.html">Terms of use</a></li>
                            <li><a href="inner.html">Site map</a></li>
                            <li><a href="inner.html">Hyperlink Policy</a></li>
                            <li><a href="inner.html">Copyright Policy</a></li>
                            <li><a href="inner.html">FAQ's</a></li>
                            <li><a href="inner.html">Privacy Policy</a></li>
                            <li href="#modal-feedback" uk-toggle><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand@m b-logos-p">
                    <a href="#" title="External site that opens in a new window" target="_blank" class="uk-margin-remove-bottom" style="text-align: right;">
                        <img src="Styles/images/nic.png" class="b-logos" alt="NIC logo"></a>
                    <a href="#" title="External site that opens in a new window" target="_blank" class="uk-margin-remove-bottom" style="text-align: right;">
                        <img src="Styles/images/digital-india.png" class="b-logos" alt="Digital India logo"></a>
                    <a href="#b-accessibility" uk-scroll class="b-backtotop-p">
                        <div class="uk-position-relative uk-position-top-right b-backtotop uk-background-primary uk-text-center">
                            <span uk-icon="chevron-up"></span>
                            <span style="display: none">Back to top</span>
                        </div>
                    </a>
                </div>


            </div>

        </div>

    </div>




    <!-- Footer -->
    <div class="uk-background-secondary uk-light uk-padding b-footer-bg">
        <div class="uk-container uk-container-center">
            <p class="b-footer uk-text-center">
                Web Application belongs to National Institute Of Siddha, MINISTRY OF AYUSH
                <br>
                Designed & Developed by
                <a class="uk-list uk-link-text" href="#">NIC</a>, <a class="uk-list uk-link-text" href="#/">Govt. of India.</a>

            </p>
        </div>
    </div>





    <div id="modal-login" class="uk-flex-top " uk-modal>
        <div class="uk-modal-dialog  uk-margin-auto-vertical">

            <button class="uk-modal-close-default" style="color: white" type="button" uk-close><span style="display: none">Close</span> </button>

            <form method="post">
                <fieldset class="uk-fieldset">

                    <div style="font-size: 24px; margin: auto; padding: 9px 0px; color: #017298; background-color: #017298; text-align: center">-</div>



                    <div class="uk-margin">
                        <label class="uk-form-label " style="text-align: center;" for="login-email">UserID</label>
                        <div class="uk-inline b-form">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input type="text" class="uk-input" id="email" placeholder="Enter UserId" name="email" required>
                        </div>
                    </div>


                    <div class="uk-margin">
                        <label class="uk-form-label" for="login-pwd">Password</label>
                        <div class="uk-inline b-form">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                            <input type="password" class="uk-input" id="pwdd" placeholder="Enter password" name="pwdd" required>
                        </div>
                    </div>

                    <div class="uk-margin clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <textarea style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/85/Codero_Hosting_Logo_%28100px%29.png'); font-size: 300%; font-weight: bold; border-radius: 10px; background-repeat: no-repeat" id="commentBox" runat="server" cols="4" rows="1" readonly="readonly">7867</textarea>

                                <!-- <input type="text" class="form-control" id="captcha" name="captcha" required>
                        </div>
                        <div class="col-sm-2"><img src="captcha.php" id="captcha_id"></div>
                        <div class="col-sm-2"><i class="fa fa-refresh" 
                         onclick="document.getElementById('captcha_id').src = 'captcha.php'; return false"
                         style="font-size:25px;color:red;cursor:pointer"></i>
                        </div> -->
                                 <input onclick="responsiveVoice.speak($('#commentBox').val());" style="background-color:red;border-radius:50px;color:yellow" type="button" class="glyphicon glyphicon-search" value="▷" />

                            </div>
                            <div class="col-md-6">
                                    <input id="txtCaptcha" class=uk-input type="text" placeholder="Input Captcha">
                            <br />
                        </div></div>
                    </div>
                     <div class="uk-margin uk-text-center uk-margin-medium-top b-loginbut">
                     <input type="submit" name="submit" class="uk-button uk-button-primary" value="Login">

                    </div>
                        
                        <br />  
                       
                </fieldset>
            </form>

        </div>
    </div>




    <script src="Styles/vendor/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".b-mobile-dropdown a").click(function () {
                if ($(this).hasClass("hide")) {
                    $(this).addClass("show");
                    $(this).removeClass("hide");
                    $(".b-icon-up").show();
                    $(".b-icon-down").hide();
                }
                else if ($(this).hasClass("show")) {
                    $(this).addClass("hide");
                    $(this).removeClass("show");
                    $(".b-icon-down").show();
                    $(".b-icon-up").hide();
                }
            });
        });
    </script>

</body>
</html>