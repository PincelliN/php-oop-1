<?php

require_once __DIR__.'/../Classes/movie.php';

$db_movies=[
  new Movie("Mad Max: Fury Road", "George Miller", "English", "2015", "120", ["Action", "Adventure"]),
  new Movie("Die Hard", "John McTiernan", "English", "1988", "132", ["Action", "Thriller"]),
  new Movie("The Dark Knight", "Christopher Nolan", "English", "2008", "152", ["Action", "Crime"]),
  new Movie("Terminator 2: Judgment Day", "James Cameron", "English", "1991", "137", ["Action", "Sci-Fi"]),
  new Movie("Gladiator", "Ridley Scott", "English", "2000", "155", ["Action", "Drama"]),
  new Movie("The Matrix", "The Wachowskis", "English", "1999", "136", ["Action", "Sci-Fi"]),
  new Movie("Inception", "Christopher Nolan", "English", "2010", "148", ["Action", "Sci-Fi"]),
  new Movie("The Avengers", "Joss Whedon", "English", "2012", "143", ["Action", "Adventure"]),
  new Movie("Lethal Weapon", "Richard Donner", "English", "1987", "110", ["Action", "Comedy"]),
  new Movie("John Wick", "Chad Stahelski", "English", "2014", "101", ["Action", "Thriller"])
];