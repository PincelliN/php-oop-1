<?php


class Movie{

   /* propietà obbligatorie */ 
    public $title;
    public $director;
    public $lenguage;
    public $production_date;
    public $duration;

   /* propietà optionali */
    public $genre;
    public $cast;

    /* passando le propietà al costruttore rendo obbligatorio questi dati */
    function __construct($title,$director,$lenguage,$production_date,$duration)
    {
        $this -> title = $title;
        $this -> director = $director;
        $this -> lenguage = $lenguage;
        $this -> production_date = $production_date;
        $this -> duration = $duration;
  
    }


}