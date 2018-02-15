# siPHP

# Définition
Semaine intensive PHP

L'épreuve du feu ...

Nous avons utilisé 3 tabbles:

1. inscription
  * nom (string 50)
  * prenom (string 50)
  * naissance (string 50)
  * session (string 50)
  * email (string 50)
  * telephone (string 50)
  * password (string 50)
  * photo (string 50)

2. realisation
  * 

3. message
  *

# Sitemap

![](/image/sitemap.png)

# CRUD 

## Create

### Formulaire
1. GET /inscription.php
2. GET
3. GET

### Ajout dans la base de données
```sql
INSERT INTO
`inscription`
(`nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo`)
VALUES
('Salade', 'Filling', '28/12/1996', 'w1', 'test@gmail.com', '+33123456789', 'root', 'image/test.jpg')
;
```
1. POST /inscription.php
2. POST
3. POST

## Read

### Lister
```sql
SELECT `id`, `nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo` FROM `inscription`;
```
1. GET /.php
2. GET /.php
3. GET /.php

### Visualiser les détails
```sql
SELECT `id`, `nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo` FROM `inscription` WHERE id = 1;
```
1. GET /.php?id=:id
2. GET /.php?id=:id
3. GET /.php?id=:id

## Update

### Formulaire
1. GET /.php?id=:id
2. GET /.php?id=:id
3. GET /.php?id=:id

### Modifier les données dans la base
```sql
UPDATE `inscription` SET `email` = "newtest@gmail.com" WHERE id = 1;
``` 
1. POST /.php
2. POST /.php
3. POST /.php

## Delete

### demande de confirmation
1. GET /.php?id=:id
2. GET /.php?id=:id
3. GET /.php?id=:id

### Effacer dans la base
```sql
DELETE FROM `insciption` WHERE id = 1;
```
1. POST /.php
2. POST /.php
3. POST /.php
