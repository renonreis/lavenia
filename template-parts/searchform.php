<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Procurar por:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Busca', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Procurar por:', 'label' ) ?>" />
    </label>
    <button type="submit" class="search-submit">
      <svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="15.798" viewBox="0 0 15.8 15.798">
        <path id="Caminho_2" data-name="Caminho 2" d="M17.545,15.467l-3.779-3.779a6.15,6.15,0,0,0,.9-3.21A6.517,6.517,0,0,0,8.286,2.1,6.185,6.185,0,0,0,2.1,8.288a6.517,6.517,0,0,0,6.377,6.376,6.15,6.15,0,0,0,3.115-.844l3.8,3.8a.953.953,0,0,0,1.346,0l.943-.943c.371-.371.236-.84-.135-1.211ZM4,8.287A4.282,4.282,0,0,1,8.287,4,4.615,4.615,0,0,1,12.76,8.478a4.284,4.284,0,0,1-4.282,4.283A4.616,4.616,0,0,1,4,8.287Z" transform="translate(-2.1 -2.101)" fill="#0a92e0"/>
      </svg>
    </button>
</form>