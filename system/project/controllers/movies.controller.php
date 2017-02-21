<?php
$movie_id = request::get('imdb_id');
//information about movie
$movie_list = new view('movies/details');
$movie_list->movies = Movie_Model::getMovie();

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

//page
$page_layout = new view('movies/page_layout');
$page_layout->movie_list = $movie_list;
$page_layout->actors = $actors;
$page_layout->right_menu = $right_menu;

//sets the title of the page
presenter::setTitle('Movies');

//give the layout to the presenter
presenter::present($page_layout);
