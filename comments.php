<?php if ( have_comments() ) : ?>
	
	Komentarze do wpisu <?php comments_number('(Brak komentarzy)', '(Jeden komentarz)', '(% komentarze/y)' );?>

	<ul class="commentlist">
		<?php wp_list_comments(); ?>
	</ul>
	
	
	<div class="comments-navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<p>Możesz skomentować mój wpis jako pierwszy!</p>
<?php 	else : ?>
		<p>Komentowanie tego wpisu zostało zamknięte!</p>
<?php	
	endif;
endif; 


$new_defaults = array(
	'comment_notes_after' => '',
	'title_reply' => 'Dodaj swoją odpowiedź w tym temacie'
);

comment_form($new_defaults);

?>