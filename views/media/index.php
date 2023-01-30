<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../layouts/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <section class="displayThree">
        <div class="gridColumn1">
            <h1>Series</h1>
            <?php foreach($media as $anime): ?>
            <h2>
                <a href="/media/detail/<?= $anime['id']?>">
                    <?= $anime['name'] ?> 
                </a>
            </h2>
            <p>
                <?= $anime['rating'] ?>
            </p>
            <?php endforeach; ?>
        </div>
        <div class="gridColumn2">
            <h1>Movie</h1>
            <?php foreach($media as $anime): ?>
            <h2>
                <a href="/media/detail/<?= $anime['id']?>">
                    <?= $anime['name'] ?> 
                </a>
            </h2>
            <p>
                <?= $anime['rating'] ?>
            </p>
            <?php endforeach; ?>
        </div>
        <div class="gridColumn3">
            <h1>Production Studios</h1>
            <?php foreach($media as $anime): ?>
            <h2>
                <a href="/media/detail/<?= $anime['id']?>">
                    <?= $anime['name'] ?> 
                </a>
            </h2>
            <p>
                <?= $anime['rating'] ?>
            </p>
            <?php endforeach; ?>
        </div>
    </section class="displayThree">
</body>
</html>