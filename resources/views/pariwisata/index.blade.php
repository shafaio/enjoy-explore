<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/logo.svg" type="image/x-icon" />
    <title>Detail</title>
</head>

<body>
    @include('partials.navbar')
    <section class="content" id="content">
        <div class="jumbotron jumbotron-fluid m-0" style="background-image: url(/img/tom-bixler-9CAa-_XbD6I-unsplash.jpg); height: 100vh; background-size: cover !important;">
            <div class="container" style="padding-top: 150px;">
                <h1 class="display-1 text-white font-sora font-weight-bold m-0" style="line-height: 6rem;">Pantai <br> Mangsit</h1>
                <p class="lead text-white pl-1" style="font-size: 14px;">This is a modified jumbotron that occupies <br> the entire horizontal space of its parent.</p>
            </div>
        </div>
    </section>

    <section class="fasility" id="fasility" style="background-image: url(/img/half.svg); height: 320px;">
        <div class="container">
            <div class="row pt-80">
                <div class="col-md-6">
                    <p>01</p>
                    <h1 class="display-3 font-sora fw-600">Fasilitas</h1>
                </div>
                <div class="col-md-6 d-flex justify-content-end my-auto">
                    <div>
                        <button class="btn baybay" onclick="scrollr()"><span><img src="/img/Group 24.svg"class="" alt=" "></span></button>
                        <button class="btn baybay" onclick="scrolll()"><span><img src="/img/Group 25.svg" alt=" "></span></button>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex flex-row flex-nowrap overflow-hidden scroll-smooth scroll-image cover">
                <div class="col-md-3 child">
                    <div class="card card-hover">
                        <img class="card-img-top" src="/img/carddetail1.jpg" alt="Card image cap">
                        <div class="obj-overlay d-flex justify-content-center">
                            Mushola
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="/img/bananaBoat.jpg" alt="Banana Boat">
                        <div class="obj-overlay justify-content-center">
                            Banana Boat
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="/img/restaurant.jpg" alt="Card image cap">
                        <div class="obj-overlay justify-content-center">
                            Restaurant
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="/img/penginapan.jpg" alt="Card image cap">
                        <div class="obj-overlay justify-content-center">
                            Penginapan
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="/img/penginapan.jpg" alt="Card image cap">
                        <div class="obj-overlay justify-content-center">
                            Home Stay
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card card-hover">
                        <img class="card-img-top" src="/img/carddetail1.jpg" alt="Card image cap">
                        <div class="obj-overlay d-flex justify-content-center">
                            Mushola
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="/img/bananaBoat.jpg" alt="Banana Boat">
                        <div class="obj-overlay justify-content-center">
                            Banana Boat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form action="/pariwisata" method="post" enctype="multipart/form-data">
        @csrf
        <section class="kontribusi" id="kontribusi" style="margin-top: 360px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- image -->
                        <div>
                            <img src="/img/kontribusi-people.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row mb-5">
                            <div class="col">
                                <p>02</p>
                                <h1 class="display-3 font-sora fw-600">Kontribusi</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row mb-5">
                                <div class="col-4">
                                    <div class="circle-kontribusi border-radius-999 fs-32 text-center" style="padding-top: 20px;">
                                        01
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h5>Unggah Foto</h5>
                                    <div class="form-group pb-4">
                                        <input class="form-control border-radius-none fs-14px baybay" type="file" id="image" name="image" accept="image/jpg, image/jpeg, image/png" style="border: 0.5px dashed; border-color: #9794A5;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-4">
                                    <div class="circle-kontribusi border-radius-999 fs-32 text-center" style="padding-top: 20px;">
                                        02
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h5>Beri Ulasan</h5>
                                    <div class="form-group pb-4">
                                        <textarea class="form-control border-radius-none baybay" id="exampleFormControlTextarea1" rows="3" placeholder="Saran"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-4">
                                    <div class="circle-kontribusi border-radius-999 fs-32 text-center" style="padding-top: 20px;">
                                        03
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h5>Beri Rating</h5>
                                    <div class="form-group pb-4">
                                        <input class="form-control border-radius-none fs-14px baybay" type="file" id="formFile" accept="image/jpg, image/jpeg, image/png" style="border: 0.5px dashed; border-color: #9794A5;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <setion class="rating" id="rating">
        <div class="container pt-40 mt-230">
            <div class="row mb-5">
                <div class="col-md-6">
                    <p>03</p>
                    <h1 class="display-3 font-sora fw-600">Ulasan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- rating -->
                    <div class="row">
                        <div class="col-1 m-0 my-auto">
                            <h5 style="font-size: 28px;" class="m-0">3.0</h5>
                        </div>
                        <div class="col-5 ml-3 pr-0 my-auto">
                            <img src="/img/half-rating.svg" alt="">
                        </div>
                        <div class="col-2 p-0 my-auto">
                            <p class="fw-bold m-0" style="font-size: 14px;">127&nbsp;ulasan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row border-bottom-04 mb-5">
                        <div class="col-md-2">
                            <img src="/img/profile-ulasan.png" alt="" class="rounded-circle">
                        </div>
                        <div class="col-md-10">
                            <h4 class="color-2323">Fahri</h4>
                            <div class="mb-4 color-2323">
                                <p class="d-inline m-0">Mataram,</p>
                                <p class="d-inline m-0">Indonesia</p>
                                <p class="d-inline m-0">ulasan</p>
                                <p class="d-inline m-0">foto</p>
                            </div>
                            <span><img src="/img/rating-star.svg" alt=""></span>
                            <p class="mt-2 color-02">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sequi, eveniet excepturi eum magnam alias neque reprehenderit! Neque illo assumenda est hic asperiores deserunt eaque porro totam, ex ipsa nam.</p>
                            <div class="mb-5">
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom-04 mb-5">
                        <div class="col-md-2">
                            <img src="/img/profile-ulasan-2.png" alt="" class="rounded-circle">
                        </div>
                        <div class="col-md-10">
                            <h4 class="color-2323">Inem</h4>
                            <div class="mb-4 color-2323">
                                <p class="d-inline m-0">Mataram,</p>
                                <p class="d-inline m-0">Indonesia</p>
                                <p class="d-inline m-0">ulasan</p>
                                <p class="d-inline m-0">foto</p>
                            </div>
                            <span><img src="/img/rating-star.svg" alt=""></span>
                            <p class="mt-2 color-02">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sequi, eveniet excepturi eum magnam alias neque reprehenderit! Neque illo assumenda est hic asperiores deserunt eaque porro totam, ex ipsa nam.</p>
                            <div class="mb-5">
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom-04 mb-5">
                        <div class="col-md-2">
                            <img src="/img/profile-ulasan.png" alt="" class="rounded-circle">
                        </div>
                        <div class="col-md-10">
                            <h4 class="color-2323">Fahri</h4>
                            <div class="mb-4 color-2323">
                                <p class="d-inline m-0">Mataram,</p>
                                <p class="d-inline m-0">Indonesia</p>
                                <p class="d-inline m-0">ulasan</p>
                                <p class="d-inline m-0">foto</p>
                            </div>
                            <span><img src="/img/rating-star.svg" alt=""></span>
                            <p class="mt-2 color-02">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sequi, eveniet excepturi eum magnam alias neque reprehenderit! Neque illo assumenda est hic asperiores deserunt eaque porro totam, ex ipsa nam.</p>
                            <div class="mb-5">
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2">
                            <img src="/img/profile-ulasan-2.png" alt="" class="rounded-circle">
                        </div>
                        <div class="col-md-10">
                            <h4 class="color-2323">Inem</h4>
                            <div class="mb-4 color-2323">
                                <p class="d-inline m-0">Mataram,</p>
                                <p class="d-inline m-0">Indonesia</p>
                                <p class="d-inline m-0">ulasan</p>
                                <p class="d-inline m-0">foto</p>
                            </div>
                            <span><img src="/img/rating-star.svg" alt=""></span>
                            <p class="mt-2 color-02">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sequi, eveniet excepturi eum magnam alias neque reprehenderit! Neque illo assumenda est hic asperiores deserunt eaque porro totam, ex ipsa nam.</p>
                            <div class="mb-5">
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                                <div class="kotak d-inline-block mr-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </setion>

    <section class="footer " id="footer">
        <div class="container py-3 ">
            <div class="row ">
                <div class="col py-3 ">
                    <p class="mb-0 p-0 " style="font-size: 12px; ">2020 © All Right Reserved.</p>
                </div>
                <div class="col p-0 justify-content-md-center py-1 ">
                    <div class="float-right ">
                        <span><img src="/img/instagram.svg " alt=" "></span>
                        <span class="ml-3 "><img src="/img/facebook.svg " alt=" "></span>
                        <span class="ml-3 "><img src="/img/youtube.svg " alt=" "></span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

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
            $('a').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        $(window).scroll(function() {
            $('button').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        function scrolll() {
            var left = document.querySelector(".scroll-image");
            left.scrollBy(window.innerHeight, 0)
        }

        function scrollr() {
            var right = document.querySelector(".scroll-image");
            right.scrollBy(-window.innerHeight, 0)
        }
    </script>
</body>

</html>
