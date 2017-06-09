# laravel-todolist
Rendu du projet To Do List en Framework PHP Laravel

</br>
</br>

Ouvrir l'invité de commande ou terminal</br>
"git clone https://github.com/damienhervieu/laravel-todolist"</br>
"cd laravel-todolist"</br>
"composer install"</br>
</br>
Mettre le nom de sa machine dans le fichier "start.php" se trouvant dans le dossier "bootstrap" à la ligne 29</br>
Créer la base de données MySQL s'appelant "laravel-to-do-list"</br>
Corriger le fichier "database.php" se trouvant dans l'arborescence "app/config/local"</br>
Ensuite exécuter la commande "php artisan migrate"</br>
Et "php artisan db:seed"</br>
Vous devez impérativement passer par la page "localhost/laravel4/login"</br>
car le filtre ne fonctionne pas sur la route pour l'accueil</br>
Un utilisateur est déjà configuré grâce au seed, voici ses informations :</br>
Nom d'utilisateur : Damien</br>
Mot de passe : damien</br>