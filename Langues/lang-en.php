<?php

    //Début home
    define('TXT_TITRE1_HOME', 'Welcome');
    define('TXT_TITRE2_HOME', 'on CubeTech');
    define('TXT_BT4_HOME', 'Research');
    if($statut=="1"){
      define('TXT_BT1_HOME', 'Go to the back office');
      define('TXT_BT2_HOME', 'Test');
      define('TXT_BT3_HOME', 'Logout');

    }
    else if($statut=="2"){
      define('TXT_BT1_HOME', 'Start a test');
      define('TXT_BT2_HOME', 'Add a test');
      define('TXT_BT3_HOME', 'Logout');
    }
    else{
      define('TXT_BT1_HOME', 'Schedule an appointment');
      define('TXT_BT2_HOME', 'See my results');
      define('TXT_BT3_HOME', 'Logout');

    }




    //Fin home

   //Début contact

    define('TXT_SELECT_CONTACT', '--Choose an option--');
    define('TXT_SELECT1_CONTACT', 'Appointment');
    define('TXT_SELECT2_CONTACT', 'Bug');
    define('TXT_SELECT3_CONTACT', 'Suggestion');
    define('TXT_TEXT_CONTACT', 'Your message:');
    define('TXT_BT1_CONTACT', 'Submit');


    //Fin contact


    //Début backoffice

    define('TXT_TITRE1_BACK', 'Welcome');
    define('TXT_TITRE2_BACK', 'on Cubetech s backoffice');
    define('TXT_TEXT1_BACK', 'User Management');
    define('TXT_BT1_BACK', 'Show users');
    define('TXT_BT2_BACK', 'Register a new user');
    define('TXT_TEXT2_BACK', 'Ticket management');
    define('TXT_BT3_BACK', 'Show tickets');
    define('TXT_TEXT3_BACK', 'Card management');
    define('TXT_BT4_BACK', 'Show cards');
    define('TXT_BT5_BACK', 'Create a new card');
    define('TXT_TEXT4_BACK', 'FAQ management');
    define('TXT_BT6_BACK', 'FAQ management');
    define('TXT_TEXT5_BACK', 'CGU management');
    define('TXT_BT7_BACK', 'CGU management');
    define('TXT_BT8_BACK', 'Forum management');
    define('TXT_TEXT6_BACK', 'Forum management');
    define('TXT_BT9_BACK', 'Logout');
    define('TXT_BT10_BACK', 'Logout');
    define('TXT_TEXT7_BACK', 'Test management');
    define('TXT_BT11_BACK', 'Show test');
    define('TXT_BT12_BACK', 'Add test');

    //Fin backoffice



    //Début resultats

    define('TXT_TEXT1_RESULTS', 'Select the results to display');
    define('TXT_TEXT2_RESULTS', '---Select---');
    define('TXT_TEXT3_RESULTS', 'Temperature');
    define('TXT_TEXT4_RESULTS', 'Heartbeat');

    //Fin resultats



    //Début adminuser

    define('TXT_TITRE_AU', 'Users management');
    define('TXT_TD1_AU', 'ID');
    define('TXT_TD2_AU', 'Login');
    define('TXT_TD3_AU', 'Status');
    define('TXT_TD4_AU', 'First name');
    define('TXT_TD5_AU', 'Last name');
    define('TXT_TD6_AU', 'Edit User');
    define('TXT_TD7_AU', 'Delete user');
    define('TXT_BT1_AU', 'Edit');
    define('TXT_BT2_AU', 'Delete');

    //Fin adminuser


    //Début register

    define('TXT_TITRE_RE', 'Registration');
    define('TXT_TITRE2_RE', 'Please complete the form');
    define('TXT_TD1_RE', 'Last name :');
    define('TXT_TD2_RE', 'First name :');
    define('TXT_TD3_RE', 'Date of Birth :');
    define('TXT_SELECT_RE', 'Authorization level :');
    define('TXT_SELECT1_RE', '--Choose an option--');
    define('TXT_SELECT2_RE', 'Administrator');
    define('TXT_SELECT3_RE', 'RH');
    define('TXT_SELECT4_RE', 'Military');
    define('TXT_TD4_RE', 'Grade :');
    define('TXT_TD5_RE', 'Nationality :');
    define('TXT_TD6_RE', 'Barracks :');
    define('TXT_TD7_RE', 'Army Corps :');
    define('TXT_TD8_RE', 'Registration number :');
    define('TXT_TD9_RE', 'Mail :');
    define('TXT_TD10_RE', 'Password :');
    define('TXT_TD11_RE', 'Confirm password :');
    define('TXT_TEXT1_RE', 'Submit');
    define('TXT_BT1_RE', 'Submit');

    //Fin register


    //Début register2

    define('TXT_TITRE_RE2', 'Registration finished.');
    define('TXT_TEXT1_RE2', 'You have successfully registered on the platform.');
    define('TXT_TEXT2_RE2', 'You will find your login below, it will be used to connect to the platform afterwards, remember it.');
    define('TXT_TEXT3_RE2', 'Back to the login page');

    //Fin register2


    //Début SAV

    define('TXT_TITRE1_SAV', 'Appointment');
    define('TXT_TITRE2_SAV', 'Bug');
    define('TXT_TITRE3_SAV', 'Suggestion');
    define('TXT_TD1_SAV', 'IdUser');
    define('TXT_TD2_SAV', 'Date');
    define('TXT_TD3_SAV', 'Content');
    define('TXT_TD4_SAV', 'Contact');
    define('TXT_TD5_SAV', 'Submit');

    //Fin SAV


    //Début Card

    define('TXT_TITRE1_CAR', 'Edit cards');
    define('TXT_TD1_CAR', 'ID');
    define('TXT_TD2_CAR', 'Status');
    define('TXT_TD3_CAR', 'Date commissioned');
    define('TXT_TD4_CAR', 'Update');
    define('TXT_TD5_CAR', 'Delete');

    //Fin Card


    //Début Card2

    define('TXT_TITRE1_CAR2', 'Add a test card');
    define('TXT_TEXT1_CAR2', 'Card status:');
    define('TXT_SELECT_CAR2', '--Choose an option--');
    define('TXT_SELECT1_CAR2', 'Deployed');
    define('TXT_SELECT2_CAR2', 'Under reparation');
    define('TXT_SELECT3_CAR2', 'Awaiting deployment');
    define('TXT_TEXT2_CAR2', 'Select Barrack');
    define('TXT_TEXT3_CAR2', 'Enter the date the card left the factory');

    //Fin Card2


    //Début gestion FAQ

    define('TXT_TITRE1_FAQ', 'FAQ management');
    define('TXT_TD1_FAQ', 'Question title');
    define('TXT_TD2_FAQ', 'Edit question');
    define('TXT_TD3_FAQ', 'Delete the question');
    define('TXT_BT1_FAQ', 'Edit');
    define('TXT_BT2_FAQ', 'Delete');
    define('TXT_BT3_FAQ', 'Add a question');

    //Fin gestion FAQ


    //Début modification FAQ

    define('TXT_TEXT1_FAQ', 'Question title');
    define('TXT_TEXT2_FAQ', 'Content of the response');
    define('TXT_BT4_FAQ', 'Edit');

    //Fin modification FAQ


    //Début modification FAQ

    define('TXT_TEXT3_FAQ', 'Question title');
    define('TXT_TEXT4_FAQ', 'Content of the response');
    define('TXT_BT5_FAQ', 'Add');

    //Fin modification FAQ


    //Début gestion CGU

    define('TXT_TITRE1_CGU', 'Management of GCU');
    define('TXT_TD1_CGU', 'Title of the part');
    define('TXT_TD2_CGU', 'Edit the part');
    define('TXT_TD3_CGU', 'Delete the part');
    define('TXT_BT1_CGU', 'Update');
    define('TXT_BT2_CGU', 'Delete');
    define('TXT_BT3_CGU', 'Add GCU');

    //Fin gestion CGU


    //Début modification CGU

    define('TXT_TEXT1_CGU', 'Question title');
    define('TXT_TEXT2_CGU', 'Content of the response');
    define('TXT_BT4_CGU', 'Edit');

    //Fin modification CGU


    //Début gestion test

    define('TXT_TITRE1_TEST', 'Test management');
    define('TXT_TD1_TEST', 'Date');
    define('TXT_TD2_TEST', 'Hour');
    define('TXT_TD3_TEST', 'Patient');
    define('TXT_TD4_TEST', 'Hr');
    define('TXT_TD5_TEST', 'Edit');
    define('TXT_TD6_TEST', 'Delete');

    //Fin gestion test


    //Début ajout test

    define('TXT_TD1_TEST2', 'Date');
    define('TXT_TD2_TEST2', 'Hour');
    define('TXT_TD3_TEST2', 'idRh');
    define('TXT_TD4_TEST2', 'idUser');

    //Fin  ajout test

?>
