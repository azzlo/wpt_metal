<?php get_header();?>
<div class="container">


      <?php


        if(have_posts()) :
          while (have_posts()):
          the_post();
            ?>
            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md-4">
                <h2 class="text-center"> <?php the_title(); ?></h2>
              </div>
              <div class="col-md-4">
                <h3><b>  <?php the_date(); ?></b></h3>
              </div>
            </div>
            <div class="row">
              <h3>Requisitos:</h3>
            </div>

            <article class="">
              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-11">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
                <footer>
                  <div class="autorVacante">
                    <small>Publicado por: <?php the_author(); ?></small>
                  </div>
                </footer>
              </div>


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
