<!DOCTYPE html>
<html lang="en">
<head>
<title>UjalaEPakistan | Contact</title>
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
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <h1><a href="index.php" id="logo">UJALA E PAKISTAN</a></h1>
        <nav>
          <ul id="top_nav">
            <li><a href="index.php"><img src="images/top_icon1.gif" alt=""></a></li>
            <li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
            <li class="end"><a href="contact.php"><img src="images/top_icon3.gif" alt=""></a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="mission.php">Our Mission</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="help.php">How to Help</a></li>
            <li id="menu_active"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1 wrapper">
            <section class="col1">
              <h2><strong>O</strong>ur<span>Address</span></h2>
              <strong class="address"> Country:<br>
              City:<br><br>
              Zip Code:<br>
              Telephone:  <br>
              E-Mail: </strong> Pakistan<br>
              Rawalpindi / Islamabad<br>
              45000<br>
              +92 3325020616<br>
              ujalaepakistan@gmail.com <br>
            </section>

            <section class="col2 pad_left1">
              <h2 class="color2"><strong>O</strong>ur<span> Policy</span></h2>
              <p class="pad_bot1"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur. </section>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="pad_left2 relative">
          <h4 class="color3"><span>Contact</span> Form</h4>
<!--          <img src="images/page6_img1.jpg" alt="" height="300" class="img1">-->

          <form id="ContactForm" action="mailto:ibrahimikram@hotmail.com"  method="POST"
                enctype="multipart/form-data">

            <div>
              <div class="wrapper"><span>Your Name:</span>
                <input name="sender" type="text" class="input" required>
              </div>

                <div class="wrapper"><span>Contact No:</span>
                    <input type="number" class="input">
                </div>

              <div class="wrapper"><span>Your E-mail:</span>
                <input type="email" class="input" name="senderEmail" required>
              </div>

                <div class="textarea_box"><span>Your Message:</span>
                <textarea cols="1" rows="1" name="message"></textarea>
              </div>

              <a href="#" type="submit" post="submit" class="button2 color3">Send</a>

          </form>


        </div>
      </div>
    </article>
    <!-- / content -->

      <!-- footer -->
      <?php
      include('footer.php');
      ?>

  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>