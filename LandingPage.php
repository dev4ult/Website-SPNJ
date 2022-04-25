<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>[] Sahabat PNJ []</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="script.js" defer></script>
  </head>
  <body class="">
    <nav class="fixed-top">
      <div class="nav-menu">
        <a class="ul-menu menu">Menu</a>
        <ul>
          <li>
            <a class="ul-menu" href="LandingPage.html">Home</a>
          </li>
          <li>
            <a class="ul-menu" href="#join">Join</a>
          </li>
          <li>
            <a class="ul-menu" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <a class="ul-menu theme-button" name="theme-button" onclick="toogleDarkmode()">Dark</a>
    </nav>
    <header>
      <h1><span class="sahabat-text">SAHABAT</span> <span class="pnj-text">PNJ</span></h1>
      <div class="arrow-down"></div>
    </header>
    <main>
      <section id="description">
        <div class="description-text-container">
          <h2>APA ITU SPNJ?</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae consequatur sapiente molestiae distinctio voluptate incidunt nobis hic quod maxime?</p>
        </div>
      </section>
      <section id="division">
        <h2>DIVISI</h2>
        <div class="card-container">
          <div class="card">
            <img loading="lazy" src="cards/louis-tsai-lqcvMiBABHw-unsplash.jpg" alt="" />
            <h3 class="division-name">ANDROID</h3>
            <a class="learn-more-button" href="Division.php?divisi=android">Learn More</a>
          </div>
          <div class="card">
            <img loading="lazy" src="cards/jackson-so-_t-l5FFH8VA-unsplash.jpg" alt="" />
            <h3 class="division-name">WEBSITE</h3>
            <a class="learn-more-button" href="Division.php?divisi=website">Learn More</a>
          </div>
          <div loading="lazy" class="card">
            <img src="cards/milad-fakurian-2sICkGsJRQY-unsplash.jpg" alt="" />
            <h3 class="division-name">MOTION GRAPHIC</h3>
            <a class="learn-more-button" href="Division.php?divisi=motion-graphic">Learn More</a>
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
          <a class="join-button" href="Registration.php">JOIN US</a>
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
