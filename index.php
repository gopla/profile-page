<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Landing Page | Gopla</title>

    <!-- Internet -->
    <link
      href="https://fonts.googleapis.com/css?family=Dancing+Script|Noto+Sans|Pacifico"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="assets/js/jquery-ui-1.12.1/jquery-ui.min.css"
    />
    <link
      href="https://unpkg.com/nanogallery2@2.4.2/dist/css/nanogallery2.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- JQuery -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script
      type="text/javascript"
      src="https://unpkg.com/nanogallery2@2.4.2/dist/jquery.nanogallery2.min.js"
    ></script>
  </head>

  <body>
    <!-- Nduwur -->
    <div class="navbar">
      <span class="judul">Gopla</span>
      <div class="navbar__section">
        <a href="#" id="link1" class="active">
          &nbsp;<i class="fas fa-home    "></i>
        </a>
        <a href="#" id="link2"> &nbsp;<i class="fas fa-user    "></i> </a>
        <a href="#" id="link3">
          &nbsp;<i class="fas fa-camera-retro    "></i>
        </a>
        <a href="#" id="link4">
          <i class="fas fa-envelope    "></i>
        </a>
        <a href="index2.php">
          <i
            class="fas fa-arrows-alt-v    "
            title="Switch to Vertical View"
          ></i>
        </a>
      </div>
    </div>

    <!-- Tengah / Konten -->
    <div class="header">
      <img src="assets/img/apik.png" alt="headerpic" class="bg-image" />
      <br />
      <div class="konten">
        <!-- Isi Konten -->
      </div>
    </div>

    <!-- Isor -->
    <div class="footer">
      <p>Made with &#10084; by Gopla</p>
      <div class="footer__section">
        <p>
          Icons belong to &copy;
          <a href="https://www.flaticon.com/">Flaticon</a>
        </p>
      </div>
    </div>

    <script>
      $(function() {
        $(".konten").load("welcome.php");

        $("#link1").click(function() {
          $(".konten").load("welcome.php");
          $("#link1").addClass("active");
          $("#link2").removeClass("active");
          $("#link3").removeClass("active");
          $("#link4").removeClass("active");
        });
        $("#link2").click(function() {
          $(".konten").load("profile.php");
          $("#link2").addClass("active");
          $("#link1").removeClass("active");
          $("#link3").removeClass("active");
          $("#link4").removeClass("active");
        });
        $("#link3").click(function() {
          $(".konten").load("gallery.php");
          $("#link4").removeClass("active");
          $("#link2").removeClass("active");
          $("#link1").removeClass("active");
          $("#link3").addClass("active");
        });
        $("#link4").click(function() {
          $(".konten").load("contact.php");
          $("#link4").addClass("active");
          $("#link2").removeClass("active");
          $("#link1").removeClass("active");
          $("#link3").removeClass("active");
        });
      });
    </script>
  </body>
</html>
