<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.svg" type="image/x-icon" />
    <title>EnjoyExplore</title>
</head>

<body data-bs-spy="scroll-behavior" class="scroll-smooth">
    @include('partials.navbar')
    <section class="test2" id="carousel" style="max-height: 730px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="0">
            <div class="container">
                <ol class="carousel-indicators justify-content-start">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active mx-0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url(img/1.png); background-repeat: no-repeat; background-size: cover !important; background-position: 0 0;">
                    <div class="container" style="padding-top: 150px;">
                        <h1 class="display-4 text-light font-weight-bold font-sora">Ready to Explore <br> Lombok Destination</h1>
                        <p class="lead text-light fs-6 lh-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Praesentium aliquid vel repellat cumque iste eveniet ullam</p>
                        <a href="#content" target="_self">
                            <button type="submit" class="btn btn-dark mt-4" style="background-color: #C37B52; border: 0px; border-radius: 0px; text-align: center; width: 120px; height: 48px;">Explore<span><img src="img/btn-arrow.svg" class="pl-2" alt=""></span></button>
                        </a>
                        <a href="https://www.youtube.com/watch?v=wM1TK0eCJoo">
                            <button type="submit" class="btn btn-dark ml-3 bg-transparent mt-4" style="border: 0px; border-radius: 0px; text-align: center; height: 50px;"><span><img src="img/play.svg" alt="" class="pr-2"></span> Watch Video</button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/bck.png); background-repeat: no-repeat; background-size: cover !important; background-position: 0 0;">
                    <div class="container" style="padding-top: 150px;">
                        <h1 class="display-4 text-light font-weight-bold font-sora">Ready to Explore <br> Lombok Destination</h1>
                        <p class="lead text-light fs-6 lh-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Praesentium aliquid vel repellat cumque iste eveniet ullam</p>
                        <a href="#porto">
                            <button type="submit" class="btn btn-dark mt-4" style="background-color: #C37B52; border: 0px; border-radius: 0px; text-align: center; width: 120px; height: 48px;">Explore<span><img src="img/btn-arrow.svg" class="pl-2" alt=""></span></button>
                        </a>
                        <a href="#about">
                            <button type="submit" class="btn btn-dark ml-3 bg-transparent mt-4" style="border: 0px; border-radius: 0px; text-align: center; height: 50px;"><span><img src="img/play.svg" alt="" class="pr-2"></span> Watch Video</button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/un.png); background-repeat: no-repeat; background-size: cover !important; background-position: 0 0;">
                    <div class="container" style="padding-top: 150px;">
                        <h1 class="display-4 text-light font-weight-bold font-sora">Ready to Explore <br> Lombok Destination</h1>
                        <p class="lead text-light fs-6 lh-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Praesentium aliquid vel repellat cumque iste eveniet ullam</p>
                        <a href="#porto">
                            <button type="submit" class="btn btn-dark mt-4" style="background-color: #C37B52; border: 0px; border-radius: 0px; text-align: center; width: 120px; height: 48px;">Explore<span><img src="img/btn-arrow.svg" class="pl-2" alt=""></span></button>
                        </a>
                        <a href="#about">
                            <button type="submit" class="btn btn-dark ml-3 bg-transparent mt-4" style="border: 0px; border-radius: 0px; text-align: center; height: 50px;"><span><img src="img/play.svg" alt="" class="pr-2"></span> Watch Video</button>
                        </a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next justify-content-end" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="explore-overlay mt-5">
                <a href="#about">
                    <img src="img/explore-sekarang.svg" class="" alt=" ">
                </a>
            </div>
        </div>
    </section>

    <!-- <section id="about" class="about ">
        <div class="container ">
            <div class="row ">
                <div class="col text-center ">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row text-justify justify-content-center ">
                <div class="col-md-5 ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur in at beatae. Corporis, aut? Rerum voluptatibus eos molestias error sunt eligendi magni fuga doloribus hic, iure ex obcaecati possimus aspernatur consectetur incidunt
                        qui nemo eius magnam culpa totam perferendis eveniet deserunt. </p>
                </div>
                <div class="col-md-5 ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, illo. Sunt iure iusto asperiores tempore minima est, blanditiis deleniti ducimus maiores ratione magni ex commodi ipsum earum dolorem ab rerum quo, esse cumque optio
                        sapiente neque eum recusandae culpa. Consequuntur, iusto delectus enim illum exercitationem sapiente excepturi ducimus odit tempore iure, amet impedit eius expedita fuga dolores! </p>
                </div>
            </div>
        </div>
    </section> -->

    <section class="content " id="content" style="background-image: url(img/sec2-beranda.svg); height:850px; ">
        <div class=" container ">
            <div class="row pt-80">
                <div class="col-lg-6 ">
                    <div class="subtitle ">
                        <img src="img/border.svg" class="pr-3" alt=" ">
                        <h6 class="d-inline-block">EXPLORE NOW</h6>
                    </div>
                    <h1 class="font-sora">Explore Place Around You Lets See</h1>
                </div>
                <div class="col-lg-6 d-flex justify-content-end pt-5 ">
                    <span><img src="img/arrow-left.svg "class="mr-3 " alt=" "></span>

                    <span><img src="img/arrow-right.svg " alt=" "></span>
                </div>
            </div>

            <div class="row pt-40 d-flex flex-row flex-nowrap">
                <div class="col-lg-4 image ">
                    <img src="img/sec2-1.png " class="img-sec2 image-img " alt="... ">
                    <div class="img-overlay">
                        <h3>Pantai Mangsit</h3>
                        <p class="fw-1">Kerandangan, Lombok Barat</p>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <img src="img/sec2-2.png " class="img-sec2 " alt="... ">
                </div>
                <div class="col-lg-4 ">
                    <img src="img/sec2-3.png " class="img-sec2 " alt="... ">
                </div>
            </div>
        </div>
    </section>
    @foreach ($pariwisatas as $pariwisata)
    <div class="col-lg-4 child image">
        <img src="storage/{{ $pariwisata->image }} " class="img-sec2 image-img" alt="... ">
        <div class="img-overlay">
            <h3>{{ $pariwisata->nama }}</h3>
            <p class="fw-1">{{ $pariwisata->kecamatan, $pariwisata->kabupaten }}</p>
        </div>
    </div>
    @endforeach
    <section class="info" id="info">
        <div class="container py-80">
            <div class="row">
                <div class="col-md-6">
                    <div class="row pb-2">
                        <div class="col-md-4">
                            <img src="img/sec3-4.png" alt="">
                        </div>
                        <div class="col-md-8 pl-4">
                            <img src="img/sec3-3.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <img src="img/sec3-2.png" alt="">
                        </div>
                        <div class="col-md-4 p-0" style="margin-left: -80px;">
                            <img src="img/sec3-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="subtitle ">
                        <img src="img/border.svg" class="pr-3" alt=" ">
                        <h6 class="d-inline-block">EXPLORE NOW</h6>
                    </div>
                    <h1 class="font-sora">Explore Place Around You Lets See</h1>
                    <p style="line-height: 1.5rem;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, ullam. Quo quaerat minus deserunt iure odio dolores, mollitia inventore ullam sequi nam deleniti nostrum expedita, possimus quia id tempora accusamus.</p>
                    <div class="row text-white p-3" style="background-color: #1A776F;">
                        <div class="col p-3 border-right">
                            <h3 class="mb-0">21+</h3>
                            <p class="mb-0">Lorem</p>
                        </div>
                        <div class="col p-3 border-right">
                            <h3 class="mb-0">21+</h3>
                            <p class="mb-0">Lorem</p>
                        </div>
                        <div class="col p-3">
                            <h3 class="mb-0">21+</h3>
                            <p class="mb-0">Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a href="" class="text-black-50 text-decoration-none"> -->
            <div class="loc-lombok text-center py-3 ">
                <p class="m-0 fs-3 "><span><img src="img/location.svg " alt=" " style="margin-bottom: 6px; "></span> Lombok</p>
            </div>
            <!-- </a> -->
        </div>
    </section>

    <!-- byun baekhyun saranghae <3 -->

    
    <form action="/" method="post">
        @csrf
    <section class="saran" id="saran" style="background-color: #F5F3EB;">
        <div class="container py-80">
            <div class="row">
                <div class="col-md-6">
                    <div class="subtitle ">
                        <img src="img/border.svg" class="pr-3" alt=" ">
                        <h6 class="d-inline-block">Kritik dan Saran</h6>
                    </div>
                    <h1 class="font-sora m-0">Enjoy Explore need</h1>
                </div>
                <div class="col-md-6">
                        @if(session()->has('SaranSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('SaranSuccess') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control border-radius-none h-40 fs-14px" id="name" name="name"aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-radius-none h-40 fs-14px" id="email" name="email"aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group pb-4">
                            <textarea class="form-control border-radius-none" id="saran" name="saran" rows="3" placeholder="Saran"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block border-radius-none border-none h-40 fs-14px btn-brown">Submit</button>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <section class="footer " id="footer">
        <div class="container py-3 ">
            <div class="row ">
                <div class="col py-3 ">
                    <p class="mb-0 p-0 " style="font-size: 12px; ">2020 © All Right Reserved.</p>
                </div>
                <div class="col p-0 justify-content-md-center py-1 ">
                    <div class="float-right ">
                        <span><img src="img/instagram.svg " alt=" "></span>
                        <span class="ml-3 "><img src="img/facebook.svg " alt=" "></span>
                        <span class="ml-3 "><img src="img/youtube.svg " alt=" "></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <!-- Bootsrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>

    <script>
        $('.carousel').carousel()
        $('.carousel').carousel({
            interval: 0
        })

        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        $(window).scroll(function() {
            $('a').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        $(window).scroll(function() {
            $('button').toggleClass('scrolled', $(this).scrollTop() > 200);
        });
    </script>

</body>