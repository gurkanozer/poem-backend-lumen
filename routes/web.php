<?php

$router->group(['prefix' => 'api'], function () use ($router) {
    //HOME
    $router->get('poems', 'HomeController@showAllPoems');
    $router->get('genres', 'HomeController@showAllGenres');
    $router->get('authors', 'HomeController@showAllAuthors');
    //AUTH
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    //USER
    $router->get('user', 'UserController@show');
    $router->put('user', 'UserController@update');

    //POEM
    //$router->get('poems', 'PoemController@showAll');
    $router->get('poems/{id}', 'PoemController@show');
    $router->post('poems', 'PoemController@save');
    $router->put('poems/{id}', 'PoemController@update');
    $router->delete('poems/{id}', 'PoemController@delete');

    //GENRE
    //$router->get('genres', 'genreController@showAll');
    $router->get('genres/{id}', 'genreController@show');
    $router->post('genres', 'genreController@save');
    $router->put('genres/{id}', 'genreController@update');
    $router->delete('genres/{id}', 'genreController@delete');

    //AUTHOR
    //$router->get('authors', 'AuthorController@showAll');
    $router->get('authors/{id}', 'AuthorController@show');
    $router->post('authors', 'AuthorController@save');
    $router->put('authors/{id}', 'AuthorController@update');
    $router->delete('authors/{id}', 'AuthorController@delete');
});
