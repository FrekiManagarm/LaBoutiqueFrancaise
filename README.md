# LaBoutiqueFrancaise
E-commerce pour projet Symfony

# N'oubliez pas de lire ce document au préalable

## Bien installer le projet et les prérequis

Attention, j'ai fait un trop gros commit distant vous devez donc regarder le projet à partir de la branche master.

## Les prérequis

1. Vous devez avoir MAMP, XAMP ou LAMP pour pouvoir lancer le serveur MySQL ainsi que le serveur PHP pour faire fonctionner le site
2. Avoir maximum la version PHP 7.4 (désolé sinon ça bug, faites gaffe à la v8 j'ai déjà essayé).      :)
3. Avoir composer sur son PC. Si vous ne l'avez pas je vous renvoie vers l'installation de composer [ici](https://getcomposer.org/)
4. Et enfin avoir peut être symfony-cli c'est plus simple pour les commandes


 
## Première étape

1. Faire un coup de : `composer install`
2. Une fois toutes les dépendances installées, il faut vous rendre dans le fichier `.env` afin de modifier les variable d'environnement de votre base de données.
Pour ça, il suffit de vous rendre en bas du fichier et d'y renseigner le nom de base de votre choix.
3. `DATABASE_URL="mysql://root:root@127.0.0.1:8889/my_ecommerce?serverVersion=5.7"`, une fois votre phpMyAdmin démarré il suffit juste de renseigner le bon port de votre mysql (ne faites pas comme moi, normalement c'est 127.0.0.1:3306) et renseigner le nom de la base de données de votre choix juste après ainsi que les identifiants vous permettant de rentrer dans cette dernière.
4. Si elle n'a pas été créé au préalable dans phpMyAdmin, vous pouvez faire le "**mode flemmard**" comme moi et taper en ligne de commande `symfony console doctrine:database:create`. 
Ou plus rapide faites un `symfony console d:d:c`.

## Deuxième étape 

Une fois la database créée faites un `symfony console make:migration`. Cette commande vous permettra de préparer les migrations qui s'effectuerons dans votre base de données.
Et ainsi faire un `symfony console d:m:m` ou si vous préférez un `symfony console doctrine:migrations:migrate`. Cette commande vous permettra de faire, comme il se doit les migrations vers votre base de données.

## Troisième étape

Il vous suffit pour finir de lancer la commande `symfony serve -d` et vous rendre à l'adresse `localhost:8000` sur votre navigateur. Et le tour est joué.


# Etapes annexe

## Etape annexe 1

Pour bénéficier de l'accès **ADMINISTRATEUR** du site il vous suffit de vous rendre dans la base de données sur phpMyAdmin, de vous rendre dans la table `user` et d'y éditer votre ligne de votre compte et renseigner dans le champ `roles` la chaine de caractères suivante `"ROLE_ADMIN"` entre les crochets. 
Il suffit pour finir de raffraichir la page et de vous reconnecter au site avec les mêmes identifiants.

## Etape annexe 2

Pour pouvez ainsi vous rendre sur l'url en tapant `localhost:8000/admin` et renseigner ainsi dans la partie `Categories` les catégories de votre choix. 
Enfin dans la partie `Products` renseigner les produits que vous souhaitez mettre en avant sur ce site.








# Faites vous plaisir ;)



