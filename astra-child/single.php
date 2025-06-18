<?php get_header(); ?>
<div class="main-single">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<div class="post-photo">
			<?php echo(get_the_post_thumbnail()); ?>
	</div>
	<h1 class="post-title"><?php the_title(); ?></h1>
	<p class="post-info">
		Posté le <?php the_date(); ?>.
	</p>
	<div class="post-content">
		<?php the_content(); ?>
	</div>
	<div class="post-comments">
		<?php comments_template(); ?>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>