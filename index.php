<?php
if(!$_POST) {
    // afficher le formulaire
    require 'Formulaire/form.php'; 
}
else
{
    // afficher le formulaire
    require 'Formulaire/validation.php'; 
}