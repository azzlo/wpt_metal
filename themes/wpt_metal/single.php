<?php get_header();?>
<div class="container">
  <div class="row">
    <div class="col-md-12">

    </div>
  </div>

      <?php


        if(have_posts()) :
          while (have_posts()):
          the_post();
            ?>
            <h2 class="text-center"> <?php the_title(); ?></h2>
            <article class="">
              <div class="">
                <h3><b>  <?php the_date(); ?></b></h3>
              </div>
              <p>
                <?php the_content(); ?>
              </p>
              <footer>
                <div class="">
                  <small>Publicado por: <?php the_author(); ?></small>
                </div>
              </footer>
            </article>

      <?php
        endwhile;
        else :
       ?>
          <h3 class="text-center">Huy, no se ha ecnontrado vacantes</h3>
      <?php
        endif;
       ?>


</div>
<?php get_footer();?>
