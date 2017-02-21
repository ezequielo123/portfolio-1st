<?php

$right_menu = new view('home/right_menu');
$right_menu->new_movies = new_Movies_Model::getNewMovie();


//list with people with brithdays
$login = new view('login/login');

//movie actors
$actors = new view('movies/actors');
$actors->actors_list = ActorsList_Model::getActorsList();


//page
$page_layout = new view('login/page_layout');
$page_layout->login = $login;
$page_layout->right_menu = $right_menu;
$page_layout->actors = $actors;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
