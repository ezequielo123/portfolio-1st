<?php

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

$complete_genre_list = new view('genre/complete_genre_list');
$complete_genre_list->list = Complete_Genre_Model::getComplete_Genre_List();

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

//page
$page_layout = new view('genre/page_layout');
$page_layout->complete_genre_list = $complete_genre_list;
$page_layout->actors = $actors;
$page_layout->right_menu = $right_menu;

//sets the title of the page
presenter::setTitle('Actors Complete List');

//give the layout to the presenter
presenter::present($page_layout);
