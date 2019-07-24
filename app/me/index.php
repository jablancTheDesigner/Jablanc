
<?php
  include 'includes/head.php';
?>
    <div class="content">
     <main>
      <header>
       <nav>
        <div class="navInner border-bottom">
          <div class="container">

              <a class="navbar-brand py-2 px-3 mr-0" href="index.php">
                <img src="app/me/img/4x/logo-black@4x.png" width="100px"alt="">
              </a>
              <div class="navlinks">
                <ul id="mainNav-links" class="mainNav-links">
                  <li class="page-me"><a href="#top">Home</a></li>
                  <li class="page-me"><a href="#about">About</a></li>
                  <li class="page-me"><a href="#portfolio">Work</a></li>
                  <li class="page-me"><a href="#resume">Resume</a></li>
<!--                   <li class="page-me"><a href="#contact">Contact</a></li> -->
                  <li class="page-me d-none d-md-block"><a href="#about">
                    <div class="me rounded-circle">
                    </div>
                  </a></li>
                </ul>
                <button id="openNavMenu" type="button">MENU</button>
              </div>
          </div>
          </div>
        </nav>

        <section id="top" class="hero-wrapper main d-flex align-items-center">
          <div id="imaStar"></div>
         <!--  <div class="backgroundImage">
            <img src="img/hero-bg-temp-2.jpg" width="100%" alt="" class="img-fluid">
          </div> -->

          <div class="container">
            <div class="hero-inner text-sm-left text-center bg-white py-2 px-4 ">
              <h1 class="heroTitleMain">
                <b class="display-3 d-block">:)Hello</b>
                 I'm <b>Jahmal Blanchard</b>, a <b><span class="techFont text-uppercase">Front-end Web Developer</span> &amp; <span class="creatveFont">Graphic Designer</span></b> located in Orlando, FL.
              </h1>
              <!-- <img src="img/3x/hello-hero.png" class="img-fluid px-5"> -->
              <p class="heroSectionText">
                  Interested in working together? Let’s have a talk.
                </p>
            </div>
          </div>
          <!-- <span class="mesh"></span> -->
          <div class="bgtTextGraphic" style="display:none;">
            <span class="d-block bigUps">Web Development</span>
            <span class="d-block imGood">Graphic Design</span>
            <span class="d-block">Marketing</span>
            <span class="d-block">Branding</span>
            <span class="d-block imGood">Print Design</span>
            <span class="d-block bigUps">Javascript Lover</span>
            <span class="d-block">#WheresTheCoffee</span>
          </div>
        </section>
      </header>


      <section id="about" class="page pb-0">
        <div class="container px-0">
          <div class="row px-0 mx-0">
          <div class="col-12 meaningOf text-center mb-5">
              <div class="px-0" style="line-height:1.2;">
                <img src="app/me/img/2x/aboutBlanc.png" class="img-fluid mb-3" alt="">
                <h5 style="" class="meaningText ">
                  <em><b>Meaning:</b></em> Jahmal Blanchard or The choice you make when looking for a frontend web developer.
                </h5>
            </div>
          </div>

            <div class="col-12 px-0 aboutContent">
              <div class="row mt-2">
                <div class="col-lg-5 col-12">
                  <div class="px-sm-2 px-2 py-5 text-center">
                    <h2>BRAND &amp;<br>PRINT DESIGN</h2>
                    <p class="lead text-muted w-75 mx-auto">With a background in graphic design and print, I can create brading collateral such as logo design, business cards, and other printed materials.</p>
                  </div>
                </div>
                <div class="col-lg-2 col-12 d-flex align-items-center justify-content-center">
                  <div class="px-sm-4 px-2 py-2 text-center">
                    <h1 class="display-1 font-weight-bold">&amp;</h1>
                  </div>
                </div>

                 <div class="col-lg-5 col-12">
                  <div class="px-sm-2 px-2 py-5 text-center">
                    <h2>FRONT-END DEVELOPMENT<br>&amp; UI/UX DESIGN</h2>
                    <p class="lead text-muted w-75 mx-auto">Proper preparation equal proper execution. With every project, i plan out the structure and layout of a site. Then with the use of HTML, CSS , and Javascript, I build fast, interactive websites </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row text-center py-4 border-top border-bottom">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <h4 class="display-4">4+</h4>
              <p>Years Learning & Growing</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <h4 class="display-4">5,356</h4>
              <p>Coffee Consumed</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <h4 class="display-4">960</h4>
              <p>Minutes Spent Smiling /day</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <h4 class="display-4">100%</h4>
              <p>Growth Potential</p>
            </div>
          </div>
        </div>
      </section>

      <section id="portfolio" class=" bg-primary py-0" style="padding-right:35px;">
