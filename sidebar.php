<aside class="sidebar col-md-4">
  <div class="widget redes-sociales">
    <div class="titulo-seccion">
      <h3>Síguenos</h3>
      <div class="redes-sociales">
        <a class="youtube" href="">
          <i class="icono fa fa-youtube"></i>
          <span class="seguidores">130k</span>
        </a>
        <a class="twitter" href="">
          <i class="icono fa fa-twitter"></i>
          <span class="seguidores">6k</span>
        </a>
        <a class="facebook" href="">
          <i class="icono fa fa-facebook"></i>
          <span class="seguidores">8k</span>
        </a>
      </div>
    </div>
  </div>

  <div class="widget boletin">
    <div class="titulo-seccion">
      <h3>Suscribete</h3>
      <form class="formulario" action="">
        <label for="email">Suscríbete a nuestro boletín</label>
        <input type="email" id="email" placeholder="Correo" required>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>

  <div class="widget ad">
    <div class="contenedor-ad">
      <a href=""><img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt=""></a>
    </div>
  </div>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
</aside>