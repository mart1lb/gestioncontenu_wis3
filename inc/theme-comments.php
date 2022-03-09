<?php

function lazuli_comment_form_fields($args) {

	if ( isset( $args['fields']['url'] ) ) {
		unset( $args['fields']['url'] );
	}

	$args['title_reply_before'] = '<div class="title-wrapper"><h3 id="reply-title" class="text-gradient comment-reply-title">';
	$args['title_reply_after'] = '</h3></div>';
	$args['title_reply'] = 'Laissez-nous un commentaire';
	$args['fields']['author'] = str_replace('<input', '<input class="form-control" placeholder="Votre nom"', $args['fields']['author']);
	$args['fields']['email'] = str_replace('<input', '<input class="form-control" placeholder="Votre e-mail"', $args['fields']['email']);
	$args['fields']['cookies'] = str_replace('<p class="', '<p class="form-check ', $args['fields']['cookies']);
	$args['fields']['cookies'] = str_replace('<input', '<input class="form-check-input"', $args['fields']['cookies']);
	$args['fields']['cookies'] = str_replace('<label', '<label class="form-check-label"', $args['fields']['cookies']);
	$args['comment_field'] = str_replace('<textarea', '<textarea class="form-control" placeholder="Votre commentaire..."', $args['comment_field']);
	$args['submit_button'] = str_replace('<input', '<button type="submit" id="%2$s" class="btn btn-lg btn-outline-gradient %3$s"', $args['submit_button']);
	$args['submit_button'] = str_replace('/>', '>%4$s</button>', $args['submit_button']);

	return $args;
}
add_filter( 'comment_form_defaults', 'lazuli_comment_form_fields' );