<!--         <div class="galleryWork"> -->
        <div class="galleryWork">
          <?php
            $work = json_decode(file_get_contents('app/me/data/portfolioWork.json'), TRUE);
            for ($i=0; $i < count($work); $i++) {
              $image = '';
              $workId = $work[$i]['ID'];
              $category = $work[$i]['category'];
              $title = $work[$i]['title'];
              $thumbnail = $work[$i]['thumbnail'];
              if( !$work[$i]['thumbnail'] == '' ){
                $image = 'app/me/img/work/'.$thumbnail;
              } else {
                $image = 'app/me/img/placeholder.jpg';
              }
          ?>
            <a href="work.php?ID=<?php echo $workId; ?>"
               id="work-<?php echo $workId; ?>"
               class="work w-100" style="background-image:url('<?php echo $image; ?>')"
               data-workid="<?php echo $workId; ?>">
            <div class="workOverlay">
                <div class="workInner text-center">
                  <div class="workCategory">
                    <?php echo $category; ?>
                  </div>
                  <div class="workTitle">
                    <?php echo $title; ?>
                  </div>
                </div>
              </div>
            </a>
          <?php } ?>
        </div>
      </section>

      <section id="resume" class="page bg-default">
        <?php $showDates= false; ?>
        <div class="container">

          <h3 class="resumeTitle">Resume</h3>

          <div class="resumeSection py-3 mb-3">
            <h3 class="resumeTitle--sub">Experience</h3>
            <h3>
              Creative Director
              <small class="d-block">Global Tech Network</small>
              <?php echo ($showDates)? '<small class="d-block text-white-50">May 2019 - July 2019</small>': ''; ?>
            </h3>
            <ul class="mb-5">
              <li>Successfully managed a small team of designers which focused on marketing and web development.</li>
              <li>Planned company advertisements.</li>
              <li>Monitored brand & email campaigns.</li>
              <li>Shaped brand standards for the company itself and all the clients we worked with.</li>
            </ul>

            <h3>
              Front-End Web Developer/Lead Designer
              <small class="d-block">Global Tech Network</small>
              <?php echo ($showDates)? '<small class="d-block text-white-50 ">May 2017 - May 2019</small>': ''; ?>
            </h3>
            <ul>
              <li>Created and maintained the front-end standards and oversaw production of JavaScript, HTML, and CSS and PHP.</li>
              <li>Planned company advertisements.</li>
              <li>Tested front-end code in multiple browsers to ensure cross-browser compatibility.</li>
              <li>Managed company/client social media and email marketing campaigns with Hootsuite and Mailchimp.</li>
              <li>Leveraged responsive web frameworks to consistently complete product deliverables ahead of schedule.</li>
              <li>Created highly effective marketing campaigns, product presentations, and trade show materials.</li>
            </ul>
          </div>

          <div class="resumeSection py-3 d-md-flex">
            <div class="w-100">
              <h3 class="resumeTitle--sub">Education</h3>
              <h1 class="display-4">
              Hampton University
              </h1>
              <h4><span class="text-white-50">Bachelors of Art Graphic Design</span></h4>
            </div>
            <div class="w-100">
              <h3 class="resumeTitle--sub">&nbsp;</h3>
              <h1 class="display-4">
              University of Phoenix
              </h1>
              <h4><span class="text-white-50">Master of Information Systems</span></h4>
            </div>
          </div>
        </div>
      </section>

<!--       <section id="contact" class="page bg-default py-5 px-5">
      </section> -->
      <section id="footer" class="footer bg-white py-4">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <a class="py-2 px-3" href="index.php">
                <img src="app/me/img/4x/logo-black@4x.png" width="100px"alt="">
              </a>
              <ul class="mainNav-links nav justify-content-around py-2 mt-3 w-100">
                  <li class="page-me"><a href="#top" style="color:#212529;">Back Up Top</a></li>
                  <li class="page-me"><a href="#about" style="color:#212529;">About</a></li>
                  <li class="page-me"><a href="#portfolio" style="color:#212529;">Work</a></li>
                  <li class="page-me"><a href="#resume" style="color:#212529;">Resume</a></li>
                </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
</div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="app/me/js/bootstrap4/js/bootstrap.min.js"></script>
    <script src="app/me/js/particles/particles.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script src="app/me/js/main.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

      <script>



        particlesJS.load('imaStar', 'app/me/data/particles.json', function() {
          console.log('callback - particles.js config loaded');
        });
      </script>



  </body>
</html>
