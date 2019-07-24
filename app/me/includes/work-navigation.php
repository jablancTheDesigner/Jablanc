<?php
$backCount = 0;
$workCount = count($work);
$currentId = $id;
$prevPage = ($id - 1);
$NextPage = ($id + 1);
if($prevPage == 0){
	$prevPage = $workCount;
}
if($NextPage > count($work)){
	$NextPage = 1;
}
for($i = 0; $i < count($work); $i++){
	if($work[$i]["ID"] == $prevPage){
		$prevWork = $work[$i];
	}
	if($work[$i]["ID"] == $NextPage){
		$nextWork = $work[$i];
	}
}


?>



<div class="d-flex justify-content-between w-100 align-items-center text-body border-bottom py-2">
  <a href="work.php?ID=<?php echo $prevPage ;?>" class="workNavBtn w-25">
    <div class=" back text-left">
      <p class="d-flex align-items-center"><i class="fas fa-chevron-left mr-2"></i> <?php echo $prevWork['title'];?></p>
    </div>
  </a>

  <a href="work.php?ID=<?php echo $NextPage ;?>" class="workNavBtn w-25">
    <div class="next text-right">
        <p class="d-flex align-items-center justify-content-end"><?php echo $nextWork['title'];?> <i class="ml-2 fas fa-chevron-right"></i></p>
    </div>
  </a>
</div>
