<?php

require_once __DIR__.'/producer.php';
class Movie
{

    // Proprietà obbligatorie della classe Movie
    public $title;             // Titolo del film
    public $director;          // Regista del film
    public $lenguage;          // Lingua del film
    public $production_date;   // Data di produzione del film
    public $duration;          // Durata del film in minuti
    public $genres;            // Generi associati al film (array)
    


    //Costruttore della classe Movie. 
    function __construct($title, $director, $lenguage, $production_date, $duration_in_minute, $genres, )
    {
        // Inizializzazione delle proprietà della classe
        $this->title = $title;
        $this->director = $director;
        $this->lenguage = $lenguage;
        $this->production_date = $production_date;
        $this->duration = $duration_in_minute;
        $this->genres = $genres;
    
    }


    // Metodo per ottenere la durata del film in formato ore e minuti.
    public function getHour()
    {
        // Arrotonda la durata del film per eccesso in ore
        $hours = floor($this->duration / 60);
        // Calcola i minuti rimanenti
        $minute = $this->duration - ($hours * 60);
        // Restituisce la durata nel formato "ore:minuti"
        return $hours . ':' . $minute;
    }


    // Metodo per elencare i generi del film in formato HTML.
    public function listgenres()
    {
        // Inizializza l'elenco HTML
        $list = "<ul>";
        // Cicla attraverso i generi e li aggiunge all'elenco HTML
        foreach ($this->genres as $genre) {
            $list .= "<li>$genre</li>";
        }
        // Chiude l'elenco HTML
        $list .= "</ul>";
        // Restituisce l'elenco HTML
        return $list;
    }
}