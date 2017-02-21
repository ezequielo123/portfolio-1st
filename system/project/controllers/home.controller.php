<?php

$movie_id = request::get('imdb_id');

$pictures = new view('home/pictures');

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

//information about movie
$details = new view('home/details');
$details->movies = Movies_Model::getMovies();

//list with people with brithdays
$born_today = new view('home/born_today');

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();


//page
$page_layout = new view('home/page_layout');
$page_layout->details = $details;
$page_layout->pictures = $pictures;
$page_layout->born_today = $born_today;
$page_layout->right_menu = $right_menu;
$page_layout->actors = $actors;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
