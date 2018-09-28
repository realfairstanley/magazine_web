<?php 
$documentaries=$article->single_row_content();
foreach ($documentaries as $key => $post) {
	$Posters=$article->get_article_poster($post['article_id']);
	$article_category=$article->get_article_category($post['category_id']);
	$category_color="";
	if($article_category=="IBYEGERANYO"){
		$category_color="world";
	}elseif($article_category=="IMIKINO"){
		$category_color="sport";
	}elseif($article_category=="IKORANABUHANGA"){
		$category_color="technology";
	}elseif($article_category=="IMYIDAGADURO"){
		$category_color="entertainment";
	}else{
		$category_color="politics";
	}
	?>
	<div class="post medium-post">
		<div class="entry-header">
			<div class="entry-thumbnail">
				<?php 
				foreach ($Posters as $key => $poster) {
					?>
				<img class="img-responsive" src="../assets/IMG/<?php echo $poster['filename']; ?>" alt="" />
					<?php
				}
				?>
			</div>
			<div class="catagory <?php echo $category_color; ?>">
				<span>
					<a href="#"><?php echo $article_category; ?></a>
				</span>
			</div>
		</div>
		<div class="post-content">								
			<div class="entry-meta">
				<ul class="list-inline">
					<li class="publish-date">
						<a href="#"><i class="fa fa-clock-o"></i> <?php echo $post['validate_date']; ?></a></li>
					<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
					<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
				</ul>
			</div>
			<h2 class="entry-title">
				<a href="news-details.html">
					<?php echo $post['title']; ?>
				</a>
			</h2>
		</div>
	</div><!--/post--> 
	<?php
}
?>