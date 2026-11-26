<?php
$navigation=[
    ['title'=>'Home'],
    ['title'=>'Projects'],
    ['title'=>'About'],
];

$name= 'Aymane Marouat';

$role= 'A junior web developer';

$projects=[
    [
    'img'=>'article1.jpg',
    'categorie'=>'Development',
    'color'=>'blue',
    'text'=>'Introduction to modern web development and best practices.'
    ],

    [
    'img'=>'article2.jpg',
    'categorie'=>'UI/UX Design',
    'color'=>'pink',
    'text'=>'How to design clean, accessible interfaces with Figma.'
    ],

    [
    'img'=>'article3.jpg',
    'categorie'=>'JavaScript',
    'color'=>'orange',
    'text'=>'Mastering DOM manipulation and asynchronous programming.'
    ],

    [
    'img'=>'article4.jpg',
    'categorie'=>'PHP & Backend',
    'color'=>'green',
    'text'=>'Building dynamic pages and separating data from view templates.'
    ],

];

require 'index-template.php' ;