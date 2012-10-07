<?php
session_start();
include('./resources/config.php');
include('./resources/templates/header.php');







?>


<section id="envelope"> 

		
	<section id="slider">
		<div id="slider1">
        <ul id="slider1Content">
            <li class="slider1Image">
               <a href="#"> <img src="./img/layout/sherlock.jpg" alt="2" /><a>
                <span class="right"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...</span></li>
            <li class="slider1Image">
                <a href="#"><img src="./img/layout/final.jpg" alt="2" /></a>
                <span class="right"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...</span></li>
            <li class="slider1Image">
                 <a href="#"><img src="./img/layout/hero.jpg" alt="3" /><a>
                <span class="right"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...</span></li>
            <li class="slider1Image">
                 <a href="#"><img src="./img/layout/reckon.jpg" alt="4" /><a>
                <span class="right"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...</span></li>
            <li class="slider1Image">
                <a href="#"><img src="./img/layout/max.jpg" alt="5" /><a>
                <span class="right"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...</span></li>
            <div class="clear slider1Image"></div>
        </ul>
    </div>
</section> 
	<section id="content">		

		


<!--
	
	
	
	removed : 
					<header id="content-head">
						<h1 id="main-head"> Hello </h1>

						<p id="tag"> Main-sub-heading </p>

					</header> 
	
	-->
	
	<?php
	
	$query6 = "SELECT COUNT(*) as no FROM articles WHERE type=1 OR type=2 ";
	$result6 = $conObj->query($query6);
	$row6 = $result6->fetch_object();
	$numrows = $row6->no;
	$lastpage = ceil($numrows/$rows_per_page);
	if($lastpage==0)
	$lastpage=1;
	$pageno = (int)$pageno;
	if($pageno > $lastpage)
	$pageno = $lastpage;
	if($pageno<1)
	$pageno =1;
	$limit = 'LIMIT '.($pageno-1)*$rows_per_page.','.$rows_per_page;
	
	$query = "SELECT * FROM articles WHERE type=1 OR type=2 ORDER BY views $limit";
	$result = $conObj->query($query);
	
	
	
	
	
	
	
	?>
			
<!--	<section id="post_block">
		<section id="article_wrapper">
			<article id="post">
	
			
			
			<section id="content-wrap">
				<header id="post-head"> -->

					<?php
					
					while($row = $result->fetch_object())
					{
						$query21 = "SELECT username FROM users WHERE id = $row->post_by";
						$result21 = $conObj->query($query21);
						$row21 = $result21->fetch_object();
						
						
						echo "<section id=\"post_block\"><section id=\"article_wrapper\"><article id=\"post\"><section id=\"content-wrap\"><header id=\"post-head\">";
						
						echo" 	<p id=\"p-head\"> $row->title <img src=\" ".$config['paths']['images']['layout']."/group.png\"> </p>";
							$dt = date("F j, Y, g:i a" , strtotime($row->post_date));
					echo "<h5 id=\"date\">$dt</h5> ";
					echo " 	<p id=\"by-line\">By $row21->username </p>";	
					echo "</header>";
					$abstract = substr($row->body,30);
                                       // $abstract = strip_tags($abstract);
					//$abstract = substr($abstract,10);
					echo "<pre width="30" id=\"final-body\">$abstract</pre>";
					
					switch($row->type)
					{
						case 1:
						$link="showrev.php";
						break;
						case 2:
						$link="showtut.php";
						break;
						case 3:
						$link="showtopic.php";
						break;
					
					}	
						
					echo "<footer id=\"post-foot\"><p>";
					echo "<a href=\"$link?id=".$row->id."\">read..post</a></p>";
					echo "</footer></section></article></section></section>";
					
					
				//	echo "<section id=\"post_img\">";
				//	echo "<img id=\"polaroid\"  src=\"./img/layout/log1.png\"";
				//	echo "<div class=\"caption\"> Vice City</div>	";
				//	echo "</section>  ";

			
					}
					
					
					
					
					
					?>
					

		
	</section>
	
	<div id="pagination">
	<?php

	if($pageno ==1)
	{
		echo " FIRST PREV";
	}
	else
	{
		echo " <a href=\"{$_SERVER['PHP_SELF']}?pageno=1\">FIRST</a> ";
		$prev = $pageno -1;
		echo " <a href=\"{$_SERVER['PHP_SELF']}?pageno=$prev\">PREV</a> ";
	}

	echo " ( Page $pageno of $lastpage) ";

	if($pageno == $lastpage)
	{
			echo " NEXT LAST";
	}

	else
	{
		$next = $pageno + 1;
		echo " <a href=\"{$_SERVER['PHP_SELF']}?pageno=$next\">NEXT</a> ";
		echo " <a href=\"{$_SERVER['PHP_SELF']}?pageno=$lastpage\">LAST</a> ";	
	}


	?>
	</div>
			

</section>






<?php

include('./resources/templates/footer.php')


?>