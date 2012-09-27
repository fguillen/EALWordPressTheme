<div id="left-column">
  <div id="menu">
    <ul>
      <li><a href="http://tienda.escritoalapiz.es">Ir a la Tienda</a></li>

      <li>Info
        <ul>
          <?php wp_list_pages('title_li=&sort_column=menu_order' ); ?>
        </ul>
      </li>

      <li>Posts
        <ul>
          <?php wp_get_archives('type=postbypost&limit=15'); ?>
        </ul>
      </li>
    </ul>

    <div id="menu-tools">
      <ul>
        <li><a href="https://www.facebook.com/pages/Escrito-a-L%C3%A1piz/146672305375792"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" /></a></li>
        <li><a href="https://twitter.com/escritoalapiz "><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" /></a></li>
      </ul>
    </div>
  </div>
</div>


