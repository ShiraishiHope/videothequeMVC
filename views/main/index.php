<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videotheque</title>
</head>
<body>
    <p>Welcome to the home page. </p>
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; grid-template-rows: repeat(5, (1/3)fr 3fr);">

  <h1 style="grid-row: 1 / 2; grid-column: 1 / 2;">Series</h1>
  <h1 style="grid-row: 1 / 2; grid-column: 2 / 3;">Movie</h1>
  <h1 style="grid-row: 1 / 2; grid-column: 3 / 4;">Production Studios</h1>


  <?php for ($i = 2; $i <= 4; $i++) { ?>
    <div style="grid-row: <?php echo $i; ?> / <?php echo $i + 1; ?>; grid-column: 1 / 2;">
        <h2>
            
            <a href="/media/detail/<?= $series[$i-2]['id'] ?>">
                <?= $series[$i-2]['name'] ?> 
            </a>
        </h2>
        <p>
            <?= $series[$i-2]['rating'] ?>
        </p>
    </div>
    <div style="grid-row: <?php echo $i; ?> / <?php echo $i + 1; ?>; grid-column: 2 / 3;">
        <h2>
            <a href="/media/detail/<?= $movie[$i-2]['id']?>">
                <?= $movie[$i-2]['name'] ?> 
            </a>
        </h2>
        <p>
            <?= $movie[$i-2]['rating'] ?>
        </p>
    </div>
    <div style="grid-row: <?php echo $i; ?> / <?php echo $i + 1; ?>; grid-column: 3 / 4;">
        <h2>
            <a href="/media/detail/<?= $studio[$i-2]['id']?>">
                <?= $studio[$i-2]['name'] ?> 
            </a>
        </h2>
        <p>
            <?= $studio[$i-2]['name'] ?>
        </p>
    </div>
  <?php } ?>
  
  <a href="/media/list/series" style="grid-row: 5 / 6; grid-column: 1 / 2;">See More</a>
  <a href="/media/list/movies" style="grid-row: 5 / 6; grid-column: 2 / 3;">See More</a>
  <a href="/media/list/studio" style="grid-row: 5 / 6; grid-column: 3 / 4;">See More</a>

</div>
    
</body>
</html>