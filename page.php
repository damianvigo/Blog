<?php get_header(); ?> 

  <section class="container">
    <div class="row">
      <section class="main col-md-8">
        <div class="row single-post">
          <?php if (have_posts() ) : while(have_posts()) : the_post();?>
          <article class="col-sm-12 post">
            <div class="contenedor">
              <div class="info">
                <h2 class="titulo">
                  <?php the_title(); ?></h2>
                <p class="fecha"><?php echo get_the_date(); ?></p>
                <div class="texto"><?php echo the_content(); ?></div>
              </div>
            </div>
          </article>
          <?php endwhile; else : ?>
            <article class="col-md-6 post">
            <div class="contenedor">
              <div class="info">
                <h2 class="titulo">El post que buscar no existe</h2>
                <div class="extracto"><p>Revisa que la URL que hayas ingresado es correcta</p></div>  
              </div>
            </div>
          </article>
          <?php endif; ?>
        </div>   
      </section>

     <?php get_sidebar(); ?>
    </div>
  </section>

  <?php get_footer(); ?> 

 