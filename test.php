<?php

use App\User;

require_once __DIR__ . '/vendor/autoload.php';

$userRepo = new \App\UserRepository();

$result = $userRepo->findByEmail('test@wp.pl')
    // cant use IDE support , must investigate UserRepository
    ->map(function(User $data) : string{
        return $data->getName();
    })->get();

var_dump($result);

$result = $userRepo->findByEmail('test111@wp.pl')
    ->map(function(User $data) : string{
        return $data->getName();
    })
    ->getOrElse('Unknown user');


var_dump($result);





