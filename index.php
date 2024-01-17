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



        <main class="bg-dark p-5">

            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/thumb/3/32/AmericanIdiot.jpg/220px-AmericanIdiot.jpg" alt="Card image cap">
                <div class="card-body">

                         <p class="card-text" v-for="(element, index) in albums">
                           {{ element.titolo }}</p>

                

                 
               

                </div>
            </div>
        </main>


</div>


<script src="./js/main.js"></script>
</body>
</html>