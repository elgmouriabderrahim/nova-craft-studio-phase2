<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/build/output.css" rel="stylesheet">
    <title><?= $title ?? "NovaCraft Studio - Accueil" ?></title>
</head>
<body>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>

    <main class="min-h-screen">
        <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/' . $view;
        ?>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>

</body>
</html>
