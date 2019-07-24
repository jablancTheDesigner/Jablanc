<?php
	if( !isset($_GET['ID']) || empty($_GET['ID'])){
		$id = '';die('NO ID');
	} else {
		$id = $_GET['ID'];
	}
	
	$work = json_decode(file_get_contents('../data/portfolioWork.json'), TRUE);
	for($i = 0; $i < count($work); $i++){
		if($work[$i]["ID"] == $id){
			$selectedWorkArr = $work[$i];
		}
	}

	include 'theRemake/head.php';
	echo $_SERVER['SERVER_NAME'];
	// echo '<pre>';
	// print_r($selectedWorkArr);
	// echo '</pre>';
?>



        <section class="hero-wrapper">
          <div class="container py-5"> 
            <div class="hero-inner text-center">
             <div class="pageTitle"><?php echo $selectedWorkArr['title'];?></div>
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
     
    </main>
</div>




      <img src="../img/scroll-down.gif" alt="" height="60px" class="scrollDown fixed-bottom">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap4/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      
    
    <script>
      

    </script>


  </body>
</html>
