<?php get_header(); ?>

<?php 
	$post = get_post();

	
	$author = $post->post_author;
	$name = get_the_author_meta('display_name', $author);
	$description = get_the_author_meta('description', $author);

	$title = $post->post_title;
	$content = $post->post_content;
	$excerpt = $post->post_excerpt;

?>

<main>
	<section class="section main-block">
		<div class="wrapper flex-wrapper">
			<div class="section__content content">
				<div class="section__title text text_header-2 text_separated text_capit text_black"> <?php echo $title; ?></div>
				<div class="section__header flex-wrapper author text_separated">
					<div class="reviews__item review flex-wrapper">
						<div class="flex-wrapper__img review__img">
							<div class="circle rewie"></div>
						</div>
						<div class="flex-wrapper__content review__content">
							<div class="blockquote">
								<blockquote class="blockquote__text text text_hight"><span class="quotes">&#8220; </span><span><?php echo $excerpt; ?></span><span class="quotes"> &#8221;</span></blockquote>
								<cite class="blockquote__cite text text_low"><span>- </span><span><?php echo $name; ?>, <?php echo $description; ?></span></cite>
							</div>
						</div>
					</div>
				</div>
				<div class="section__text text text_low"><?php echo $content; ?></div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>