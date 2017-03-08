<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2><?php bloginfo(name);?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">ultimos vacantes</h2>
      <?php
        $args = array('cat' => 3);
        $category_posts = new WP_Query($args);

        if($category_posts->have_posts()) :
          while ($category_posts->have_posts()):
            $category_posts->the_post();
            ?>
            <article class="">
              <h3><?php the_title(); ?></h3>
              <p>
                <?php the_excerpt(); ?>
              </p>
              <footer>
                <div class=""><b>  <?php the_date(); ?></b>

                </div>
                <div class="">
                  <small><?php the_author(); ?></small>
                </div>

                <a href="<?php the_permalink(); ?>">Leer mas</a>

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
  </div>

</div>
