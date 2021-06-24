<?php

    //Début home
    define('TXT_TITRE1_HOME', 'Bienvenue');
    define('TXT_TITRE2_HOME', 'sur le site CubeTech');
    define('TXT_BT4_HOME', 'Recherche');
    if($statut=="1"){
      define('TXT_BT1_HOME', 'Accéder au back office');
      define('TXT_BT2_HOME', 'Test');
      define('TXT_BT3_HOME', 'Déconnexion');

    }
    else if($statut=="2"){
      define('TXT_BT1_HOME', 'Lancer un test');
      define('TXT_BT2_HOME', 'Ajouter un test');
      define('TXT_BT3_HOME', 'Déconnexion');
    }
    else{
      define('TXT_BT1_HOME', 'Prendre un rendez-vous');
      define('TXT_BT2_HOME', 'Accèder à mes résultats');
      define('TXT_BT3_HOME', 'Déconnexion');

    }



    //Fin home

	//Début contact

    define('TXT_SELECT_CONTACT', '--Choisissez une option--');
    define('TXT_SELECT1_CONTACT', 'Rendez-vous');
    define('TXT_SELECT2_CONTACT', 'Bug');
    define('TXT_SELECT3_CONTACT', 'Suggestion');
    define('TXT_TEXT_CONTACT', 'Votre message:');
    define('TXT_BT1_CONTACT', 'Valider');


    //Fin contact


    //Début backoffice

    define('TXT_TITRE1_BACK', 'Bienvenue');
    define('TXT_TITRE2_BACK', 'sur le backoffice de CubeTech');
    define('TXT_TEXT1_BACK', 'Gestion des utilisateurs');
    define('TXT_BT1_BACK', 'Afficher les utilisateurs');
    define('TXT_BT2_BACK', 'Enregistrer un nouvel utilisateur ');
    define('TXT_TEXT2_BACK', 'Gestion des tickets');
    define('TXT_BT3_BACK', 'Afficher les tickets');
    define('TXT_TEXT3_BACK', 'Gestion des cartes');
    define('TXT_BT4_BACK', 'Afficher les cartes');
    define('TXT_BT5_BACK', 'Créer une nouvelle carte');
    define('TXT_TEXT4_BACK', 'Gestion de la FAQ');
    define('TXT_BT6_BACK', 'Gérer la FAQ');
    define('TXT_TEXT5_BACK', 'Gestion des CGU');
    define('TXT_BT7_BACK', 'Gérer les CGU');
    define('TXT_BT8_BACK', 'Gérer le Forum');
    define('TXT_TEXT6_BACK', 'Gestion du Forum');
    define('TXT_BT9_BACK', 'Déconnexion');
    define('TXT_BT10_BACK', 'Déconnexion');
    define('TXT_TEXT7_BACK', 'Gestion des tests');
    define('TXT_BT11_BACK', 'Afficher les tests');
    define('TXT_BT12_BACK', 'Ajouter un test');

    //Fin backoffice


    //Début resultats

    define('TXT_TEXT1_RESULTS', 'Selectionnez les résultats à afficher');
    define('TXT_TEXT2_RESULTS', '---Selectionner---');
    define('TXT_TEXT3_RESULTS', 'Tonalité');
    define('TXT_TEXT4_RESULTS', 'Température');
    define('TXT_TEXT5_RESULTS', 'Réaction à un son');
    define('TXT_TEXT6_RESULTS', 'Réaction à une led');


    //Fin resultats


    //Début adminuser

    define('TXT_TITRE_AU', 'Gestion des utilisateurs');
    define('TXT_TD1_AU', 'ID');
    define('TXT_TD2_AU', 'Login');
    define('TXT_TD3_AU', 'Statut');
    define('TXT_TD4_AU', 'Prenom');
    define('TXT_TD5_AU', 'Nom');
    define('TXT_TD6_AU', 'Modifier l\'utilisateur');
    define('TXT_TD7_AU', 'Supprimer l\'utilisateur');
    define('TXT_BT1_AU', 'Modifier');
    define('TXT_BT2_AU', 'Supprimer');

    //Fin adminuser


    //Début register

    define('TXT_TITRE_RE', 'Inscription');
    define('TXT_TITRE2_RE', 'Veuillez remplir le formulaire');
    define('TXT_TD1_RE', 'Nom :');
    define('TXT_TD2_RE', 'Prenom :');
    define('TXT_TD3_RE', 'Date de naissance :');
    define('TXT_SELECT_RE', 'Niveau d\'habilitation :');
    define('TXT_SELECT1_RE', '--Choose an option--');
    define('TXT_SELECT2_RE', 'Admin');
    define('TXT_SELECT3_RE', 'RH');
    define('TXT_SELECT4_RE', 'Militaire');
    define('TXT_TD4_RE', 'Grade :');
    define('TXT_TD5_RE', 'Nationalité :');
    define('TXT_TD6_RE', 'Caserne :');
    define('TXT_TD7_RE', 'Corps :');
    define('TXT_TD8_RE', 'Matricule :');
    define('TXT_TD9_RE', 'Mail :');
    define('TXT_TD10_RE', 'Mot de passe :');
    define('TXT_TD11_RE', 'Confirmer le mot de passe :');
    define('TXT_TEXT1_RE', 'Envoyer');
    define('TXT_BT1_RE', 'Envoyer');


    //Fin register


    //Début register2

    define('TXT_TITRE_RE2', 'Enregistrement fini.');
    define('TXT_TEXT1_RE2', 'Vous vous êtes correctement enregistré sur la plateforme.');
    define('TXT_TEXT2_RE2', 'Vous trouverez ci-dessous votre login, il vous servira à vous connecter à la plateforme par la suite, retenez le bien.');
    define('TXT_TEXT3_RE2', 'Retour à la page de connexion');

    //Fin register2


    //Début SAV

    define('TXT_TITRE1_SAV', 'Rendez-vous');
    define('TXT_TITRE2_SAV', 'Bug');
    define('TXT_TITRE3_SAV', 'Suggestion');
    define('TXT_TD1_SAV', 'IdUser');
    define('TXT_TD2_SAV', 'Date');
    define('TXT_TD3_SAV', 'Contenu');
    define('TXT_TD4_SAV', 'Contact');
    define('TXT_TD5_SAV', 'Valider');

    //Fin SAV


    //Début Card

    define('TXT_TITRE1_CAR', 'Modifier les cartes');
    define('TXT_TD1_CAR', 'ID');
    define('TXT_TD2_CAR', 'Statut');
    define('TXT_TD3_CAR', 'Date mise en service');
    define('TXT_TD4_CAR', 'Modifier');
    define('TXT_TD5_CAR', 'Supprimer');
    //Fin Card


    //Début Card2

    define('TXT_TITRE1_CAR2', 'Ajouter une carte de test');
    define('TXT_TEXT1_CAR2', 'Etat de la carte:');
    define('TXT_SELECT_CAR2', '--Choisissez une option--');
    define('TXT_SELECT1_CAR2', 'Déployée');
    define('TXT_SELECT2_CAR2', 'En réparation');
    define('TXT_SELECT3_CAR2', 'En attente de déploiment');
    define('TXT_TEXT2_CAR2', 'Selectionnez la caserne');
    define('TXT_TEXT3_CAR2', 'Entrez la date de sortie d\'usine de la carte');

    //Fin Card2


    //Début gestion FAQ

    define('TXT_TITRE1_FAQ', 'Gestion de la FAQ');
    define('TXT_TD1_FAQ', 'Titre de la question');
    define('TXT_TD2_FAQ', 'Modifier la question');
    define('TXT_TD3_FAQ', 'Supprimer la question');
    define('TXT_BT1_FAQ', 'Modifier');
    define('TXT_BT2_FAQ', 'Supprimer');
    define('TXT_BT3_FAQ', 'Ajouter une question');

    //Fin gestion FAQ


    //Début modification FAQ

    define('TXT_TEXT1_FAQ', 'Titre de la question');
    define('TXT_TEXT2_FAQ', 'Contenu de la réponse');
    define('TXT_BT4_FAQ', 'Modifier');

    //Fin modification FAQ


    //Début ajout FAQ

    define('TXT_TEXT3_FAQ', 'Titre de la question');
    define('TXT_TEXT4_FAQ', 'Contenu de la réponse');
    define('TXT_BT5_FAQ', 'Ajouter');

    //Fin ajout FAQ


    //Début gestion CGU

    define('TXT_TITRE1_CGU', 'Gestion des CGU');
    define('TXT_TD1_CGU', 'Titre de la partie');
    define('TXT_TD2_CGU', 'Modifier la partie');
    define('TXT_TD3_CGU', 'Supprimer la partie');
    define('TXT_BT1_CGU', 'Modifier');
    define('TXT_BT2_CGU', 'Supprimer');
    define('TXT_BT3_CGU', 'Ajouter une CGU');

    //Fin gestion CGU


    //Début modification CGU

    define('TXT_TEXT1_CGU', 'Titre de la question');
    define('TXT_TEXT2_CGU', 'Contenu de la réponse');
    define('TXT_BT4_CGU', 'Modifier');

    //Fin modification CGU


    //Début ajout CGU

    define('TXT_TEXT3_CGU', 'Titre de la question');
    define('TXT_TEXT4_CGU', 'Contenu de la réponse');
    define('TXT_BT5_CGU', 'Ajouter');

    //Fin ajout CGU

    //Début form Recherche

    define('TXT_LBL1_RECH', 'Identifiant');
    define('TXT_LBL2_RECH', 'Nom');
    define('TXT_LBL3_RECH', 'Prénom');
    define('TXT_LBL4_RECH', 'Date');
    define('TXT_LBL5_RECH', 'Caserne');
    define('TXT_LBL6_RECH', 'Nationalité');
    define('TXT_LBL7_RECH', 'Corps');
    define('TXT_LBL8_RECH', 'Statut');
    define('TXT_LBL9_RECH', 'Matricule');
    define('TXT_LBL10_RECH', 'Login');

    //Fin form Recherche

    //Début gestion test

    define('TXT_TITRE1_TEST', 'Gestion des tests');
    define('TXT_TD1_TEST', 'Date');
    define('TXT_TD2_TEST', 'Heure');
    define('TXT_TD3_TEST', 'Patient');
    define('TXT_TD4_TEST', 'Rh');
    define('TXT_TD5_TEST', 'Modifier');
    define('TXT_TD6_TEST', 'Supprimer');

    //Fin gestion test


    //Début ajout test

    define('TXT_TD1_TEST2', 'Date');
    define('TXT_TD2_TEST2', 'Heure');
    define('TXT_TD3_TEST2', 'idRh');
    define('TXT_TD4_TEST2', 'idUser');

    //Fin  ajout test


?>
