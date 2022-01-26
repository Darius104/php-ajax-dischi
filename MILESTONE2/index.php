<?php
    $prova = require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../assets/spotify.png" alt="logo">
            <select v-model="selectGenre" id="songs" @change="$emit('selectChange', selectGenre)">
                <option value="NaN">All</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
        </div>
    </header>

    <div class="all">
        <?php foreach($database as $element) { ?>
            <div class="card">
                <img src="<?php echo $element['poster']?>" alt="">
                <h2> <?php echo $element['title'] ?> </h2>
                <h4><?php echo $element['author'] ?></h4>
                <h4><?php echo $element['year'] ?></h4>
            </div>
        <?php } ?>   
    </div>     
</body>
</html>