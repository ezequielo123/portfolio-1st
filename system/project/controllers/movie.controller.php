<?php
$unique_id = request::get('id');
//information about movie

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

$mov = new view('movie/mov');
$mov->movie_name = Selected_Movie_Model::getSelectedMovie($unique_id);
$mov->movie_type = Selected_Movie_Model::getSelectedMovieType($unique_id);
$mov->all_movie_actors = Selected_Movie_Model::getActorsFromMovie($unique_id);
$mov->movie_genre = Selected_Movie_Model::getGenreFromMovie($unique_id);
$mov->movie_language = Selected_Movie_Model::getCountryFromMovie($unique_id);


//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

//page
$page_layout = new view('movie/page_layout');
$page_layout->mov = $mov;
$page_layout->actors = $actors;
$page_layout->right_menu = $right_menu;

//sets the title of the page
presenter::setTitle('Movie');

//give the layout to the presenter
presenter::present($page_layout);
