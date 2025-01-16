<head>
  <link href="/style.css" rel="stylesheet" />
</head>


<form action="/handlers/article/add.php" method="POST" class="form" enctype="multipart/form-data">
  <h3>Ajouter un article </h3>
  <label for="title"> Titre</label>
  <input type="text" name="title" required>
  <label for="author"> Auteur</label>
  <input type="text" name="author" required>
  <label for="article_img"> Image</label>
  <input type="file" name="article_img" required>
  <label for="content"> Contenu</label>
  <textarea name="content" required></textarea>
  <input type="submit" value="Enregistrer" />
</form>