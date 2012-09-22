<div id="left-column">
  <div id="menu">
    <ul>
      <li><a href="http://tienda.escritoalapiz.es">ir a la Tienda</a></li>

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


