<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <?php include("config/settings.php"); ?>
    <title>Harmony's Portfolio</title>


    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   

    <!-- Template Styles Start -->
    <link rel="stylesheet" href="assets/css/loaders/loader.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#dcdce7">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#111111">
    <meta name="msapplication-navbutton-color" content="#111111">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Custom Browser Color End -->
  </head>

  <body>

    <!-- Loader Start -->
    <?php include("includes/loader.php"); ?>

    <!-- Loader End -->

    <!-- Header Start -->
    <header id="header" class="header d-flex justify-content-between">

      <!-- Navigation Menu Start -->
      <?php include("includes/navigation.php"); ?>

      <!-- Navigation Menu End -->

      <!-- Header Controls Start -->
      <!-- Header Controls End -->

    </header>
    <!-- Header End -->

    <!-- Gradient Background Start -->
    <div class="gradient-background">
      <div class="blur"></div>
      <div class="blur"></div>
      <div class="blur"></div>
    </div>
    <!-- Gradient Background End -->

    <!-- Avatar Side Block Start -->
    <?php include("includes/sidebar.php"); ?>

    <!-- Avatar Side Block End -->

    <!-- Page Content Start -->
    <div id="content" class="content">
      <div class="content__wrapper">

        <!-- Intro Section Start -->
        <?php include("includes/sections/introduction.php"); ?>
        <!-- Intro Section End -->

        <!-- About Section Start -->
        <?php include("includes/sections/presentation.php"); ?>
        <!-- About Section End -->

        <!-- Resume Section Start -->
        <?php include("includes/sections/resume.php"); ?>
        <!-- Resume Section End -->
        <!-- Portfolio Section Start -->
        <?php include("includes/sections/projects.php"); ?>
        <!-- Portfolio Section End -->
        <!-- Contact Section Start -->
        <?php include("includes/sections/contact.php"); ?>
        <!-- Contact Section End -->

      </div>
    </div>
    <!-- Page Content End -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <?php include("includes/photoswipe.php"); ?>


    <!-- Load Scripts Start -->
    <script src="assets/js/libs.min.js"></script>
    <script>
      const randomX = random(-400, 400);
      const randomY = random(-200, 200);
      const randomDelay = random(0, 50);
      const randomTime = random(20, 40);
      const randomTime2 = random(5, 12);
      const randomAngle = random(-30, 150);

      const blurs = gsap.utils.toArray(".blur");
      blurs.forEach((blur) => {
        gsap.set(blur, {
          x: randomX(-1),
          y: randomX(1),
          rotation: randomAngle(-1)
        });

        moveX(blur, 1);
        moveY(blur, -1);
        rotate(blur, 1);
      });

      function rotate(target, direction) {
        gsap.to(target, randomTime2(), {
          rotation: randomAngle(direction),
          ease: Sine.easeInOut,
          onComplete: rotate,
          onCompleteParams: [target, direction * -1]
        });
      }

      function moveX(target, direction) {
        gsap.to(target, randomTime(), {
          x: randomX(direction),
          ease: Sine.easeInOut,
          onComplete: moveX,
          onCompleteParams: [target, direction * -1]
        });
      }

      function moveY(target, direction) {
        gsap.to(target, randomTime(), {
          y: randomY(direction),
          ease: Sine.easeInOut,
          onComplete: moveY,
          onCompleteParams: [target, direction * -1]
        });
      }

      function random(min, max) {
        const delta = max - min;
        return (direction = 1) => (min + delta * Math.random()) * direction;
      }
    </script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/gallery-init.js"></script>
    <!-- Load Scripts End -->
    
  </body>

</html>