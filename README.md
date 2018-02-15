# siPHP

# Définition
Semaine intensive PHP

L'épreuve du feu ...

Nous avons utilisé 5 tabbles:

1. inscription
  * id int(11)
  * nom (VARCHAR 50)
  * prenom (VARCHAR 50)
  * naissance (VARCHAR 50)
  * session (VARCHAR 50)
  * email (VARCHAR 50)
  * telephone (VARCHAR 50)
  * password (VARCHAR 50)
  * photo (VARCHAR 50)

2. realisation
 * id int(11)
 * url1 VARCHAR(50)
 * titre VARCHAR(30)
 * commentaire VARCHAR(100)
 * email VARCHAR (30)

3. message
  * id int(11)
  * nom (VARCHAR 20)
  * prenom (VARCHAR 30)
  * message TEXT
  * type (VARCHAR 20)
  * email (VARCHAR 50)
  * telephone (VARCHAR 50)
  * session (VARCHAR 50)
  * horaire (VARCHAR 50)
  
4. favori
 * id int(11)
 * url VARCHAR(50)
 * titre VARCHAR(30)
 * commentaire VARCHAR(100)
 * nom VARCHAR(20)
 * prenom VARCHAR(50)
 * email VARCHAR (30)
 
 5. competence
 * id int(11)
 * html VARCHAR(10)
 * css VARCHAR(10)
 * javascript VARCHAR(10)
 * php VARCHAR(10)
 * ux VARCHAR(10)
 * commentaire VARCHAR(100)
 * email VARCHAR(40)
# Sitemap

![](/sitemap.png)

# CRUD 

## Create

### Formulaire
1. GET /inscription.php

### Ajout dans la base de données
```sql
CREATE DATABASE forum;
USE forum;
CREATE TABLE inscription (id int(11), nom (VARCHAR 50), prenom (VARCHAR 50), naissance (VARCHAR 50), session (VARCHAR 50), email (VARCHAR 50), telephone (VARCHAR 50), password (VARCHAR 50), photo (VARCHAR 50));

```
1. POST /inscription.php

## Read

### Lister
```sql
SELECT `id`, `nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo` FROM `inscription`;
```

### Visualiser les détails
```sql
SELECT `id`, `nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo` FROM `inscription` WHERE id = 1;
```
1. GET /profil.php

## Update

### Formulaire
1. GET /profil.php

### Modifier les données dans la base
```sql
UPDATE `inscription` SET `email` = "newtest@gmail.com" WHERE id = 1;
``` 
1. POST /profil.php

## Delete

### Effacer dans la base
```sql
DELETE FROM `insciption` WHERE id = 1;
```
1. POST /profil.php
