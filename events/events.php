<?php 
	include_once $_SERVER['DOCUMENT_ROOT']."/cpvdvfu/system/bd.php";
	$result = mysql_query("SELECT * FROM Activities");
	$array = mysql_fetch_array($result);
	$sum=0;
	do{
		$sum=$sum+1;
		printf("
				<article class='clear-after'>
				<div class='column three'>
				<!-- $array[Name]<br><a href='events.php?id=$array[ActivityID]'></a><br><br -->
					<figure><img src='./events/img/$array[ActivityID]' alt=''></figure>
				</div><!-- column three -->
				<div class='column nine last'>
					<h2><a href='events.php?id=$array[ActivityID]'>$array[Name]</a></h2>
					<!--h5 class='meta-post'><time datetime='2013-11-10'>array[DateTimeA]</time></h5 -->
					<p>$array[Description]</p>	
				</div><!-- column nine -->
				</article>
		");
	}
	while(($array = mysql_fetch_array($result)) or ($sum!==5));
	
?>
