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
  </div>
</div>


