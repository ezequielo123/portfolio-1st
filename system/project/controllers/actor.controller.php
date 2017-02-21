<?php
$unique_actor_id = request::get('id');
//information about movie

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

$selected_actor = new view('actor/selected_actor');
$selected_actor->actor = Selected_Actors_Model::getSelected_Actors($unique_actor_id);
$selected_actor->actors_movie_list = Selected_Actors_Model::getMoviesFromSelected_Actors($unique_actor_id);

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

//page
$page_layout = new view('actor/page_layout');
$page_layout->selected_actor = $selected_actor;
$page_layout->actors = $actors;
$page_layout->right_menu = $right_menu;

//sets the title of the page
presenter::setTitle('Actor Profile');

//give the layout to the presenter
presenter::present($page_layout);
