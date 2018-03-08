<?php
/**
* The default template for single blog posts.
*
* @author    Urban Influence
* @package   jumpoff/single
* @version   1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 
$post_ftimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false );
$post_subtitle = get_field('');
?>

<!-- Main
================================================== -->
<main role="main">

<?php while (have_posts()) : the_post(); ?>

<article class="post">

<!-- Mast
================================================== -->
<header class="mast mast--left mast--post">
  <?php if ($post_ftimg) : ?>
    <figure class="mast__bg" style="background-image:url('<?php echo jumpoff_ft_img('full'); ?>');"></figure>
  <?php endif; ?>
  <div class="mast__header">
    <time class="mast__subtitle"><?php the_time('F j, Y'); ?></time>
    <h1 class="mast__title"><?php the_title(); ?></h1>
    <?php if ($post_subtitle) : ?>
      <p class="mast__text"><?php echo $post_subtitle; ?></p>
    <?php endif; ?> 
    <hr class="sep sep--white"/>
  </div>
</header>

<!-- Post content
================================================== -->
<section class="content content--post">
  <div class="grid">
    <div class="grid__col g-6 centered">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<!-- Post Footer
================================================== -->
<footer class="post-footer">
  <div class="grid">
    <div class="grid__col g-6 centered">
      <!-- Post Cats -->
      <aside class="post-cats">
        <span class="post-cats__title">Posted In : </span>
        <span class="post-cats__item"><?php the_category('</span><span class="post-cats__item">'); ?></span>
      </aside>

      <!-- Post Shares -->
      <aside class="post-shares">
        <span class="post-shares__title">Share</span>
        <a class="post-shares__link" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>+<?php the_permalink(); ?>">Twitter</a>
        <a class="post-shares__link" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>/&amp;title=<?php the_title(); ?>">Facebook</a>
      </aside>

      <aside class="post-byline">
        <span class="post-byline__meta">Author</span>
        <span class="post-byline__author"><?php the_author_meta('display_name'); ?></span>
        <?php if (get_the_author_meta('description')) : ?>
          <p class="post-byline__bio"><?php the_author_meta('description'); ?></p>
        <?php endif; ?>
        <a class="post-byline__author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">View All Posts</a>
      </aside>
    </div>
  </div>
</footer>
</article>

<!-- Comments
================================================== -->
<section class="comments">
  <div class="grid">
    <div class="grid__col g-6 centered">
      <?php comments_template(); ?>
    </div>
  </div>
</section>
<?php endwhile; ?>

<!-- Next
================================================== -->
<?php get_template_part( 'partials/partial', 'next' );?>

</main>

<!-- Footer
================================================== -->    
<?php get_footer(); ?>