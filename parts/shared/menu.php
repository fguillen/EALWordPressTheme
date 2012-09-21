<div id="top-column">
  <div id="sections-menu">
    <ul>
      <li><a href="http://tienda.escritoalapiz.es">Tienda</a></li>
      <li class="actived"><a href="http://escritoalapiz.es">Web</a></li>
    </ul>
  </div>
</div>

<div id="left-column">
  <div id="header">
    <a href="<?php print( get_site_url() ) ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" /></a>
  </div>

  <div id="menu">
    <ul>
      <li>Info
        <ul>
          <?php wp_list_pages('title_li=' ); ?>
        </ul>
      </li>

      <li>Posts
        <ul>
          <?php wp_get_archives('type=postbypost&limit=15'); ?>
        </ul>
      </li>
    </ul>
  </div>
</div>


