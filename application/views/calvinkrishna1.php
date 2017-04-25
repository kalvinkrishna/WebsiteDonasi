<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Helping Hand-Donation Page</title>

    <!-- ================================================================
        ***Favicon***
    ================================================================= -->

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>Asset/images/fevicon.png">

    <!-- ================================================================
        ***CSS File***
    ================================================================= -->
    <!-- ================= *** Google Font-Poppins *** ======================= -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- ================= *** Animate CSS *** ======================= -->
    <link href="<?php echo base_url();?>Asset/css/animate.min.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Bootstrap CSS *** ===================== -->
    <link href="<?php echo base_url();?>Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Font-awesome CSS *** ================== -->
    <link href="<?php echo base_url();?>Asset/css/hover-min.css" rel="stylesheet" type="text/css">

    <!-- ================= *** icofont CSS *** ======================= -->
    <link href="<?php echo base_url();?>Asset/css/icofont.css" rel="stylesheet" type="text/css">

    <!-- ================= *** progressbar CSS *** =================== -->
    <link href="<?php echo base_url();?>Asset/css/jQuery-plugin-progressbar.css" rel="stylesheet" type="text/css">

    <!-- ================= *** bar CSS *** =========================== -->
    <link href="<?php echo base_url();?>Asset/css/bar.css" rel="stylesheet" type="text/css">

    <!-- ================= *** lightbox CSS *** ====================== -->
    <link href="<?php echo base_url();?>Asset/css/nivo-lightbox.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Owl Carousel CSS *** ================== -->
    <link href="<?php echo base_url();?>Asset/css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Main CSS *** ========================== -->

    <link href="<?php echo base_url();?>Asset/css/custom/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>Asset/js/jquery-3.1.0.min.js"></script>
  
</head>

<body class="cause_detail">
    <div id="preloader">
        <div class="preloader_spinner"></div>
    </div>
    <!-- preloader end -->
<!-- ==========================================================
    1.*Header_area start
============================================================ -->
    <header>
        <div class="romana_header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="romana_header_top_left">
                            <ul>
                                <li><a href="donation.html#">faq</a></li>
                                <li><a href="donation.html#">support</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-md-3 col-sm-4">
                        <div class="romana_header_top_right text-right">
                            <a href="tel:">Donation Hotline : +011-223-3445</a>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- Header-Top End -->
        <div class="romana_header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-6">
                        <div class="romana_logo">
                            <a href="index.html"><img src="<?php echo base_url();?>Asset/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-sm-10">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only"></span>
                                <i class="icofont icofont-navigation-menu"></i>
                            </button>
                        </div>
                        <nav id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">home one</a></li>
                                        <li><a href="index-2.html">home two</a></li>
                                    </ul>
                                </li>
                                <li><a href="donation.html#">Causes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cause.html">Causes Page</a></li>
                                        <li><a href="cause-detail.html">Causes detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="donation.html#">events</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="event.html">events Page</a></li>
                                        <li><a href="event-detail.html">events detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="volunteer.html">Volunteer</a></li>
                                <li><a href="donation.html#">news</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="news.html">news Page</a></li>
                                        <li><a href="news-detail.html">news detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <!-- mega-menu End -->
                        </nav>
                        <!-- nav End -->
                        <ul class="cartSearch">
                            <li class="search"><a href="donation.html#"><i class="icofont icofont-search"></i></a></li>
                            <li class="donation"><a href="donation.html#donate" class="hvr-box-shadow-outset">Donate Now</a></li>
                        </ul>
                        <!-- cartSearch End -->
                        <form action="donation.html#" class="searchForm">
                            <i class="icofont icofont-close"></i>
                            <input type="search" placeholder="Search now">
                            <input type="submit" value="&#xeded;">
                        </form>
                        <!-- searchForm End -->
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- Header Bottom End -->
    </header>
    <!-- Header End -->
<!-- ==========================================================
2.*Hero_area start
============================================================ -->
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>donation page</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a><span></span></li>
                            <li><a href="donation.html#">Donation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
<!--=============================================
    3.*romana_children_area  start
