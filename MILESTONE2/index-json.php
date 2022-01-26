<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

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

    <div id="root">
        <div class="all">
            <div class="card" v-for="element in array">
                <img :src="element.poster" alt="element.title">
                <h2>{{ element.title }}</h2>
                <h4>{{ element.author }}</h4>
                <h4>{{ element.year }}</h4>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>