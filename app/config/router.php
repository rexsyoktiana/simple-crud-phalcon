<?php

$router = $di->getRouter();

//========================
// Users
    $router->addGet(
        "/users",
        [
            "controller"        => "users",
            "action"            =>  "index",
        ]
    );
    $router->addGet(
        "/users/{usersId}",
        [
            "controller"        => "users",
            "action"            => "show"
        ]
    );
    $router->addGet(
        "/users/create",
        [
            "controller"        => "users",
            "action"            => "create"
        ]
    );
    $router->addPost(
        "/users/create",
        [
            "controller"        => "users",
            "action"            => "save"
        ]
    );
    $router->addPut(
        "/users/edit{usersId}",
        [
            "controller"        => "users",
            "action"            => "edit"
        ]
    );

    $router->addDelete(
        "/users/delete{usersId}",
        [
            "controller"        => "users",
            "action"            => "delete"
        ]
    );
// Books
//========================
$router->handle();
