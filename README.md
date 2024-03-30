
Pour executer cette application, voici les prerequis à avoir:

        ---- php, mysql (ou alors telecharger wampserver pour windows)
        ---- composer (lien de telechargement https://getcomposer.org/download/)
        ---- node (lien de telechargement https://nodejs.org/en/download)

1- apres avoir installer cela:

        - telecharger le fichier zip du projet
        - dezipper le fichier (sur le bureau par exemple)
        - ouvrir l'invite de commande et vous positionner au niveau du dossier dezippé (en utilisant la commande 'cd' sur windows. 
                    si le dossier est sur le bureau par exemple vous allez faire 'cd desktop/nom_du_dossier)
        - executer la commande 'composer install' (il faut la connection internet)
        - puis executer 'npm install' (connexion internet aussi)
        - apres executer 'npm run build'

2- configuration de la base de données

        - creer un utilisateur pour votre bd avec les identifiants suivants, le nom cest "valere" et le password est "sokcellerie"
        - si vous ne voulez pas creer un utilisateur pour votre bd, allez dans le fichier ".env" du projet (àla racine du projet)
                et à a ligne 15 et 16, remplacer les identifiants presents par vos identifiants de votre bd
        - connectez vous avec vos identifiants et
        - creer une base de données au nom de "todo_list" dans cette bd, importer le fichier sql qui se troue dans le dossier
        "database" du projet, il se nomme "todo_list.sql"


3- demarrage de l'application

        - demarrer votre mysql (ou wampserver si c'est ca que vous utilisez)
        - ouvrir l'invite de commande et se possitionner sur le projet et faire "php artisan serve"
        - une connexion vous sera demande. vous pouvez creer un nouveau compte en vous inscrivant ou vous connecter avec les identifiants
                email "vmangwandjo@gmail.com" password "sokcellerie"


        terminé!!!!!!!!!!
