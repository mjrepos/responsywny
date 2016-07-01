<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

         <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
         </header>

         <div class="blog-header">
         <!-- Opublikowano -->
             <div class="entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo get_the_date( get_option('date_format') ); ?></div>
         <!-- Koniec Opublikowano. -->
         <!-- Dodal -->
             <div class="entry-author"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Dodał: <?php the_author(); ?></div>
         <!-- Koniec Dodal -->
         <!-- Komentarze -->
             <div class="entry-comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php comments_popup_link( 'Brak komentarzy', '1 Komentarz', 'Komentarzy: %', 'comments-link', 'Komentarze wyłączone'); ?></div>
         <!-- Koniec Komentarze -->
         </div>

         <div class="entry-content clearfix">
	        <?php the_content(); ?>
	     </div><!-- .entry-content -->


         <footer class="blog-footer">
         <!-- Kategoria -->
              <div class="entry-cat"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Kategorie: <?php the_category(', '); ?></div>
         <!-- Koniec Kategoria -->

         </footer><!-- .entry-footer -->
         <!-- Tagi -->
            <?php the_tags('<div class="entry-tags"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>Tagi: </div>', ", "); ?>
         <!-- Koniec Tagi -->
</article><!-- #post-## -->
