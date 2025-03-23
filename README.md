# Le Sécurisateur

Pour installer le jeu sur Unity :

🛠 1. Créer un Nouveau Projet Unity
Ouvre Unity Hub.

Clique sur "Nouveau projet".

Choisis le template "2D Mobile".

Donne un nom au projet et choisis un dossier de destination.

Clique sur "Créer".

📥 2. Importer le Package Unity

Télécharger le fichier .unitypackage

Une fois le projet créé, ouvre Unity.

Va dans "Assets" > "Import Package" > "Custom Package...".

Sélectionne le fichier .unitypackage.

Une fenêtre va s'ouvrir avec une liste des fichiers contenus dans le package.

Coche tout (ou choisis ce dont tu as besoin) puis clique sur "Import".

⚠ 3. Vérifier et Régler les Paramètres
Une fois l'import terminé :

Les Layers et Tags ne seront pas importés automatiquement.

Copie le fichier TagManager dans ton Projet dans 

📂 ProjetUnity/ProjectSettings/TagManager.asset

Redémarre le projet ou met le à jour.

4. Ajouter les Scènes au Build Settings
Va dans "File" > "Build Settings...".

Dans la fenêtre qui s'ouvre, regarde si les nouvelles scènes sont listées.

Si elles ne sont pas là, clique sur "Add Open Scenes" pour en ajouter.

Glisse-dépose toutes les scènes nécessaires depuis le dossier Assets/Scenes dans la liste en inculant celles qui sont dans des dossiers.

Assure-toi que la première scène (celle qui doit se charger en premier) est bien en haut de la liste.

Clique sur "Save".
