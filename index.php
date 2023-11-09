<?php
include_once 'vendor/autoload.php';

use App\RequestHandler;

RequestHandler::handle($_SERVER);
/**
 * sessions (id)
 * @todo penser a détruire la session sur logout
 * table intermediaires user_post et post_comments
 * t. faire une classe php ?
 * quand un utilisateur a besoin d'être connecté, rediriger vers la page du formulaire de connexion
 * insérer les nullables dans table user
 * lors d'édition rediriger sur la liste des posts avec notifs
 *
 * style (pas fait)
 */


