<!-- Fait apparaître la barre latérale et les widgets dans votre thème partout où get_sidebar()  est appelé -->
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
<!-- si aucun widget n’est activé, la barre latérale HTML ne doit pas être affichée -->
<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
  <?php dynamic_sidebar( 'sidebar' ); ?>
  <!-- Afficher les widgets -->
</aside>
<?php endif; ?>