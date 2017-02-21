<?php
$navigation = new view('navigation');

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

$email = request::post('email', '');
$text = request::post('text', '');
$newsletter = request::post('newsletter', '');

$form_view = new view('contact/form');
$form_view->email = $email;
$form_view->text = $text;
$form_view->newsletter = $newsletter;

$page_layout = new view('contact/page_layout');
$page_layout->right_menu = $right_menu;
$page_layout->actors = $actors;
$page_layout->form_view = $form_view;

presenter::setTitle('Contact us');

presenter::present($page_layout);