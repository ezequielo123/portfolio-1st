<?php

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();

$complete_actor_list = new view('actors/complete_actor_list');
$complete_actor_list->list = Complete_Actors_Model::getComplete_List();

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();

//page
$page_layout = new view('actors/page_layout');
$page_layout->complete_actor_list = $complete_actor_list;
$page_layout->actors = $actors;
$page_layout->right_menu = $right_menu;

//sets the title of the page
presenter::setTitle('Actors Complete List');

//give the layout to the presenter
presenter::present($page_layout);
