<?php

$movie_id = request::get('imdb_id');

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

//error page
$error_page = new view('error/error_page');

//page
$page_layout = new view('error/page_layout');
$page_layout->right_menu = $right_menu;
$page_layout->actors = $actors;
$page_layout->error_page = $error_page;

//sets the title of the page
presenter::setTitle('404 Not Found');

//give the layout to the presenter
presenter::present($page_layout);
