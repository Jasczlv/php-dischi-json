<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body id="app">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>  
   <div class="bg-custom">
    <header style="width:100%; height:50px; background-color: #112030;">
        <div style="color: white;">
            canzoni
        </div>
    </header>
        <div class="container">
            <div class="row flex-wrap justify-content-between">
                <div v-for="disco in musica" class="card p-3 col-4 g-5 text-light mb-3">
                    <img :src="disco.poster" alt="immagine non trovata :c">
                    <span class="fw-bold p-3"> {{ disco.title }} <br></span>
                    <span class="p-3"> {{ disco.author }} <br></span>
                    <span class="fw-bold p-3"> {{ disco.year }} <br></span>
                </div>
            </div>
        </div>
   
    </div>

    
    <script src="./app.js"></script>
</body>

</html>
<style>
    * {
        box-sizing: border-box;
    }

    img {
        max-width: 100%;
    }
    .bg-custom {
        background-color: #1D2D3C;
    }

    .bg-primary {
        height: 100vh;
        width: 100vw;
    }
    
    .card {
        text-align: center;
        background-color: #112030;
        max-width: 30%;
    }
 
    .card:hover {
        cursor:pointer;
    }
</style>