<?php
/**
 * @package firmasite
 */
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
  <div class="col-xs-12 col-md-12">
    <header class="row entry-header">
      <div class="col-xs-12 col-md-12">
        <h1 class="page-header"><strong><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', "firmasite" ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></strong></h1>
      </div>
    </header>
    <div class="row">
     <div class="col-xs-12 col-md-12 entry-content">      
 		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', "firmasite" ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><ul class="pagination pagination-sm">', 'after' => '</ul></div>' ) ); ?>
        <?php if (empty($post->post_title)){ ?>
        <a class="pull-right" href="<?php the_permalink(); ?>" rel="bookmark">
			<small><i class="icon-bookmark"></i><?php  _e( 'Permalink', "firmasite" ); ?></small>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
<hr />