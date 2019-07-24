<!DOCTYPE html>
<html lang="en" id="top">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home Landing V2</title>
    <link href="https://fonts.googleapis.com/css?family=Cookie|Great+Vibes|Poppins|Satisfy" rel="stylesheet">
    <link href="/test/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="/test/assets/css/linearicons.css" rel="stylesheet">
    <link href="/test/assets/css/iconmoon.css" rel="stylesheet">
    <link href="/test/assets/css/main.css" rel="stylesheet">
    <link href="/test/assets/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section id="home" class="mainWrapper page">
      <nav>
        <div class="nav-inner">
            <ul class="navList">
              <li><button href="#home" id="home-link" class="nav-link active ">Home</button><span></span></li>
              <li><button href="#about" id="about-link" class="nav-link">About</button><span></span></li>
              <li><button href="#blog" id="blog-link" class="nav-link ">The<br>Work</button><span></span></li>
              <li><button href="#contact" id="contact-link" class="nav-link">Contact</button><span></span></li>
            </ul>
        </div>
      </nav>
        <div class="container">
           <div class="col text-left">
              <a class="navbar-brand mb-0 h1 text-white" href="#">
                JABLANC
                 <span class="small">We Make Great Sites</span>
              </a>
               <button id="openMenuPanel" type="button" class="navbar-toggle moreMenu">
                 <div class="button_inner">
                     <span class="icon-bar top-bar"></span>
                     <span class="icon-bar mid-bar"></span>
                     <span class="icon-bar bottom-bar"></span>
                 </div>
                </button>
            </div>
          <div class="content">
              <div class="col">
                <h3>Hello &amp; Welcome</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.              
                </p> 
              </div>       
   
          </div>
        </div>
<!--       <nav class="navbar navbar-expand-lg navbar-light text-white">
        <a class="navbar-brand mb-0 h1 text-white" href="#"><span class="lnr lnr-diamond"></span>Jahmal Blanchard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-white">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#about">About</a>
            </li>
            <li class="nav-item text-white  text-whitedropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> -->
    </section>
    
    <section id="about" class="bg-info page">
      <div class="container">
      <h2 class="section-title">About Jablanc</h2>
      </div>
    </section>
    
     <section id="blog" class="bg-primary page">
       <div class="container">
          <h2 class="section-title">Portfolio &amp; Recent Work</h2>
       </div>
     </section>
    
    <section id="contact" class="bg-success page">
      <div class="container">
        <h2 class="section-title">Wanna' Talk</h2>
      </div>
    </section>

    
    <div id="backUpWrapper">
      <button class="backUp nav-link" href="#top" type="button"><span class="lnr lnr-chevron-up"></span></button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/test/bootstrap4/js/bootstrap.min.js"></script>
    
    <script>
      $('.nav-link').bind('click', function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
          $('html , body').stop().animate({
              scrollTop: $($(this).attr('href')).offset().top
          }, 1000);
        });
      
      $('#openMenuPanel').on('click',function(){
        $(this).toggleClass('active');
      });
      
      var scrollPos;
      
      $(document).ready(function(){
         scrollPos = ($(document).scrollTop())+75; 
            if(scrollPos >= $('#top').offset().top && scrollPos < (($('#about').offset().top))){
              $('.nav-link').removeClass('active');
              $('#home-link').addClass('active');
            } else if(scrollPos >= $('#about').offset().top && scrollPos < (($('#blog').offset().top))){
             $('.nav-link').removeClass('active');
              $('#about-link').addClass('active');
            } else if(scrollPos >= $('#blog').offset().top && scrollPos < (($('#contact').offset().top))){
              $('.nav-link').removeClass('active');
              $('#blog-link').addClass('active');
            } if(scrollPos >= $('#contact').offset().top){
              $('.nav-link').removeClass('active');
              $('#contact-link').addClass('active');
            } 
        
          if(window.innerWidth <= 768){
            $('#openMenuPanel').insertBefore($('.backUp'));
            isMenuOpen = false;
          } else {
            isMenuOpen = true;
            if($('#openMenuPanel').hasClass('active')){
              $('#openMenuPanel').removeClass('active');
            }
          }
        
      });
     
      
      var updateLayout = debounce(function(e) {

         $(window).scroll(function() {
            scrollPos = ($(document).scrollTop())+75; 
            if(scrollPos >= $('#top').offset().top && scrollPos < (($('#about').offset().top))){
              $('.nav-link').removeClass('active');
              $('#home-link').addClass('active');
            } else if(scrollPos >= $('#about').offset().top && scrollPos < (($('#blog').offset().top))){
             $('.nav-link').removeClass('active');
              $('#about-link').addClass('active');
            } else if(scrollPos >= $('#blog').offset().top && scrollPos < (($('#contact').offset().top))){
              $('.nav-link').removeClass('active');
              $('#blog-link').addClass('active');
            } if(scrollPos >= $('#contact').offset().top){
              $('.nav-link').removeClass('active');
              $('#contact-link').addClass('active');
            } 
          });

      }, 50, false);
      
      
      var updateNavMenu = debounce(function(e){
        $(window).resize(function(){
           if(window.innerWidth <= 768){
            $('#openMenuPanel').insertBefore($('.backUp'));
          } else {
            $('nav').attr('style','');
            if($('#openMenuPanel').hasClass('active')){
              $('#openMenuPanel').removeClass('active');
              isMenuOpen = false;
            }
          }
        })
      })
      
      window.addEventListener("scroll", updateLayout, false);
      window.addEventListener("resize", updateNavMenu, false);
      
      function debounce(func, wait, immediate) {
        var timeout;
        return function() {
          var context = this, args = arguments;
          var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
          };
          var callNow = immediate && !timeout;
          clearTimeout(timeout);
          timeout = setTimeout(later, wait);
          if (callNow) func.apply(context, args);
        };
      };
      
      var isMenuOpen = false;
      $('#openMenuPanel').on('click', function(){
        if(isMenuOpen){
          $('nav').animate({
            'right':'-150px'
          })
           $('nav').removeClass('open');
          isMenuOpen = false;
        } else {
            $('nav').animate({
            'right':'0px'
          }).addClass('open').attr('style','');
          isMenuOpen = true;
        }
           console.log(isMenuOpen)
      });
      
      
    
    </script>
    
    
  </body>
</html>