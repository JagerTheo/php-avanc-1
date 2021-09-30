<?php
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_phone = $_POST['user_phone'];
    $user_liste = $_POST['user_liste'];
    $user_message = $_POST['user_message'];
    $user_email = $_POST['user_email'];

    echo "Merci $user_surname $user_name de nous avoir contacté à propos de $user_liste.

    Un de nos conseiller vous contactera soit à l’adresse $user_email ou par téléphone au $user_phone dans les plus brefs délais pour traiter votre demande : 
    
    $user_message"
    ;
