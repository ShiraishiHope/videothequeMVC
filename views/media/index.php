<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="displayThree">
    <h1>List</h1>
    <?php foreach($media as $anime): ?>
    <h2>
        <a href="/media/detail/<?= $anime['id']?>">
            <?= $anime['name'] ?> 
     </a>
    </h2>
    <p> <?= $anime['rating'] ?> </p>
    <?php endforeach; ?>
</body>
</html>