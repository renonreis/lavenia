<div class="search-filter">
  <?php echo do_shortcode( '[searchandfilter fields="category,search" search_placeholder="Busque uma postagem" submit_label="Pesquisar"]' ); ?>
</div>
<div class="newsletter-sidebar">
  <h2>Inscreva-se na nossa newsletter</h2>
  <p>E fique por dentro de todas as novidades</p>
  <?php echo do_shortcode( '[contact-form-7 id="34" title="Newsletter Sidebar"]' ); ?>
  <div class="media-social">
    <p><?php the_field('titulo_redes', 'options'); ?></p>
    <a href="<?php the_field('facebook', 'options'); ?>" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="11.403" height="11.403" viewBox="0 0 11.403 11.403">
        <path id="Caminho_29331" data-name="Caminho 29331" d="M11.136,1H2.267A1.271,1.271,0,0,0,1,2.267v8.869A1.27,1.27,0,0,0,2.267,12.4H6.7V7.969H5.435V6.4H6.7V5.1A2.152,2.152,0,0,1,9.088,2.768H10.23V4.42H9.472a.837.837,0,0,0-.869.911V6.4h1.627l-.36,1.567H8.6V12.4h2.534A1.27,1.27,0,0,0,12.4,11.136V2.267A1.271,1.271,0,0,0,11.136,1Z" transform="translate(-1 -1)"/>
      </svg>
    </a>
    <a href="<?php the_field('instagram', 'options'); ?>" target="_blank">
      <svg id="Grupo_20550" data-name="Grupo 20550" xmlns="http://www.w3.org/2000/svg" width="13.647" height="13.647" viewBox="0 0 13.647 13.647">
        <rect id="Retângulo_17246" data-name="Retângulo 17246" width="13.647" height="13.647" transform="translate(0 0)" fill="rgba(0,0,0,0)"/>
        <path id="Caminho_29332" data-name="Caminho 29332" d="M101.423,196.435a3.337,3.337,0,0,0-3.335-3.335H92.435a3.337,3.337,0,0,0-3.335,3.335v5.653a3.337,3.337,0,0,0,3.335,3.335h5.653a3.337,3.337,0,0,0,3.335-3.335Zm-1.017,0v5.653a2.319,2.319,0,0,1-2.318,2.318H92.435a2.319,2.319,0,0,1-2.318-2.318v-5.653a2.319,2.319,0,0,1,2.318-2.318h5.653A2.319,2.319,0,0,1,100.405,196.435Zm-2.38,2.4a2.775,2.775,0,0,0-2.333-2.333,2.716,2.716,0,0,0-.406-.03,2.77,2.77,0,1,0,2.77,2.77A2.715,2.715,0,0,0,98.026,198.831Zm-1.006.149a1.783,1.783,0,0,1,.019.257,1.752,1.752,0,1,1-1.752-1.752,1.779,1.779,0,0,1,.257.019A1.757,1.757,0,0,1,97.019,198.98Zm1.351-3.336a.509.509,0,1,1-.509.509A.509.509,0,0,1,98.37,195.644Z" transform="translate(-88.14 -192.395)" fill-rule="evenodd"/>
      </svg>
    </a>
  </div>
</div>