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
            min-width: 190px;
            min-height: 300px;
            font-size: 13px;
            background-color: #112030;
;
        } 

        .card img {
            max-width: 150px; 
            margin: 0 auto;
        }
        .card img:hover{
            transform: scale(1.1);
            transition: 100ms ease-in-out;
            cursor: pointer;



        }

        #logo img {
            width: 30px;
        }

        .album-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .album-column {
            margin-bottom: 20px;

        }
        h4{
            font-size: 18px;
        }

        .genre, .author{
            font-size: 10px;
        }

        .wrapper{
            background-color: #1d2d3c;
        }
        .title:hover{
            cursor:pointer;
            text-decoration: underline #06131f 4px;
            
        }
        nav{ background-color: #06131f;

        }



    </style>
</head>
<body>
    
<div id="app">
        <!-- Navbar con logo -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://cantabrialabsdifacooper.it/wp-content/uploads/2021/03/png-clipart-spotify-logo-spotify-computer-icons-podcast-music-apps-miscellaneous-angle-1-e1614848134495.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                    Boolify
                </a>
                <!-- Fine Logo -->
            </div>
        </nav> <!-- Fine Navbar -->
        
        <div class="wrapper d-flex flex-column align-items-center justify-content-center">
            <!-- Contenitore wrapper -->
            <!-- Utilizziamo il sistema di griglia di Bootstrap -->
            
            <div class="container">
                <!-- Contenitore fluido -->
                <!-- Prima riga -->
                <div class="album-row">
                    <!-- Riga degli album -->
                    <!-- Utilizziamo un ciclo v-for per generare le card degli album per i primi tre album -->
                    <div class="album-column text-center p-5 d-flex justify-content-center" v-for="(album, index) in albumList.slice(0, 3)" :key="album.title">
                        <!-- Colonna degli album -->
                        <div class="card box-shadow">
                            <!-- Card di un album -->
                            <div class="text-center mt-2 pt-4">
                                <img :src="album.poster" class="card-img-top" :alt="album.title">
                            </div>
                            <div class="card-body text-white text-center">
                                <h4 class="card-title text-white m-0 p-0 title">{{ album.title }}</h4>
                                <span class="card-text fw-light author">{{ album.author }}</span>
                                <p class="card-text fw-bold text-white m-0 year">{{ album.year }}</p>
                                <span class="card-text fw-light genre">{{ album.genre }}</span>        
                            </div>
                        </div> <!-- Fine Card -->
                    </div> <!-- Fine Colonna degli album -->
                </div> <!-- Fine Riga degli album -->

                <!-- Seconda riga -->
                <div class="album-row">
                    <!-- Riga degli album -->
                    <!-- Utilizziamo un ciclo v-for per generare le card degli album per gli ultimi tre album -->
                    <div class="album-column text-center p-5 d-flex justify-content-center" v-for="(album, index) in albumList.slice(3)" :key="album.title">
                        <!-- Colonna degli album -->
                        <div class="card box-shadow">
                            <!-- Card di un album -->
                            <div class="text-center mt-2 pt-4">
                                <img :src="album.poster" class="card-img-top" :alt="album.title">
                            </div>
                            <div class="card-body text-white text-center">
                                <h4 class="card-title text-white m-0 p-0 title">{{ album.title }}</h4>
                                <span class="card-text fw-light author">{{ album.author }}</span>
                                <p class="card-text fw-bold text-white m-0 year">{{ album.year }}</p>
                                <span class="card-text fw-light genre">{{ album.genre }}</span>        
                            </div>
                        </div> <!-- Fine Card -->
                    </div> <!-- Fine Colonna degli album -->
                </div> <!-- Fine Riga degli album -->
            </div> <!-- Fine Contenitore fluido -->
        </div> <!-- Fine Wrapper -->

    </div> <!-- Fine App -->

    <!-- Includi Vue e Axios -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Includi il file JavaScript -->
    <script src="./js/main.js"></script>
</body>
</html>
