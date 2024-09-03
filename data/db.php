<?php
require_once __DIR__.'/../Classes/producer.php';
require_once __DIR__.'/../Classes/movie.php';

$db_movies=[
  new Movie("Mad Max: Fury Road",new Producer("George","Miller") , "English", "2015", "120", ["Action", "Adventure"]),
  new Movie("Die Hard", new Producer("John","McTiernan") , "English", "1988", "132", ["Action", "Thriller"]),
  new Movie("The Dark Knight",new Producer("Christopher","Nolan"), "English", "2008", "152", ["Action", "Crime"]),
  new Movie("Terminator 2: Judgment Day",new Producer("James","Cameron"), "English", "1991", "137", ["Action", "Sci-Fi"]),
  new Movie("Gladiator", new Producer("Ridley","Scott"), "English", "2000", "155", ["Action", "Drama"]),
  new Movie("The Matrix", new Producer("The","Wachowskis"), "English", "1999", "136", ["Action", "Sci-Fi"]),
  new Movie("Inception", new Producer("Christopher ","Nolan"), "English", "2010", "148", ["Action", "Sci-Fi"]),
  new Movie("The Avengers",new Producer("Joss","Whedon"), "English", "2012", "143", ["Action", "Adventure"]),
  new Movie("Lethal Weapon",new Producer("Richard","Donner"), "English", "1987", "110", ["Action", "Comedy"]),
  new Movie("John Wick", new Producer("Chad","Stahelski"), "English", "2014", "101", ["Action", "Thriller"]) 
];