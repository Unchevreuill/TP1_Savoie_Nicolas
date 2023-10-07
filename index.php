<?php

function validerMDP($MDP) {
    // Vérifier la longueur du mot de passe
    if (strlen($MDP) < 6 || strlen($MDP) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // attribution de la variable salt
    $salt = "PetitC@nard";

    
    $mot_de_passe_avec_salt = $MDP . $salt;

    // Criptage du mdp 
    $mot_de_passe_chiffre = hash('sha256', $mot_de_passe_avec_salt);

    // 
    $message = "Mot de passe validé avec succès !\n";
    $message .= "Salt : $salt\n";
    $message .= "Mot de passe chiffré : $mot_de_passe_chiffre";

    return $message;
}

// Exemple d'utilisation de la fonction
$mot_de_passe_utilisateur = "Canard123";
$resultat = validerMDP($mot_de_passe_utilisateur);
echo $resultat;
?>