===============================================-->
<?php echo form_open('Donate/doDonate'); ?>
<div class="romana_cause_detail_area romana_donation_page" id="donate">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="romana_donation_info">
                    <h3>Donation Information (<?php echo $projectDetail[0]['nama_project']?>)</h3>
                    <h4>You are Donating to </h4>
                    <div class="field select_option_one">
                        <select id="select2" name='donate_for'>
                            <option value="Food for Childreneer">Food for Childreneer</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Bath Tools">Bath Tools</option>
                            <option value="Food Tools">Food Tools</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <div class="romana_donation_info romana_donation_info2">
                    <p>Amount <span>*</span></p>
                     <div class="romana_donation_method">
                        <ul>
                            <li>
                                <input class='amount' type="radio" id="option3" name="donationcheck" value='5'>
                                <label for="option3" >$5</label>
                                <div class="check"></div>
                            </li>
                            <li>
                                <input  class='amount' type="radio" id="option4" name="donationcheck" checked value='10'>
                                <label for="option4">$10</label>
                                <div class="check"></div>
                            </li>
                            <li>
                                <input class='amount' type="radio" id="option5" name="donationcheck" value='15'>
                                <label for="option5">$15</label>
                                <div class="check"></div>
                            </li>
                            <li>
                                <input class='amount' type="radio" id="option6" name="donationcheck" value='20'>
                                <label for="option6">$20</label>
                                <div class="check"></div>
                            </li>
                            <li><span>or</span>
                                <input class='amount text' type="text" placeholder="Your Amount(USD)" name="donation">
                            </li>
                            <script type="text/javascript">
                                
                                $(document).ready(function(){
                                    $('input.amount.text').focus(function(){
                                           $('.amount').removeAttr('checked');
                                    });

                                    $(".amount").click(function(){
                                        $('input.amount.text').val("");
                                    });
                                });
                            </script>
                        </ul>
                    </div>
                      
                </div>
                <!-- column End -->
            </div>
        </div>
        <!-- row End -->
        <div class="row">
            <div class="col-sm-12">
                <div class="romana_cause_detail_form romana_common_form">
                    <h3>Donatur Information</h3>
                  
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="field">
                                    <label class="placeholder">
                                        First name
                                        <span class="star_color">*</span>
                                    </label>
                                    <input id="FistName" type="text" name="donation_FistName" />
                                </div>
                                <div class="field">
                                    <label class="placeholder">
                                        Email
                                        <span class="star_color">*</span>
                                    </label>
                                    <input id="userEmail" type="text" name="donation_userEmail" />
                                </div>
                                <div class="field">
                                    <label class="placeholder">
                                        Address
                                        <span class="star_color">*</span>
                                    </label>
                                    <input id="address" type="text" name="donation_address" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field">
                                    <label class="placeholder">
                                        Last name
                                        <span class="star_color">*</span>
                                    </label>
                                    <input id="LastName" type="text" name="donation_LastName" />
                                </div>
                                <div class="field">
                                    <label class="placeholder">
                                        Phone Number
                                        <span class="star_color">*</span>
                                    </label>
                                    <input id="userPhone" type="text" name="donation_userPhone" />
                                </div>
                                <div class="field">
                                    <label class="placeholder">
                                        Additional Note
                                        <span class="star_color">*</span>
                                    </label>
                                    <input id="add_note" type="text" name="donation_add_note" />
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!-- romana_registration form End -->
                <div class="romana_donation_method romana_donation_method2">
                    <h3>Donation Method</h3>
                       
                        <ul>
                            <li>
                                <input type="radio" id="option1" name="DonationMethod" value='cart'>
                                <label for="option1">cart</label>
                                <div class="check"></div>
                            </li>
                            <li>
                                <input type="radio" id="option2" name="DonationMethod" value='paypal' checked>
                                <label for="option2">paypal</label>
                                <div class="check"></div>
                            </li>
                        </ul>
                      
                    <div class="cause_detail_donate_btn">
                        <button type='submit' class="hvr-box-shadow-outset" value='submit'>Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</div>
