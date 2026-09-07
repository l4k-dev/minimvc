<!DOCTYPE html>
<html lang="pt-BR" translate="no">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Aplicação web desenvolvida com um mini framework MVC em PHP.">

    <meta name="robots" content="index, follow">

    <meta name="google" content="notranslate">

    <meta property="og:type" content="website">

    <meta property="og:title" content="Mini Framework MVC">

    <meta property="og:description" content="Aplicação web desenvolvida utilizando uma arquitetura MVC em PHP.">

    <link rel="shortcut icon" href="/assets/images/icon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <title>Mini Framework MVC</title>

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/assets/css/app.css">

</head>

<body class="bg-slate-950 text-white antialiased">

    <?php require BASE_PATH . '/resources/views/partials/header.php'; ?>

    <main>

        <?= $content ?>

    </main>

    <?php require BASE_PATH . '/resources/views/partials/footer.php'; ?>

    <!-- JavaScript -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>