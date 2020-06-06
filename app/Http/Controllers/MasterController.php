<?php
/**
 * Created by PhpStorm.
 * User: jochemdewit
 * Date: 2020-05-27
 * Time: 12:36
 */

namespace App\Http\Controllers;


class MasterController
{
    public function showHome(){
        $title = "Home";
        $page = str_replace(' ', '', strtolower($title));
        $active = $page;
        return view('home', ['page' => $title, 'css' => $page, 'active' => $active]);
    }

    public function showProjects(){
        $title = "Projecten";
        $page = str_replace(' ', '', strtolower($title));
        $active = $page;

        // Pad naar JSON file opslaan in variabele
        $jsonFile = database_path('modals.json');

        // Checken of bestand bestaat
        if(!file_exists($jsonFile)) {
            return 'JSON file niet gevonden: ' . $jsonFile;
        }

        // Inhoud inlezen
        $json = file_get_contents($jsonFile);

        // Terug zetten naar array in PHP
        $modalData = json_decode($json);


        return view('projects', ['page' => $title, 'css' => $page, 'active' => $active, 'modals' => $modalData]);
    }
    public function showAboutMe(){
        $title = "Over mij";
        $page = str_replace(' ', '', strtolower($title));
        $active = $page;
        return view('aboutMe', ['page' => $title, 'css' => $page, 'active' => $active]);
    }
    public function showContact(){
        $title = "Contact";
        $page = str_replace(' ', '', strtolower($title));
        $active = $page;
        return view('contact', ['page' => $title, 'css' => $page, 'active' => $active]);
    }

}
