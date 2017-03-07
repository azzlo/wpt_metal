<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2><?php bloginfo(name);?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php
        if(have_posts()){
          while (have_posts()){
            the_post();
            ?>

            <h3>fgfg</h3>
            <?php
          }
        }
       ?>
    </div>
  </div>

</div>
