<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="build/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
