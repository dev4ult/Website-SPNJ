<?php 

  $data_divisi = array (
    "android" => array ( 
      "name" => "ANDROID", 
      "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae consequatur sapiente molestiae distinctio voluptate incidunt nobis hic quod maxime?", 
      "lesson" => array ( 
        array ( 
          "name" => "ANDROID", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
        ), array ( 
          "name" => "KOTLIN", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae" 
        ) 
      ) 
    ), 
    "website" => array (
      "name" => "WEBSITE", 
      "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae consequatur sapiente molestiae distinctio", 
      "lesson" => array ( 
        array ( 
          "name" => "HTML", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
        ), array ( 
          "name" => "CSS", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae" 
        ), array ( 
          "name" => "Javascript", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing" 
        ) 
      ) 
    ), 
    "motion-graphic" => array ( 
      "name" => "MOTION GRAPHIC", 
      "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae consequatur sapiente", 
      "lesson" => array ( 
        array ( 
          "name" => "Ai", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
        ), array ( 
          "name" => "Ae", 
          "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae" 
        ) 
      ) 
    ) 
  ); 

// if(!isset($_GET['divisi'])) {
//   echo "<script>
//             alert('Tidak bisa langsung akses halaman divisi');
//             document.location.href = 'LandingPage.html';
//         </script>"; 
// } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>[] Divisi <?= $data_divisi[$_GET['divisi']]["name"]; ?> []</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="script.js" defer></script>
  </head>
  <body class="division-page">
    <nav class="fixed-top">
      <div class="nav-menu">
        <a class="ul-menu menu">Menu</a>
        <ul>
          <li>
            <a class="ul-menu" href="LandingPage.html">Home</a>
          </li>
          <li>
            <a class="ul-menu" href="#project">Project</a>
          </li>
          <li>
            <a class="ul-menu" href="#join">Join</a>
          </li>
          <li>
            <a class="ul-menu" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <a class="ul-menu theme-button" onclick="toogleDarkmode()">Dark</a>
    </nav>
    <header>
      <h1>
        DIVISI
        <?= $data_divisi[$_GET['divisi']]["name"]; ?>
      </h1>
      <div class="arrow-down"></div>
    </header>
    <main>
      <section id="description">
        <div class="description-text-container">
          <h2>
            DIVISI
            <?= $data_divisi[$_GET['divisi']]["name"]; ?>
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae consequatur sapiente molestiae distinctio voluptate incidunt nobis hic quod maxime?</p>
        </div>
      </section>
      <section id="lesson">
        <h2>MEMPELAJARI</h2>
        <div class="flex-lesson">
          <script>
            let lesson, lessonBefore;
          </script>
          <?php for($i = 0; $i < sizeof($data_divisi[$_GET['divisi']]["lesson"]); $i++) : ?>
          <div class="content-<?= $i+1 ?>">
            <p><?= $data_divisi[$_GET['divisi']]["lesson"][$i]["description"]; ?></p>
          </div>
          <script>
            lesson = document.getElementsByClassName("content-<?= $i+1; ?>")[0];
            lessonBefore = window.getComputedStyle(lesson, '::before');
            lesson.style.setProperty('--content-<?= $i+1; ?>' ,'"<?= $data_divisi[$_GET['divisi']]["lesson"][$i]["name"]; ?>"');
          </script>
          <?php endfor; ?>
        </div>
      </section>
      <section id="project">
        <h2>PROJECT</h2>
        <div class="grid-project">
          <div class="project-box project-1">
            <h3>PROJECT #1</h3>
            <p>-Andriana</p>
          </div>
          <div class="project-box project-2">
            <h3>PROJECT #2</h3>
            <p>-Haical</p>
          </div>
          <div class="project-box more-project">
            <h3>MORE</h3>
          </div>
          <div class="project-box project-3">
            <h3>PROJECT #3</h3>
            <p>-Maulani</p>
          </div>
          <div class="project-box project-4">
            <h3>PROJECT #4</h3>
            <p>-Setiawati</p>
          </div>
        </div>
        <div class="arrow-down"></div>
      </section>
      <section id="join">
        <div class="slider">
          <img loading="lazy" id="slide1" src="slider/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg" alt="unsplash1" />
          <img loading="lazy" id="slide2" src="slider/kelly-sikkema-v9FQR4tbIq8-unsplash.jpg" alt="unsplash2" />
          <img loading="lazy" id="slide3" src="slider/marvin-meyer-SYTO3xs06fU-unsplash.jpg" alt="unsplash3" />
        </div>
        <div class="join-us">
          <a class="join-button" href="Registration.html">JOIN US</a>
        </div>
      </section>
    </main>
    <footer id="contact">
      <div class="arrow-up"></div>
      <div class="footer-container">
        <div class="contact-form">
          <h2 class="footer-title">Ask Us</h2>
          <form action="">
            <table>
              <tr>
                <td><label for="name">Name</label></td>
                <td>:</td>
                <td><input id="name" type="text" placeholder="Your name..." required /></td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input id="email" type="email" placeholder="YourEmail@Xmail.com" required /></td>
              </tr>
              <tr>
                <td><label for="question">Question</label></td>
                <td>:</td>
                <td>
                  <textarea id="question" name="question" id="" cols="24" rows="7" placeholder="How many member you got there?..." required></textarea>
                </td>
              </tr>
              <tr>
                <td colspan="3" class="text-align-center">
                  <button type="submit" name="submit" class="submit-button">SUBMIT</button>
                </td>
              </tr>
            </table>
          </form>
        </div>
        <div class="socmed">
          <h2 class="footer-title">Follow Us</h2>
          <div class="logo-container">
            <div>
              <a href="#">
                <img src="logos/facebook.png" alt="facebook" />
              </a>
            </div>
            <div>
              <a href="#">
                <img src="logos/instagram.png" alt="instagram" />
              </a>
            </div>
            <div>
              <a href="#">
                <img src="logos/twitter.png" alt="twitter" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
