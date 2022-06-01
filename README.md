# test_uballers

## Comment utiliser ?

1. Commencer par installer un serveur local
2. Télécharger le projet
3. Ouvrir le fichier function.php
4. Modifier dans la fonction connectSQL() les paramètre suivants:
  1. $DBhost en mettant le nom de votre serveur local
  2. $DBlog en mettant le login pour vous connecter à votre bdd (par défaut laisser root)
  3. $DBpass en mettant le mot de passe pour vous connecter à votre utilisateur (par défaut laisser vide)
5. Ouvrir dans son navigateur l'adresse suivante : http://localhost/Test%20Uballers/index.html
6. Utiliser le site normalement

## Dificultés rencontrées 

* La partie CSS du header
  * Je n'ai pas réussi à la mettre en forme correctement
  * J'ai essayé avec un display grid mais je n'ai pas réussi
* La partie CSS du texte de la date de naissance
  * J'ai essayé d'afficher un texte quand on passe le curseur dessus
  * Je n'ai pas réussi car je n'arrivais pas à modifier la visibilité avec JavaScript

## Temps passé dessus (approximations)

Total : 6h45
HTML : 45 min
CSS : 3h (dont 1h au moins où j'étais bloqué pour le header
PHP : 2h (dont 30 min de SQL)
JS : 1h (infructueuse puisque je n'ai pas réussi à implémenter ce que je voulais)
