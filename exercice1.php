<?php 

/*
tu utilises du code python pour te connecter en php???

le lien vers la page php pour postgres

https://www.php.net/manual/en/book.pgsql.php
*/
conn = psycopg2.connect(
    host="localhost",
    database="nom_de_la_base_de_donnees",
    user="nom_utilisateur",
    password="mot_de_passe")


print("Opened database successfully")
?>
