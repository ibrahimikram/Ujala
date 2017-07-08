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
            <li><a href="projects.php"><img src="images/top_icon2.gif" alt=""></a></li>
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
        <div class="box11">
          <div class="line1 wrapper">
            <section class="col1">
              <h4 class="color3"><span>Our</span> Address</h4>
                <strong class="address"> Country:<br>
              City:<br><br>
              Zip:<br>
              Phone :  <br>
              E-Mail: </strong> Pakistan<br>
              Rawalpindi / Islamabad<br>
              45000<br>
              +92 3325020616<br>
              ujalaepakistan@gmail.com <br>
            </section>

            <section class="col2 pad_left1">
                <h4 class="color3"><span>Our</span> Policy</h4>              <p class="pad_bot1"> We here at Ujala E Pakistan believe in complete transperency and to ensure that every penny is effectively used.</p>
              To achieve that, every donor is welcomed to witness the project's progress by themselves and complete details with calculated expenditures are
            regularly updated after every activity.</section>
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
              <div class="wrapper"><span>Name:</span>
                <input name="sender" type="text" class="input" required>
              </div>

                <div class="wrapper"><span>Contact: </span>
                    <input type="number" class="input">
                </div>

              <div class="wrapper"><span>E-mail:</span>
                <input type="email" class="input" name="senderEmail" required>
              </div>

                <div class="textarea_box"><span>Message:</span>
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