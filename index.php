<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="d-flex vh-100 align-items-center">
            <div class="container d-flex justify-content-center">
                <div class="mx-auto text-center position-relative " style="width: 80%; ">
                    <div class=" row text-warning bg-black text-start">
                        <h1>Discs</h1>
                    </div>
                    <div v-if='info'  class="info-disc">
                        <div class="d-flex">
                            <div class="img-size">
                                <img :src="infoDisc.poster" alt="">
                            </div>

                            <div class="card-body d-flex text-white flex-column justify-content-center ">
                                <p class="fw-bold fs-5">{{infoDisc.title}}</p>
                                <p><small>{{infoDisc.author}}</small></p>
                                <p class="fw-bold fs-5">{{infoDisc.year}}</p>
                            </div>
                            <div @click='removeInfo' class="position-absolute fs-1 text-white bg-dark  m-3 rounded-circle top-0 end-0"  style="width: 60px;height:60px;">
                                X
                            </div>
                        </div>
                    </div>
                    <div class="row  p-4 bg-dark ">
                        <div v-for='(disc, index) in discs' @click='getDiscInfo(index)' class="card col-lg-4 col-md-6 col-sm-12 bg-dark text-secondary border-secondary p-2 ">
                            <img :src="disc.poster" class="card-img-top rounded-circle" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5">{{disc.title}}</p>
                                <p><small>{{disc.author}}</small></p>
                                <p class="fw-bold fs-5">{{disc.year}}</p>

                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>