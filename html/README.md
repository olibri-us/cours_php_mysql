# Exercices PHP / MySQL

## Git

### Créer une branche

Se positionner sur la branche dont on souhaite partir puis créer la branche
```
git fetch
git checkout main
git pull --rebase
git branch *ma_branche*
git checkout *ma_branche*
```

### Publier la branche

```
git push -u *mabranche*
```

### Créer un commit

```
git add .
git commit -m "message du commit"
```

### Publie un commit

```
git push
```


## Dossiers

### actions

Contient les scripts PHP qui vont gérer les `actions` de l'utilisateur, comme charger les données nécessaire à l'affichage d'une vue ou enregistrer des données dans la BDD.

### database

Contient les scripts de migration dans `migrations` et des utilitaires pour migrer et connecter la BDD `connector.php` et `migrate.php`

### scripts

Contient les scripts SQL liés utilisés par les `actions`

### uploads

Contient les fichiers uploadés par les `actions`

Si on a des problèmes pour écrire des fichiers dans ce dossier :
```
chmod 777 html/uploads
```

### views

Contient les `vues` affichées à l'utilisateur (formulaires, etc)

