<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPlaylist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark p-3">
            <a class="navbar-brand" href="#">
                <img src="https://cdn-icons-png.flaticon.com/256/2111/2111624.png" width="30" height="30" alt="logo">
            </a>
        </nav>

        <div class="container-fluid bg-dark">
            <div class="row justify-content-center">
                <div class="col-8 p-3">
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="card m-3" style="width: 18rem;" v-for="(element, index) in albums" :key="index">
                            <div class="card-body text-center">
                                <img class="card-img-top" :src="element.copertina" alt="Card image cap">
                                <h4 class="card-text p-1 mt-3"> {{ element.titolo }}</h2>
                                <h5 class="card-text p-1"> {{ element.autore }}</h3>
                                <p class="card-text p-1"> {{ element.anno }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/main.js"></script>
    </div>
</body>
</html>
