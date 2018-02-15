# siPHP

# Définition

Semaine intensive PHP

L'épreuve du feu ...

* nom (string 50)
* prenom (string 50)
* naissance (string 50)
* session (string 50)
* email (string 50)
* telephone (string 50)
* password (string 50)
* photo (string 50)

# Sitemap

![](/image/sitemap.png)

# CRUD inscritpion

## Create

### Formulaire
GET /inscription.php

### Ajout dans la base de données
```sql
INSERT INTO
`inscription`
(`nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo`)
VALUES
('Salade', 'Filling', '28/12/1996', 'w1', 'test@gmail.com', '+33123456789', 'root', 'image/test.jpg')
;
```
POST /inscription.php

## Read

### Lister
```sql
SELECT `id`, `nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo` FROM `inscription`;
```
GET /.php

### Visualiser les détails
```sql
SELECT `id`, `nom`, `prenom`, `naissance`, `session`, `email`, `telephone`, `password`, `photo` FROM `inscription` WHERE id = 1;
```
GET /.php?id=:id

## Update

### Formulaire
GET /edit.php?id=:id

### Modifier les données dans la base
```sql
UPDATE `inscription` SET `email` = "newtest@gmail.com" WHERE id = 1;
``` 
POST /.php

## Delete

### demande de confirmation
GET /.php?id=:id

### Effacer dans la base
```sql
DELETE FROM `insciption` WHERE id = 1;
```
POST /.php
