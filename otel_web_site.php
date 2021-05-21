<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <title>T-Hotel'e Hoşgeldiniz</title>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .bgImg {
            /* The image used */
            background-image: url('img/2.jpg');

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 5%;
            margin-top: -10px;

        }

        .box {
            padding-left: 2%;
            width: 33%;
            display: inline-table;
            padding-top: 5%;
        }
    </style>
</head>

<body>
<div class="container">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Hoşgeldiniz
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="heading">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">T-HOTEL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Odalarımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resimler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="img/1.jpg" alt="" width="1100" height="500">
                <div class="carousel-caption " style="position: center; top:25%; left:30%;">
                    <form class="form-inline row ">
                        <h4>Türkiye'nin En Kaliteli Oteline Hoşgeldiniz</h4>
                        <div class="form-group">
                            <div class="col-auto">
                                <select class="custom-select form-control" " >
                                <option selected>Oda Türünüzü Seçiniz</option>
                                <option value="1">Tek kişilik</option>
                                <option value="2">Çift kişilik</option>
                                <option value="3">Aile Odası</option>
                                <option value="4">Kral Dairesi</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="custom-select form-control ">
                                    <option selected>Yetişkin Sayısı</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="custom-select form-control">
                                    <option selected>Çocuk Sayısı</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary my-1">Submit</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/1.jpg" alt="" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/1.jpg" alt="" width="1100" height="500">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="p-3 mb-2 bg-dark text-white " style="display: flex;">
        <img src="img/hotel.jfif" alt="">
        <div>
            <h6>Otelimizin Tarihi</h6>
            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis cumque
                debitis illum
                incidunt ipsa, iusto laboriosam magnam maxime obcaecati, provident quia repudiandae? Adipisci animi at
                atque commodi consectetur consequatur debitis delectus dolorem dolores eos, esse excepturi hic in,
                inventore ipsa ipsam laboriosam molestiae mollitia nemo, nobis nostrum odit omnis perferendis placeat
                quaerat quas quidem rerum sapiente similique vero! Ab accusamus aliquam aliquid aspernatur cumque
                cupiditate dicta doloremque dolores dolorum eaque error expedita fugiat harum, illo iste labore minus
                mollitia nemo, nesciunt nulla numquam perferendis perspiciatis quasi quis saepe tempora temporibus
                tenetur ullam unde ut veritatis .</p>

            <div class="p-3 mb-5">
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Daha Fazla Bilgi</button>
                </div>
            </div>
        </div>
    </div>

    <div class="bgImg">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tek Kişilik Oda</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at cum
                            dignissimos earum in ipsam laudantium quia rerum tempore voluptas.</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Daha Fazla Bilgi</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Çift Kişilik Oda</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolor eaque
                            eum ex impedit ipsa itaque nobis provident quis quisquam?</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Daha Fazla Bilgi</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--        -->
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aile Odası</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            excepturi modi qui quisquam tenetur? Ab assumenda magnam minus sit veniam!</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Daha Fazla Bilgi</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kral Dairesi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            excepturi modi qui quisquam tenetur? Ab assumenda magnam minus sit veniam! </p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Daha Fazla Bilgi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media "
         style="margin-top: 10px;background-color: darkgrey; padding-left: 15%; padding-right: 15%; padding-top: 5%;padding-bottom: 5%;">
        <img class="mr-3 rounded-circle bg-light" src="img/boy.PNG" alt="" width="7%" height="7%">
        <div class="media-body">
            <h4 class="mt-0">Ahmet Yılmaz</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda dolorum eaque esse ipsa ipsum
            modi nam officiis pariatur porro quibusdam rerum ut voluptas, voluptates?
        </div>
    </div>
    <div class="media "
         style="margin-top: 10px;background-color: darkgrey; padding-left: 15%; padding-right: 15%; padding-top: 5%;padding-bottom: 5%;">
        <img class="mr-3 rounded-circle bg-light" src="img/girl.png" alt="" width="7%" height="7%">
        <div class="media-body">
            <h4 class="mt-0">Ahmet Yılmaz</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda dolorum eaque esse ipsa ipsum
            modi nam officiis pariatur porro quibusdam rerum ut voluptas, voluptates?
        </div>
    </div>
    <div class="bg-dark text-white ">
        <div class="box">
            <h4>Otelimizin Şubeleri</h4>
            <hr>
            <table class="table table-striped table-bordered bg-white">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Şubeler</th>
                    <th>Çalıştığı Dönemler</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Antalya</td>
                    <td>Yaz</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Van</td>
                    <td>4 Mevsim</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Muğla</td>
                    <td>İlkbahar-Yaz</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="box">
            <h4>Hakkımızda</h4>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti dolor laboriosam nemo provident
                quae quam quo reprehenderit? At, facilis?</p>
        </div>
        <div class="box">
            <h4>Sosyal Medya Hesaplarımız</h4>
            <hr>
            <img src="img/facebook.png" alt="" width="100" height="100">
            <img src="img/insta.png" alt="" width="100" height="100">
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

</script>

</body>
</html>