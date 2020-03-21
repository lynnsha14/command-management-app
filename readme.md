<p align="center"><img src="https://avatars0.githubusercontent.com/u/45993282?s=200&v=4" width="400"></p>

#Notes

##Mode de la base de donnees
![Model de BD](https://raw.githubusercontent.com/M3HEENK-TECH/command-management-app/master/doc/db_model.png)
##Fichier SQL de la base de donnees
 * Fichier : doc/bd.sql
##Base  de donnees 
* Creer la base de donnees et lancer les migration
<pre>
mysql -u root -p  -e "create database command_app2020"
</pre>
<pre>
php artisan migrate
</pre>
