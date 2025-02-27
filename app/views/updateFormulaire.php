<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Ajouter un Article</h2>

            <form action="/updateArticls" method="POST">
                <!-- Token CSRF (sécurité Laravel) -->
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <!-- Titre de l'article -->
                <div class="mb-3">
                    <label for="title" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control" value="<?php echo $articls['title'] ?>" id="title" name="name" placeholder="Entrez le titre" required>
                </div>

                <!-- Contenu de l'article -->
                <div class="mb-3">
                    <label for="content" class="form-label">Contenu</label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Rédigez votre article..." required><?php echo $articls['content'] ?></textarea>
                </div>

                <!-- Sélection de la catégorie -->
                <div class="mb-3">
                    <label for="category" class="form-label">Catégorie</label>
                    <select class="form-select" id="category_id" name="category_id" required>

                        <option value='<?php echo $categories['category_id'] ?>' selected disabled><?php echo $categories['name'] ?> </option>
                        <?php
                        foreach ($categorys as $category) {


                            echo "
                        <option value='" . $category['id'] . "  '> " . $category['name'] . " </option>
                        ";
                        }
                        ?>

                    </select>
                </div>

                <!-- Bouton de soumission -->
                <button type="submit" class="btn btn-primary w-100">Ajouter l'article</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>