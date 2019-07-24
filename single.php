<?php get_header("page"); ?>

<?php 
	$post = get_post();

	the_post();
	$author = $post->post_author;
	$name = get_the_author_meta('display_name', $author);
	$author_id = get_the_author_meta('ID');
	$avatar = get_avatar_url($author_id);
	$description = get_the_author_meta('description');
	$description = ($description) ? ", $description" : "";

	$title = $post->post_title;
	$content = $post->post_content;
	$excerpt = $post->post_excerpt;



?>

<main>
	<section class="section main-block">
		<div class="wrapper flex-wrapper flex-wrapper_nowrap flex-wrapper_align-start">
			<div class="section__content content">
				<div class="section__header flex-wrapper author section__text text_separated">
					<div class="reviews__item review flex-wrapper">
						<div class="flex-wrapper__img review__img" style="background-image: url( <?php echo $avatar ?> );"></div>
						<div class="flex-wrapper__content">
							<a href="<?php the_permalink(); ?>"><div class="text text_capit text_black text_super-hight"><?php the_title(); ?></div></a>
							<cite class="blockquote__cite text text_low"><span>-&#160;<?php the_author(); echo $description; ?>&#160;/ <?php the_time('F jS, Y'); ?></span></cite>
						</div>
					</div>
				</div>
				<div class="section__text text text_low"><?php echo $content; ?></div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>