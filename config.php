<?php

$host = "localhost";
$dbname = "bymoze";
$dbuser = "root";
$dbpass = "";

$dsn = "mysql:host=$host;dbname=;";

$conn = new PDO ("$dsn , $dbuser , $dbpass");



            // Nettoyer les entrées utilisateurs
    /**
     * Fonction qui nettoie les entrées utilisateur pour éviter les
     * espaces inutiles en extrémité de chaîne et les failles de type XSS
     * @param string $input  Entrée utilisateur a nettoyer
     * @return string L'entrée utilisateur nettoyée.
     */
    function sanitize(string $input): string {

        if ($input == null) { 
            return "";
        }

        $output = trim($input);
        $output = strip_tags($output);
        //$output = htmlspecialchars($output);

        return $output;
    }