<?php echo form_close();?>
<!-- ==================================================
4.*Footer_area start
=================================================== -->
    <footer class="romana_footer_area romana_section_padding">
        <div class="romana_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_left_text">
                            <div class="footer_logo">
                                <a href="donation.html#"><img src="<?php echo base_url();?>Asset/images/footer_logo.png" alt="logo"></a>
                            </div>
                            <p>Autem vel eum iriure dolor in lorem hendrerit velit esse consequat, vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio dign issim qui blandit praesent lupt...</p>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_menu">
                            <h2>Recent Causes</h2>
                            <ul>
                                <li><i class="icofont icofont-thin-right"></i><a href="donation.html#">Food for children</a></li>
                                <li><i class="icofont icofont-thin-right"></i><a href="donation.html#">water for children</a></li>
                                <li><i class="icofont icofont-thin-right"></i><a href="donation.html#">education for children</a></li>
                                <li><i class="icofont icofont-thin-right"></i><a href="donation.html#">safety for children</a></li>
                                <li><i class="icofont icofont-thin-right"></i><a href="donation.html#">medical support</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_recent_news">
                            <h2>Recent News</h2>
                            <div class="romana_single_footer_news">
                                <div class="romana_single_footer_news_img">
                                    <img src="<?php echo base_url();?>Asset/images/footer_img1.jpg" alt="">
                                </div>
                                <div class="romana_single_footer_news_text">
                                    <a href="news-detail.html"><h3>Childrens are sturving</h3></a>
                                    <p>November 14, 2016</p>
                                </div>
                            </div>
                            <div class="romana_single_footer_news">
                                <div class="romana_single_footer_news_img">
                                    <img src="<?php echo base_url();?>Asset/images/footer_img2.jpg" alt="">
                                </div>
                                <div class="romana_single_footer_news_text">
                                    <a href="news-detail.html"><h3>Childrens are sturving</h3></a>
                                    <p>November 14, 2016</p>
                                </div>
                            </div>
                            <div class="romana_single_footer_news">
                                <div class="romana_single_footer_news_img">
                                    <img src="<?php echo base_url();?>Asset/images/footer_img3.jpg" alt="">
                                </div>
                                <div class="romana_single_footer_news_text">
                                    <a href="news-detail.html"><h3>Childrens are sturving</h3></a>
                                    <p>November 14, 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-md-2 col-md-offset-1 col-sm-6">
                        <div class="footer_contact">
                            <h2>contact us</h2>
                            <div class="romana_single_contact">
                                <p>Call us <span>+011-223-445</span></p>
                            </div>
                            <div class="romana_single_contact">
                                <p>Email us<span>crazycafe.net@gmail.com</span></p>
                            </div>
                            <div class="romana_single_contact">
                                <address>
                                Address
                                <span>
                                    72/D Parkstreet view,<br>
                                    Orland Home.
                                </span>
                            </address>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
            </div>
        </div>
        <!-- footer_top End -->
        <div class="romana_footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="romana_footer_bottom_text text-center">
                            <p>&copy;by crazycafe.net. All right reserved</p>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- footer_bottom End -->
    </footer>
<!-- ======================================================
    ***Js Files***
=========================================================== -->

    <!-- ================= Main Js ==================== -->
      <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- ================= Bootstrap min Js =========== -->
    <script src="<?php echo base_url();?>Asset/js/bootstrap.min.js"></script>

    <!-- ================= owl carousel min Js ======== -->
    <script src="<?php echo base_url();?>Asset/js/owl.carousel.min.js"></script>

    <!-- ================= owl carousel min Js ======== -->
    <script src="<?php echo base_url();?>Asset/js/jQuery-plugin-progressbar.js"></script>

    <!-- ================= barfiller  Js ============== -->
    <script src="<?php echo base_url();?>Asset/js/jquery.barfiller.js"></script>

    <!-- ================= lightbox  Js =============== -->
    <script src="<?php echo base_url();?>Asset/js/nivo-lightbox.min.js"></script>

    <!-- ================= Active Js ================== -->
    <script src="<?php echo base_url();?>Asset/js/active.js"></script>
</body>

</html>