<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Boolify</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .card {
	max-width: 190px;
}
       
        
       
    </style>
</head>
<body>
    
    <div id="app">
        <div class="wrapper d-flex justify-content-center flex-column  align-items-center">
            <h1 class="text-center py-5">Popular albums</h1>
            <!-- Utilizziamo il sistema di griglia di Bootstrap -->
            <div class="row row-cols-1 row-cols-md-3 justify-content-center  container">
                <div class="col" v-for="(album, index) in albumList" :key="album.title">
                    <div class="card mb-4 box-shadow">
                        <img :src="album.poster" class="card-img-top p-3" :alt="album.title">
                        <div class="card-body">
                            <h5 class="card-title">{{ album.title }}</h5>
                            <p class="card-text">Author: {{ album.author }}</p>
                            <p class="card-text">Year: {{ album.year }}</p>
                            <p class="card-text">Genre: {{ album.genre }}</p>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Includi Vue e Axios -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Includi il file JavaScript -->
    <script src="./js/main.js"></script>
</body>
</html>
