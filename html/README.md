# Exercices PHP / MySQL

## Créer une branche

Se positionner sur la branche dont on souhaite partir puis créer la branche
```
git fetch
git checkout main
git pull --rebase
git branch
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

### views

Contient les `vues` affichées à l'utilisateur (formulaires, etc)

