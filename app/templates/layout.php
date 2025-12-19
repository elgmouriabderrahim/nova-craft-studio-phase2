<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="build/output.css" rel="stylesheet">
    <title><?= $title ?? "NovaCraft Studio - Accueil" ?></title>
</head>
<body>

    <?php require_once 'header.php'; ?>

    <main class="min-h-[85vh]">
        <?php
            include $view;
        ?>
    </main>

    <?php require_once  'footer.php'; ?>

</body>
</html>
