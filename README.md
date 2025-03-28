Le Sécurisateur

Pour installer le jeu sur Unity :

🧐 1. Créer un Nouveau Projet Unity

Ouvre Unity Hub.

Clique sur "Nouveau projet".

Choisis le template "2D Mobile".

Donne un nom au projet et choisis un dossier de destination.

Clique sur "Créer".

💽 2. Importer le Package Unity

Télécharge le fichier .unitypackage.

Une fois le projet créé, ouvre Unity.

Va dans "Assets" > "Import Package" > "Custom Package...".

Sélectionne le fichier .unitypackage.

Une fenêtre va s'ouvrir avec une liste des fichiers contenus dans le package.

Coche tout (ou choisis ce dont tu as besoin) puis clique sur "Import".

⚠ 3. Vérifier et Régler les Paramètres

Les Layers et Tags ne seront pas importés automatiquement.

Copie le fichier TagManager.asset dans :
📂 ProjetUnity/ProjectSettings/TagManager.asset.

Redémarre le projet ou mets-le à jour.

🌟 4. Ajouter les Scènes au Build Settings

Va dans "File" > "Build Settings...".

Dans la fenêtre qui s'ouvre, regarde si les nouvelles scènes sont listées.

Si elles ne sont pas là, clique sur "Add Open Scenes" pour les ajouter.

Glisse-dépose toutes les scènes nécessaires depuis le dossier Assets/Scenes, y compris celles qui sont dans des sous-dossiers.

Assure-toi que la première scène (celle qui doit se charger en premier) est bien en haut de la liste.

Clique sur "Save".

🛠 Installation du Serveur et de la Base de Données

🏛️ 5. Installer la Base de Données SQL

Importer le script securisator.sql dans une base de données MySQL.

Cela créera toutes les tables nécessaires pour le bon fonctionnement du jeu.

🌐 6. Configurer le Serveur WebService PHP

Utiliser le dossier securisator_server qui contient le serveur WebService en PHP.

Pour démarrer facilement le serveur, utiliser Laragon (ou un autre serveur local comme XAMPP ou WAMP).

Déposer le dossier securisator_server dans le répertoire www ou htdocs du serveur.

L'URL du serveur sera alors :
http://localhost/securisator_server.

Si besoin, modifier les liens dans Unity (Assets > Scripts > SqlConfig > GlobalConfig.cs ) pour correspondre à l'URL correcte.

Le projet est maintenant installé et prêt à fonctionner ! 🚀

Les mots de passes sont à configurer dans le serveur : fichier config.php !
