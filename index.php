<!DOCTYPE html>
<html lang="en">
<head>
    <title>UJALA E PAKISTAN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.6.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Vegur_700.font.js"></script>
    <script type="text/javascript" src="js/Vegur_400.font.js"></script>
    <script type="text/javascript" src="js/Vegur_300.font.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/tms-0.3.js"></script>
    <script type="text/javascript" src="js/tms_presets.js"></script>
    <script type="text/javascript" src="js/backgroundPosition.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
    <![endif]-->
</head>

<body id="page1">
<div class="body1">
    <div class="main">
        <!-- header -->
        <header>
            <div class="wrapper">
                <h1><a href="index.php" id="logo">UJALA E PAKISTAN</a></h1>
<!--                <h1>  <a href="index.php"><img src="images/logo1.png" width="146" height="83"> Ujala E Pakistan</a></h1>-->
                <nav>
                    <ul id="top_nav">
                        <li><a href="index.php"><img src="images/top_icon1.gif" alt=""></a></li>
                        <li><a href="projects.php"><img src="images/top_icon2.gif" alt=""></a></li>
                        <li class="end"><a href="contact.php"><img src="images/top_icon3.gif" alt=""></a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu">
                        <li id="menu_active"><a href="index.php">Home</a></li>
                        <li><a href="mission.php">Our Mission</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="help.php">How to Help</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="slider">

                <ul class="items">
                    <li> <img src="images/1.jpg" alt="">
                        <div class="banner">
                            <div class="wrapper"><span>“Our mission is to<em> HELP</em></span></div>
                            <div class="wrapper"><strong>anyone who<em> NEEDS</em> it”</strong></div>
                        </div>
                    </li>
                    <li> <img src="images/2.jpg" alt="">
                        <div class="banner">
                            <div class="wrapper"><span>“Work for HUMANITY</span></div>
                            <div class="wrapper"><strong> without DISCRIMINATION”</strong></div>
                        </div>
                    </li>
                    <li> <img src="images/3.jpg" alt="">
                        <div class="banner">
                            <div class="wrapper"><span>“TOGETHER we can bring</span></div>
                            <div class="wrapper"><strong>IMPACTFUL CHANGES”</strong></div>
                        </div>
                    </li>
                </ul>
                <ul class="pagination">
                    <li id="banner1"><a href="#">Make<span>Donations</span></a></li>
                    <li id="banner2"><a href="#">Join<span>Volunteer</span></a></li>
                    <li id="banner3"><a href="#">Help<span>Society</span></a></li>
                </ul>
            </div>
        </header>  <br>
        <!-- / header -->

<!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h2><strong>S</strong>ocial <span>Welfare</span></h2>
                <div class="pad_bot1">
<!--                  <figure><img src="images/page1_img1.jpg" alt=""></figure>-->
                </div>
                Our portfolio includes: Arranging grand Iftars, Managing an orphanage, Supplying means of marriage to sisters &
                  distributuion of ration to needy families alongside financial aid.
              </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>E</strong>ducation</h2>
                <div class="pad_bot1">
<!--                  <figure><img src="images/page1_img2.jpg" alt=""></figure>-->
                </div>
                This sector has our utmost attention; bearing education expenses of more than a dozen children, alongside
                aiding certain requirements of individual students.
              </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>D</strong>isaster <span>Relief</span></h2>
                <div class="pad_bot1">
<!--                  <figure><img src="images/page1_img3.jpg" alt=""></figure>-->
                </div>
                    Natural calamities have severe impacts on many people; we have provided active relief work in the recent
                    floods, earthquake and droughts by reaching the source directly.
              </section>
            </div>
          </div>
        </div>
      </div> <br>
      <div class="wrapper">
         <br> <h4 class="color3"><span>Founding</span> Principles</h4>
        <p class="quot"> Ujala E Pakistan was formed foreseeing the barriers, the lower class faces today. Poverty, illiteracy,
                         calamities and scarcity of basic life needs, makes everyday life a struggle for many. The NGO will aspire
                         to work solely for serving the humanity, without discrimination and only for the approval of
                         God, opposed to gaining any personal benefits
            <img src="images/quot2.png" alt="">
        </p>
      </div> <br>
    </article>
    <!-- / content -->
    <!-- footer -->
        <?php
        include('footer.php');
        ?>
        <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
</body>
</html>