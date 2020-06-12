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
        $topProjectsFile = database_path('top-projects.json');
        $otherProjectsFile = database_path('other-projects.json');

        // Checken of bestand bestaat
        if(!file_exists($topProjectsFile)) {
            return 'JSON file niet gevonden: ' . $topProjectsFile;
        }
        if(!file_exists($otherProjectsFile)) {
            return 'JSON file niet gevonden: ' . $topProjectsFile;
        }

        // Inhoud inlezen
        $topProjectsJson = file_get_contents($topProjectsFile);
        $otherProjectsJson = file_get_contents($otherProjectsFile);

        // Terug zetten naar array in PHP
        $topProjectsModalData = json_decode($topProjectsJson);
        $otherProjectsModalData = json_decode($otherProjectsJson);


        return view('projects', ['page' => $title, 'css' => $page, 'active' => $active, 'topProjects' => $topProjectsModalData, 'otherProjects' => $otherProjectsModalData]);
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
