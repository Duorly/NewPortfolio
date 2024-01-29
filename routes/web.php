<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = [
        [
            "title" => "Teach Lead / Chef de projet",
            "company" => "Nanocreatives",
            "period" => "Octobre 2023 - Aujourd'hui",
            "summary" => "Mon rôle dans l'entreprise implique de diriger une équipe de développeurs et de spécialistes
            techniques pour mener à bien des projets complexes.",
            "description" => "En tant que Tech Lead / Chef de Projet, mon rôle dans l'entreprise implique de diriger une
            équipe de développeurs et de spécialistes techniques pour mener à bien des projets complexes. Mes
            responsabilités incluent le leadership technique, la gestion de projets, la collaboration interfonctionnelle,
            la résolution de problèmes techniques et le développement de l'équipe. Les exigences pour ce poste
            comprennent une solide expérience en développement logiciel, une expertise en gestion de projet, des
            compétences de leadership et une compréhension approfondie des tendances technologiques. Mon objectif est de
            garantir le succès des projets tout en assurant la satisfaction de l'équipe et des parties prenantes.",
        ],

        [
            "title" => "Développeur Full Stack",
            "company" => "GESTOO",
            "period" => "Novembre 2021 - Aujourd'hui",
            "location" => "Bordeaux, Nouvelle-Aquitaine, France",
            "summary" => "Assistant technique centré sur le support client et le développement de logiciels, avec une expertise particulière en Angular et en développement front-end.",
            "description" => "Assistant et support technique client, centré sur les logiciels OPAL TPE et OPAL BAT. Contribution à l'architecture de projets, mise en place d'outils CI/CD, développement de microservices REST, et coordination dans le cycle de vie agile du projet."
        ],
        [
            "title" => "IT Consultant",
            "company" => "LALLA BUSINESS",
            "period" => "Février 2021 - Janvier 2024",
            "location" => "Brazzaville, République du Congo",
            "summary" => "Chef de projet technique spécialisé dans le développement de solutions numériques pour la transformation numérique, avec un accent sur les plateformes de transfert de fonds.",
            "description" => "Chef de projet technique et développeur, direction d'une équipe pour le développement de solutions techniques pour la transformation numérique. Conception et mise en place de la plateforme de transfert de fonds LALLA TRANSFERT."
        ],
        [
            "title" => "Consultant Développeur",
            "company" => "PNUD",
            "period" => "Décembre 2023 - 1 mois",
            "location" => "Brazzaville, République du Congo",
            "summary" => "Rôle de conseil et de développement dans l'implémentation de systèmes d'information pour la gestion électronique des laboratoires dans le secteur de la santé.",
            "description" => "Accompagnement du ministère de la santé et de la population dans la mise en œuvre du Système d’Information de gestion électronique des Laboratoires (e-LIS)."
        ],
        [
            "title" => "Consultant en informatique",
            "company" => "UNFPA",
            "period" => "Septembre 2023 - Novembre 2023",
            "location" => "Brazzaville, République du Congo",
            "summary" => "Consultant en systèmes d'information, spécialisé dans la gestion de parc informatique et la formation des utilisateurs.",
            "description" => "Mission d'accompagnement du Ministère de la Santé et de la Population dans l'inventaire du parc informatique avec GLPI. Tâches incluant l'installation et la mise en ligne de la plateforme GLPI, la formation des agents et la collecte des données."
        ],
        [
            "title" => "Développeur Frontend",
            "company" => "Noki Noki services",
            "period" => "Mars 2023 - Août 2023",
            "location" => "Brazzaville, République du Congo",
            "summary" => "Développeur web frontend expérimenté dans la création d'interfaces utilisateurs pour des applications web, en utilisant des technologies modernes comme HTML, CSS et JavaScript.",
            "description" => "Conception et développement des interfaces utilisateur pour l'application Confort Car, utilisation de technologies web modernes, collaboration étroite avec les équipes de conception et de développement."
        ]];
    // Format to object
    $jobs = json_decode(json_encode($jobs));

    return view('welcome', compact('jobs'));
});
