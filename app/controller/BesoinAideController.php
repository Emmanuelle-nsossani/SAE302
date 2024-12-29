<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class BesoinAideController extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageBesoinAide()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => "Besoin d'aide",
            'css' => 'besoin-aide.css',
            'fontAwesome' => true,
            'scripts' => ['carte.js'],
            'view' => 'app/view/besoin-aide.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}