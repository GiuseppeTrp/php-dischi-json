<!DOCTYPE html>
<html lang="it">
<head>
    <!-- Metatag e titolo -->
</head>
<body>
    
    <div id="app">
        <div class="container py-5">
      
            <h1>Popular albums</h1>
            <ul>
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

    <!-- Includi il file JavaScript -->
    <script src="./js/main.js"></script>
</body>
</html>
