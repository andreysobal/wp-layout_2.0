<?php get_header('page'); ?>

<main>
	<section class="section">
		<div class="activities__item main-block">
			<div class="wrapper flex-wrapper">
				<div class="flex-wrapper__img illustration">Flow Tree Icon</div>
				<div class="flex-wrapper__content">
					<div class="section__title text text_header-2 text_light text_capit text_black"><?php the_title(); ?></div>
					<div class="section__text"> 
						<?php  the_post(); the_content(); ?> 
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>