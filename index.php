<?php



?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP-Dischi-Json</title>
    <!-- Font Awesome: -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap 5 CDN: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- script VueJS: -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CSS -->
    <link rel='stylesheet' href='./src/assets/css/style.css'>
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-bg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="src/img/Logo.png" alt="Boolean" width="30" height="30">
                </a>
            </div>
        </nav>
        <main class="bg-main">
            <div class="container text-center">
                <div class="row px-5 justify-content-between">
                    <div class="col-4 p-4" v-for="disc in discs">
                        <div class="card my-bg-card h-100 p-5">
                            <img :src="disc.poster" class="" alt="...">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{ disc.title }}</h5>
                                <p class="card-text">{{ disc.author }}</p>
                                <h6>{{ disc.year }}</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>

    </div>

    <!-------Script links:------->
    <!-- Bootstrap: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- My Javascript -->
    <script type='text/javascript' src='src/assets/js/script.js'></script>
</body>

</html>