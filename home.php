<?php get_header('blog') ?>

<section class="section blog">
	<svg class="triangle triangle_fill_cararra blog__triangle" viewbox="0 0 1000 100" preserveAspectRatio="none">
		<polygon points="0,0 0,1000 1000,100"></polygon>
	</svg>
	<svg class="triangle triangle_fill_cararra triangle_right blog__triangle" viewbox="0 0 1000 100" preserveAspectRatio="none">
		<polygon points="0,0 0,1000 1000,100"></polygon>
	</svg>
	<div class="blog__container">
		<acide class="blog__sidebar">
			<nav class="blog-menu">
				<ul class="blog-menu__list">
					<?php while( have_posts() ) :
					the_post();
					?>
					<!-- blog-menu__item_active -->
						<li class="blog-menu__item"><a class="blog-menu__link" href="#article-<?php the_id() ?>" data-article="4"><?php the_title() ?></a></li>
					<?php endwhile ?>
				</ul>
			</nav>
		</acide>
		<main class="blog__main post">
			<ul class="post__list">
				<?php while( have_posts() ) :
					the_post();
				?>
					<li class="post__item" id="article-<?php the_id() ?>" data-article="1">
						<div class="post__title"><?php the_title() ?></div>
						<time class="post__data" data-time="1"><?php the_time('j F Y') ?></time>
						<div class="post__content"><?php the_content() ?></div>
					</li>
					<?php endwhile ?>
			</ul>
		</main>
	</div>
</section>
<?php get_footer('blog') ?>