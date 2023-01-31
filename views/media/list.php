<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videotheque</title>
</head>
<body>
    <?php echo "test" ?>
  <?php for ($i = 0; $i <= 4; $i++) { ?>
    <div>
        <h2>
            
            <a href="/media/detail/<?= $series[$i]['id'] ?>">
                <?= $series[$i]['name'] ?> 
            </a>
        </h2>
        <p>
            <?= $series[$i]['rating'] ?>
        </p>
    </div>
  
 
  <?php } ?>
  
  <a href="/media/list/series" style="grid-row: 5 / 6; grid-column: 1 / 2;">See More</a>
  <a href="/media/list/movies" style="grid-row: 5 / 6; grid-column: 2 / 3;">See More</a>
  <a href="/media/list/studio" style="grid-row: 5 / 6; grid-column: 3 / 4;">See More</a>

</div>
    
</body>
</html>