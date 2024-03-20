<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Boolify</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        <div class="container-fluid py-5 ">
      
            <h1>Popular albums</h1>
            <ul class=" container d-flex bg-dark">
                <li v-for="album in albumList" :key="album.title" class="album-item">
                    <img :src="album.poster" :alt="album.title" style="max-width: 100px; height: auto;">
                    <p>Title: {{ album.title }}</p>
                    <p>Author: {{ album.author }}</p>
                    <p>Year: {{ album.year }}</p>
                    <p>Genre: {{ album.genre }}</p>
                </li>
            </ul>
    
        </div>
    </div>
  

    <!-- Includi Vue e Axios -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Includi il file JavaScript -->
    <script src="./js/main.js"></script>
</body>
</html>
