<?php
  include_once 'includes/head.php';
?>
<?php

	if( !isset($_GET['ID']) || empty($_GET['ID'])){
		$id = '';die('NO ID');
	} else {
		$id = $_GET['ID'];
	}

	$work = json_decode(file_get_contents('data/portfolioWork.json'), TRUE);
	for($i = 0; $i < count($work); $i++){
		if($work[$i]["ID"] == $id){
			$selectedWorkArr = $work[$i];
		}
	}

	// echo '<pre>';
	// print_r($selectedWorkArr);
	// echo '</pre>';
?>
    <div class="content">
     <main>
      <header>
          <nav>
        <div class="navInner">
          <div class="container">

              <a class="navbar-brand py-2 px-3 mr-0" href="index.php">
                <img src="img/4x/logo-black@4x.png" width="100px"alt="">
              </a>
              <div class="navlinks">
                <ul id="mainNav-links" class="mainNav-links">
                  <li ><a href="/app/me">Home</a></li>
                  <li><a href="/app/me/#about">About</a></li>
                  <li class="page-me"><a href="/app/me/#portfolio">Work</a></li>
                  <li><a href="/app/me/#resume">Resume</a></li>
                  <li><a href="/app/me/#contact">Contact</a></li>
                </ul>
                <button id="openNavMenu" type="button">MENU</button>
              </div>
          </div>
          </div>
        </nav>


        <section id="top" class="hero-wrapper theWork">
          <div class="container">
            <div class="hero-inner">
              <h1 class="heroTitleMain workHeroText text-white">
                <span><b><?php echo $selectedWorkArr['title'];?></b></span>
              </h1>
            </div>
          </div>


          <div class="bgtTextGraphic" style='display:none;'>
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

      <section id="theWorkBody" class="page py-5">
       <div class="container">
          <?php include '/app/me/includes/work-navigation.php'; ?>
          body contents
       </div>
      </section>

    <hr>

     <section id="portfolio" class="page py-2">
      <div class="container-fluid px-0">
        <h2 class="moreWork-title text-center my-5"><span></span>More Work<span></span></h2>
        <div class="galleryWork">
          <?php
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
          <a href="app/me/work.php?ID=<?php echo $workId; ?>" id="work-<?php echo $workId; ?>" class="work" style="background-image:url('<?php echo $image; ?>')"
          data-workid="<?php echo $workId; ?>"
          >
            <div class="workOverlay">
              <div class="workInner text-center">
                <div class="workCategory">
                  <?php echo $category; ?>
                </div>
                <div class="workTitle ">
                  <?php echo $title; ?>
                </div>
              </div>
            </div>
          </a>
          <?php } ?>
        </div>
      </div>
      </section>
    </main>
</div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/app/me/js/bootstrap4/js/bootstrap.min.js"></script>
    <script src="/app/me/js/main.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->


    <script>


    </script>


  </body>
</html>
