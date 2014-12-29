<div class="thing">

<div class="cover">
	<a href="<?php echo get_field( 'link' ) ?>" target="_blank">
		<img src="<?php echo get_field('cover') ?>" alt="<?php echo the_title() ?>">
	</a>
</div>

<header class="entry-header">
	<div class="entry-meta">
		<a href="<?php echo the_permalink() ?>">
			<?php the_date() ?> at
			<?php the_time('F j Y') ?>
		</a>
	</div><!-- .entry-meta -->
	<h1><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h1>
</header><!-- .entry-header -->

<div class="entry-content">
	<?php the_content(); ?>
</div>


</div>