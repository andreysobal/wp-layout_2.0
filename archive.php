<?php get_header("page"); ?>
<main>
	<section class="section main-block">
		<div class="wrapper flex-wrapper flex-wrapper_nowrap flex-wrapper_align-start">
			<div class="section__content content">

				<?php if (have_posts()) {
					while (have_posts()) { 
						the_post();
						$description = get_the_author_meta('description');
						$description = ($description) ? ", $description" : "";
						$author_id = get_the_author_meta('ID');
						$avatar = get_avatar_url($author_id);
					?>
					
						<div class="content__item">
							<div class="section__header flex-wrapper author text_separated">
									<div class="flex-wrapper__img review__img" style="background-image: url( <?php echo $avatar ?> );"></div>
									<div class="flex-wrapper__content">
											<a href="<?php the_permalink(); ?>"><div class="text text_capit text_black text_super-hight"><?php the_title(); ?></div></a>
											<cite class="blockquote__cite text text_low"><span>-&#160;<?php the_author(); echo $description; ?>&#160;/ <?php the_time('F jS, Y'); ?></span></cite>
									</div>
							</div>
							<div class="section__text text text_low text_separated">
								<p>
									<?php the_excerpt(); ?>
								</p>
							</div>
						</div>
					<?php 
					}//ends while ?>
					<!-- pagination -->
					<?php the_posts_pagination(array(
						'mid_size' => 1,
						'end_size' => 2,
					)); ?>
				<?php } else { ?>
					<div class="section__title text text_capit text_black text_super-hight">Записей нет</div>
				<?php } //ends if ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>