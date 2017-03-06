<?php get_header();?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
        if(have_posts()) :
          while(have_posts()) :
          the_post();

       ?>
            <h1 class="text-center"><?php the_title();?></h1>

      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12 ">
        <p>
          <?php the_content(); ?>
        </p>

      </div>
    </div>

</div>
        <?php
          endwhile;
          else :
         ?>
          <h4>Huy, nariz</h4>
        <?php
          endif;
          wp_reset_postdata();

         ?>

<?php get_footer();?>
