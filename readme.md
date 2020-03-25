<p align="center"><img src="https://avatars0.githubusercontent.com/u/45993282?s=200&v=4" width="400"></p>

# command-management-app

# Notes

##  Faire une Push

<<<<<<< HEAD
* Faire le push
=======
*  D'abord faire une Pull
>>>>>>> 91e5c29a37805919e19eff45003d07ee55055b08
<pre>git init</pre>
<pre>git remote add origin https://github.com/M3HEENK-TECH/command-management-app.git</pre>
<pre>git pull  https://github.com/M3HEENK-TECH/command-management-app.git master</pre>

<<<<<<< HEAD
* Faire une Pull
=======
* Ensuite faire un push
>>>>>>> 91e5c29a37805919e19eff45003d07ee55055b08
<pre>git add .</pre>
<pre>git commit -m "Le message des changements"</pre>
<pre>git push -u orign master</pre>

## Model Physique  de la base de donnees
![Model de BD](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/db_model.png)

<<<<<<< HEAD
## Diagramme de cas d'utilisation
![Model de BD](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/uc_dirgram.jpg)

## Diagramme de classe
![Model de BD](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/class_dirgram.jpg)


=======
>>>>>>> 91e5c29a37805919e19eff45003d07ee55055b08
## Fichier SQL de la base de donnees
 * Fichier : doc/bd.sql
 
## Base  de donnees 
* Creer la base de donnees et lancer les migration
<pre>
mysql -u root -p  -e "create database command_app2020"
</pre>
<pre>
php artisan migrate
</pre>
