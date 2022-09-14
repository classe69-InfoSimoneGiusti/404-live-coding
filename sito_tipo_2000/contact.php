<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <?php include __DIR__ . '/partials/header.php'; ?>

    <main>
        <h1>Contattaci!</h1>
        <form>
            <input type="text" placeholder="Come ti chiami" />
            <button type="submit">Invia</button>
        </form>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>