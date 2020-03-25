<p align="center"><img src="https://avatars0.githubusercontent.com/u/45993282?s=200&v=4" width="400"></p>

# command-management-app

# Notes

##  Faire une Push

* Faire le push
<pre>git init</pre>
<pre>git remote add origin https://github.com/M3HEENK-TECH/command-management-app.git</pre>
<pre>git pull  https://github.com/M3HEENK-TECH/command-management-app.git master</pre>

* Faire une Pull
<pre>git add .</pre>
<pre>git commit -m "Le message des changements"</pre>
<pre>git push -u orign beta</pre>

## Model Physique  de la base de donnees
![Model de BD](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/db_model.png)

## Diagramme de cas d'utilisation
![Diagramme de cas d'utilisation](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/uc_diagram.jpg)

## Diagramme de classe
![Diagramme de classe](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/class_dirgram.jpg)


## Fichier SQL de la base de donnees
 * Fichier : doc/bd.sql
 
### Demarrer l'application : Executer les commandes suivantes
* Creer le fichier de configuration laravel
<pre>
 cp .env.example .env
</pre>
* Creer la base de donnees
<pre>
mysql -u root -p  -e "create database command_app2020"
</pre>
* lancer les migration
<pre>
php artisan migrate
</pre>


