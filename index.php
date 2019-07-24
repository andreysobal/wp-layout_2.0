<?php get_header(); ?>

<main>
	<section class="section activities" id="home">
		<div class="activities__item main-block">
			<div class="wrapper flex-wrapper">
				<div class="flex-wrapper__img illustration">Flow Tree Icon</div>
				<div class="flex-wrapper__content">
					<div class="section__title text text_header-2 text_light text_capit text_black">Web <b>Development</b></div>
					<div class="section__text">
						<p class="text text_separated text_low">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
						<p class="text text_low">Iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="activities__item main-block section_grey">
			<div class="wrapper flex-wrapper">
				<div class="flex-wrapper__img illustration">Users Icon</div>
				<div class="flex-wrapper__content">
					<div class="section__title text text_header-2 text_light text_capit text_black">Identity <b>Branding</b></div>
					<div class="section__text">
						<p class="text text_separated text_low">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</p>
						<p class="text text_low">Iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section main-block features" id="services">
		<div class="wrapper flex-wrapper">
			<div class="features__item feature flex-wrapper">
				<div class="flex-wrapper__img feature__img"></div>
				<div class="flex-wrapper__content feature__content">
					<div class="section__title text text_black"><b>Branding & Identity</b></div>
					<div class="section__text">
						<p class="text text_low text_separated">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
					</div>
				</div>
			</div>
			<div class="features__item feature flex-wrapper">
				<div class="flex-wrapper__img feature__img"></div>
				<div class="flex-wrapper__content feature__content">
					<div class="section__title text text_black"><b>Mobile App Development</b></div>
					<div class="section__text">
						<p class="text text_low text_separated">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
					</div>
				</div>
			</div>
			<div class="features__item feature flex-wrapper">
				<div class="flex-wrapper__img feature__img"></div>
				<div class="flex-wrapper__content feature__content">
					<div class="section__title text text_black"><b>UI/UX</b></div>
					<div class="section__text">
						<p class="text text_low text_separated">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
					</div>
				</div>
			</div>
			<div class="features__item feature flex-wrapper">
				<div class="flex-wrapper__img feature__img"></div>
				<div class="flex-wrapper__content feature__content">
					<div class="section__title text text_black"><b>Web & Graphic Design</b></div>
					<div class="section__text">
						<p class="text text_low text_separated">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
					</div>
				</div>
			</div>
			<div class="features__item feature flex-wrapper">
				<div class="flex-wrapper__img feature__img"></div>
				<div class="flex-wrapper__content feature__content">
					<div class="section__title text text_black"><b>Animations</b></div>
					<div class="section__text">
						<p class="text text_low text_separated">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
					</div>
				</div>
			</div>
			<div class="features__item feature flex-wrapper">
				<div class="flex-wrapper__img feature__img"></div>
				<div class="flex-wrapper__content feature__content">
					<div class="section__title text text_black"><b>Photography</b></div>
					<div class="section__text">
						<p class="text text_low text_separated">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section main-block section_grey reviews" id="clients">
		<?php
		$category_id = get_cat_ID( 'Clients' );

		$category_link = get_category_link( $category_id );
		?>
		<a href="<?php echo $category_link; ?>">
			<div class="section__title"><span class="text text_header-2 text_light text_capit text_black">Awesome <b>Clients</b></span></div>
			<div class="section__text"><span class="text">See what nice things our clients said about us.</span></div>
		</a>

		<div class="wrapper">
			<?php
				$posts = get_posts( array(
					'numberposts' => 2,
					'orderby' => 'rand',
					'post_type'   => 'post',
					'suppress_filters' => true,
				) );

				foreach( $posts as $post ){
					setup_postdata($post);

					$description = get_the_author_meta('description');
					$description = ($description) ? ", $description" : "";
					$author_id = get_the_author_meta('ID');
					$avatar = get_avatar_url($author_id);
			?>
			<div class="reviews__item review flex-wrapper">
				<div class="flex-wrapper__img review__img" style="background-image: url( <?php echo $avatar ?> );">
					<div class="circle rewie"></div>
				</div>
				<div class="flex-wrapper__content review__content">
					<div class="blockquote">
						<a href="<?php the_permalink(); ?>"><blockquote class="blockquote__text text text_hight"><span class="quotes">&#8220; </span><?php the_excerpt(); ?> <span class="quotes"> &#8221;</span></blockquote></a>
						<cite class="blockquote__cite text text_low"><span>- </span><span> <?php the_author(); echo $description; ?>&#160;/ <?php the_time('F jS, Y'); ?> </span></cite>
					</div>
				</div>
			</div>
			<?php 
				}//end forea
				
				wp_reset_postdata();
			?>
		</div>
	</section>
	<section class="partners main-block main-block_short-top main-block_short-bottom">
		<div class="wrapper flex-wrapper flex-wrapper_center">
			<div class="partner">
				<div class="partner__img"></div>
			</div>
			<div class="partner">
				<div class="partner__img"></div>
			</div>
			<div class="partner">
				<div class="partner__img"></div>
			</div>
			<div class="partner">
				<div class="partner__img"></div>
			</div>
		</div>
	</section>
	<section class="team main-block section_black" id="team">
		<div class="wrapper">
			<div class="section__title"><span class="text text_header-2 text_light text_capit text_white">Amazing <b>Team</b></span></div>
			<div class="section__text"><span class="text">These wonderful people make work enjoyable.</span></div>
			<div class="wrapper flex-wrapper flex-wrapper_center teammates">
				<div class="teammate">
					<div class="teammate__img"></div>
					<div class="teammate__name"><span class="text text_white">Kimberly Thompson</span></div>
					<div class="teammate__position"><span class="text text_white text_low text_light">Marketer</span></div>
					<div class="teammate__socials socials">
						<div class="twitter_team socials__item"></div>
						<div class="facebook_team socials__item"></div>
						<div class="pinterest_team socials__item"></div>
						<div class="google_team socials__item"></div>
					</div>
				</div>
				<div class="teammate">
					<div class="teammate__img"></div>
					<div class="teammate__name"><span class="text text_white">Rico Massimo</span></div>
					<div class="teammate__position"><span class="text text_white text_low text_light">Coder</span></div>
					<div class="teammate__socials socials">
						<div class="twitter_team socials__item"></div>
						<div class="facebook_team socials__item"></div>
						<div class="pinterest_team socials__item"></div>
						<div class="google_team socials__item"></div>
					</div>
				</div>
				<div class="teammate">
					<div class="teammate__img"></div>
					<div class="teammate__name"><span class="text text_white">Uku Mason</span></div>
					<div class="teammate__position"><span class="text text_white text_low text_light">Graphic Designer</span></div>
					<div class="teammate__socials socials">
						<div class="twitter_team socials__item"></div>
						<div class="facebook_team socials__item"></div>
						<div class="pinterest_team socials__item"></div>
						<div class="google_team socials__item"></div>
					</div>
				</div>
			</div>
			<div class="section__text"><span class="text text_white">Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit <br>aenean rhoncus posuere odio in tincidunt proin iaculis.</span></div>
		</div>
	</section>
	<section class="section main-block section_purple feedback" id="feedback">
		<div class="flex-wrapper flex-wrapper_center flex-wrapper_feedback">
			<div class="flex-wrapper__2column">
				<div class="section__title text text_header-2 text_light text_capit text_white">Say <b>Hello</b></div>
				<div class="section__text text text_white text_low text_separated">Don’t be shy, drop us an email and say hello! We are a really nice bunch of people :)</div>
				<div class="section__text feedback__contacts contacts">
					<div class="contacts__item contact">
						<div class="contact__image contact__image_mobile"></div>
						<div class="contact__info"><a href="tel:(416) 555-0000" class="text text_white text_low text_light">(416) 555-0000</a></div>
					</div>
					<div class="contacts__item contact">
						<div class="contact__image contact__image_mail"></div>
						<div class="contact__info"><a href="mailto:hello@escape.com" class="text text_white text_low text_light">example@email.com</a></div>
					</div>
					<div class="contacts__item contact">
						<div class="contact__image contact__image_twitter"></div>
						<div class="contact__info"><a href="http://www.twitter.com/" target="_blank" class="text text_white text_low text_light">twitter.com</a></div>
					</div>
					<div class="contacts__item contact">
						<div class="contact__image contact__image_facebook"></div>
						<div class="contact__info"><a href="http://www.facebook.com" target="_blank" class="text text_white text_low text_light">facebook.com</a></div>
					</div>
					<div class="contacts__item contact">
						<div class="contact__image contact__image_gplus"></div>
						<div class="contact__info"><a href="http://www.plus.google.com" target="_blank" class="text text_white text_low text_light">plus.com</a></div>
					</div>
					<div class="contacts__item contact">
						<div class="contact__image contact__image_pinterest"></div>
						<div class="contact__info"><a href="http://www.pinterest.com" target="_blank" class="text text_white text_low text_light">pinterest.com</a></div>
					</div>
				</div>
			</div>
			<div class="flex-wrapper__2column">
				<form action="post" label="feedback-form" class="section__text feedback__form form">
					<input type="text" placeholder="Your Name &#42;" class="textarea">
					<input type="text" placeholder="Your E-mail &#42;" class="textarea">
					<textarea name="message_text" id="form_msg" rows="10" placeholder="Your Message &#42;" class="textarea textarea_large"></textarea>
					<submit class="button button_form text text_white">Send</submit>
				</form>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>