<?php 
$documentaries=$article->ibyegeranyo(6,false);
foreach ($documentaries as $key => $post) {
	$Posters=$article->get_article_poster($post['article_id']);
	$article_category=$article->get_article_category($post['category_id']);
	$views=$article->get_article_views($post['article_id']);
	$comments_counter=$article->get_article_comments_counter($post['article_id']);
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
				<img class="img-responsive" src="access/assets/IMG/<?php echo $poster['filename']; ?>" alt="" />
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
						<a href="#"><i class="fa fa-clock-o"></i> 
						<?php echo $function->string_date_format($post['validate_date']); ?></a></li>
					<li class="views"><a href="#"><i class="fa fa-eye"></i>
						<?php echo $views; ?></a></li>
				</ul>
			</div>
			<h2 class="entry-title">
				<a href="article?id=<?php echo $post['article_id']; ?>&title=<?php echo $post['title']; ?>">
					<?php echo $post['title']; ?>
				</a>
			</h2>
		</div>
	</div><!--/post--> 
	<?php
}
?>
