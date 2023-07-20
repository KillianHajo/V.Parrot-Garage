# V.Parrot-Garage
# Guide d'exécution en local de votre site web avec WampServer
Ce fichier README.md vous guidera étape par étape pour exécuter votre site web en local en utilisant WampServer. Assurez-vous d'avoir déjà installé WampServer sur votre ordinateur avant de suivre ces étapes.

## Étape 1 : Installation de WampServer
Si vous n'avez pas encore installé WampServer, suivez ces étapes :

Téléchargez le programme d'installation de WampServer à partir du site officiel : WampServer.
Lancez le programme d'installation et suivez les instructions à l'écran pour installer WampServer sur votre système.

## Étape 2 : Préparation des fichiers du site web
Assurez-vous que tous les fichiers de votre site web (HTML, CSS, JavaScript, etc.) sont placés dans un répertoire accessible sur votre ordinateur. Vous pouvez créer un nouveau répertoire dans le répertoire "www" de WampServer pour votre site web.

## Étape 3 : Démarrage de WampServer
Lancez WampServer en cliquant sur son icône depuis le bureau ou le menu de démarrage.
Vérifiez que les services Apache et MySQL sont en cours d'exécution. Vous verrez des icônes vertes dans la barre des tâches pour indiquer leur statut.

## Étape 4 : Configuration de la base de données (si nécessaire)
Si votre site web nécessite une base de données MySQL, suivez ces étapes :

Cliquez sur l'icône WampServer dans la barre des tâches pour ouvrir le menu.
Sélectionnez "phpMyAdmin" pour accéder à l'interface de gestion de la base de données.
Créez une nouvelle base de données et importez vos tables si nécessaire.

## Étape 5 : Accéder à votre site web
Ouvrez un navigateur web (Google Chrome, Mozilla Firefox, etc.).
Tapez l'adresse suivante dans la barre d'adresse : http://localhost/NOM_DU_REPERTOIRE_DE_VOTRE_SITE.
Assurez-vous de remplacer "NOM_DU_REPERTOIRE_DE_VOTRE_SITE" par le nom du répertoire que vous avez créé dans le répertoire "www" de WampServer.

## Étape 6 : Visualisation de votre site web
Félicitations ! Vous devriez maintenant pouvoir visualiser votre site web en local via WampServer. Naviguez à travers les différentes pages pour vérifier que tout fonctionne correctement.

### Remarques importantes :
Assurez-vous que WampServer est en cours d'exécution chaque fois que vous souhaitez accéder à votre site web en local.
Vérifiez que les chemins des fichiers (liens vers des fichiers CSS, images, etc.) sont corrects pour une exécution en local.
En cas de problèmes, vérifiez les fichiers de journalisation (logs) de WampServer pour identifier d'éventuelles erreurs.
Vous avez maintenant un environnement de développement en local avec WampServer pour tester et améliorer votre site web sans affecter la version en ligne. Bon développement !

## Explication du diagramme :

#### L'utilisateur accède au site web et remplit les champs de connexion avec son nom d'utilisateur et son mot de passe.
#### Le site web envoie une requête de connexion au serveur en utilisant la méthode POST. Les identifiants sont inclus dans le corps de la requête.
#### Le serveur vérifie les identifiants en interrogeant la base de données pour trouver une correspondance.
#### La base de données effectue la vérification et renvoie le résultat au serveur (identifiants valides ou invalides).
#### Le serveur reçoit le résultat de la vérification et envoie une réponse au site web avec le résultat (identifiants valides ou message d'erreur).
#### Si les identifiants sont valides, le serveur redirige l'utilisateur vers la page d'accueil du site web.
#### Si les identifiants sont invalides, le serveur affiche un message d'erreur sur la page de connexion pour informer l'utilisateur que les identifiants sont incorrects.
#### Ceci est un diagramme de séquence de base pour la connexion à votre site web. Selon votre application spécifique, il pourrait y avoir d'autres fonctionnalités et étapes impliquées dans le processus de connexion. Le diagramme peut également être étendu pour inclure d'autres interactions entre l'utilisateur, le site web et le serveur.


Diagramme de classes : ![Diagramme des classes](https://github.com/KillianHajo/V.Parrot-Garage/assets/140068474/31dfca3b-618c-472c-8b3a-34bbb01948b5)
                    +-----------------+
                    |   Utilisateur   |
                    +-----------------+
                    | - idUtilisateur |
                    | - nom           |
                    | - email         |
                    | - téléphone     |
                    | - motDePasse    |
                    +-----------------+ ![Diagramme des classes](https://github.com/KillianHajo/V.Parrot-Garage/assets/140068474/31dfca3b-618c-472c-8b3a-34bbb01948b5)

                           ^
                           |
                           |
               +-----------------------+
               |      PriseContact      |
               +-----------------------+
               | - idPriseContact      |
               | - idUtilisateur (FK)  |
               | - idVehicule (FK)     |
               | - message             |
               | - datePriseContact    |
               +-----------------------+
                        ^        ^
                        |        |
                        |        |
                 +--------------+      +--------------+
                 |   Véhicule   |      |   Commentaire |
                 +--------------+      +--------------+
                 | - idVehicule |      | - idComment   |
                 | - marque     |      | - idUtilisateur (FK) |
                 | - modèle     |      | - idVehicule (FK)    |
                 | - année      |      | - texte            |
                 | - prix       |      | - dateComment      |
                 +--------------+      +-------------------+


## Explications du diagramme :

### La classe Utilisateur représente les utilisateurs du site web. Elle contient des attributs tels que idUtilisateur, nom, email, téléphone et motDePasse (pour stocker le mot de passe de l'utilisateur de manière sécurisée).

### La classe PriseContact représente les prises de contact effectuées par les utilisateurs pour les véhicules. Elle contient des attributs tels que idPriseContact, idUtilisateur (clé étrangère vers la classe Utilisateur), idVehicule (clé étrangère vers la classe Véhicule), message (le message envoyé par l'utilisateur) et datePriseContact (la date de la prise de contact).

### La classe Véhicule représente les véhicules affichés sur le site web. Elle contient des attributs tels que idVehicule, marque, modèle, année et prix.

### La classe Commentaire représente les commentaires postés par les utilisateurs pour les véhicules. Elle contient des attributs tels que idComment, idUtilisateur (clé étrangère vers la classe Utilisateur), idVehicule (clé étrangère vers la classe Véhicule), texte (le contenu du commentaire) et dateComment (la date du commentaire).

### Le diagramme de classes ci-dessus montre la relation entre les utilisateurs, les prises de contact, les véhicules et les commentaires. Les utilisateurs peuvent effectuer des prises de contact pour plusieurs véhicules, et chaque prise de contact est liée à un utilisateur et à un véhicule spécifique. Les utilisateurs peuvent également poster plusieurs commentaires pour différents véhicules, et chaque commentaire est lié à un utilisateur et à un véhicule spécifique.

#### Notez que ce diagramme de classes est une représentation simplifiée et qu'il peut être étendu en fonction des autres fonctionnalités de votre site web, telles que la gestion des administrateurs, des likes pour les commentaires, etc.
