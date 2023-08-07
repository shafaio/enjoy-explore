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
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/logo.svg" type="image/x-icon" />
    <title>Document</title>
</head>

<body>
    @include('partials.navbar')

    <section>
        <div class="jumbotron jumbotron-fluid" style="background-image: url(/img/background-profile.png); background-repeat: no-repeat; background-size: cover; height: 400px;">
            <div class="container">
                <div class="row" style="margin-top: 220px; height: 208px;">
                    <div class="col-2">
                        <img src="/img/photo-profile.png" alt="" class="position-absolute">
                    </div>
                    <div class="col-6">
                        <div class="position-absolute" style="bottom: 35px;">
                            <h4 class="m-0">Nur Zendaya</h4>
                        </div>
                    </div>
                    <div class="col-4 pr-0">
                        <div class="position-absolute" style="bottom: 0; right: 0;">
                            <a href="/dashboard/edit">
                                <button type="button" class="btn align-middle btn-edit-profile float-right fw-normal p-0" style="bottom: 0;">Edit Profile</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-230">
        <div class="container">
            <div class="row justify-content-center" style="background-color: #F5F3EB;">
                <div class="col-6">
                    <div class="row py-4">
                        <div class="col-lg-3 border-right border-2">
                            <h3 class="mb-0 pl-5">21+</h3>
                            <p class="mb-0 pl-5">Lorem</p>
                        </div>
                        <div class="col-lg-3 border-right border-2">
                            <h3 class="mb-0 pl-5">21+</h3>
                            <p class="mb-0 pl-5">Lorem</p>
                        </div>
                        <div class="col-lg-3">
                            <h3 class="mb-0 pl-5">21+</h3>
                            <p class="mb-0 pl-5">Lorem</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-auto pr-4">
                    <a href="pariwisata/submit">
                        <button class="btn ml-3 px-4 h-40 fs-7 btn-masuk border-radius-none float-right m-0 m-auto btn-brown baybay">Tambah Pariwisata</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-230">
            <div class="row mb-4 p-0">
                <div class="d-flex p-0">
                    <h3 class="m-0 p-0 fw-600" style="font-size: 32px;">ULASAN</h3>
                    <div class="box-ulasan text-center my-auto ml-3">0</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row bg-blue p-3 mr-1 mb-4">
                        <div class="col-3">
                            <div class="card border-radius-none border-none pt-2 pl-2 pr-2">
                                <img src="/img/rating-profile-1.png" style="height: 100px; width: 113px;" class="card-img-top border-radius-none" alt="...">
                                <div class="card-body p-0 py-2">
                                    <p class="card-text fs-10px font-sora">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <span><img src="/img/star-profile.svg" alt=""></span>
                            <p class="m-0 fs-14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quos ad iure, adipisci culpa fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo asperiores veniam quisquam unde perferendis ex explicabo, isteaccusamussaepe,
                                eum officia totam nostrum expedita fugiat cum illum nulla nobis aliquid.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row bg-blue p-3 ml-1">
                        <div class="col-3">
                            <div class="card border-radius-none border-none pt-2 pl-2 pr-2">
                                <img src="/img/rating-profile-1.png" style="height: 100px; width: 113px;" class="card-img-top border-radius-none" alt="...">
                                <div class="card-body p-0 py-2">
                                    <p class="card-text fs-10px font-sora">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <span><img src="/img/star-profile.svg" alt=""></span>
                            <p class="m-0 fs-14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quos ad iure, adipisci culpa fuga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row bg-blue p-3 mr-1 mb-4">
                        <div class="col-3">
                            <div class="card border-radius-none border-none pt-2 pl-2 pr-2">
                                <img src="/img/rating-profile-1.png" style="height: 100px; width: 113px;" class="card-img-top border-radius-none" alt="...">
                                <div class="card-body p-0 py-2">
                                    <p class="card-text fs-10px font-sora">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <span><img src="/img/star-profile.svg" alt=""></span>
                            <p class="m-0 fs-14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quos ad iure, adipisci culpa fuga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row bg-blue p-3 ml-1">
                        <div class="col-3">
                            <div class="card border-radius-none border-none pt-2 pl-2 pr-2">
                                <img src="/img/rating-profile-3.png" style="height: 100px; width: 113px;" class="card-img-top border-radius-none" alt="...">
                                <div class="card-body p-0 py-2">
                                    <p class="card-text fs-10px font-sora">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <span><img src="/img/star-profile.svg" alt=""></span>
                            <p class="m-0 fs-14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quos ad iure, adipisci culpa fuga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row bg-blue p-3 mr-1 mb-4">
                        <div class="col-3">
                            <div class="card border-radius-none border-none pt-2 pl-2 pr-2">
                                <img src="/img/rating-profile-1.png" style="height: 100px; width: 113px;" class="card-img-top border-radius-none" alt="...">
                                <div class="card-body p-0 py-2">
                                    <p class="card-text fs-10px font-sora">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <span><img src="/img/star-profile.svg" alt=""></span>
                            <p class="m-0 fs-14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quos ad iure, adipisci culpa fuga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row bg-blue p-3 ml-1">
                        <div class="col-3">
                            <div class="card border-radius-none border-none pt-2 pl-2 pr-2">
                                <img src="/img/rating-profile-2.png" style="height: 100px; width: 113px;" class="card-img-top border-radius-none" alt="...">
                                <div class="card-body p-0 py-2">
                                    <p class="card-text fs-10px font-sora">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <span><img src="/img/star-profile.svg" alt=""></span>
                            <p class="m-0 fs-14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quos ad iure, adipisci culpa fuga.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="p-0 text-end mb-3">Lihat Semua</p>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <div class="d-flex p-0">
                        <h3 class="m-0 p-0 fw-600" style="font-size: 32px;">FOTO</h3>
                        <div class="box-ulasan text-center my-auto ml-3">0</div>
                    </div>
                </div>
            </div>
            <div class="">
                <button type="button" class="btn btn-brown border-radius-999 mr-2 h-40 fs-7 year">2022</button>
                <button type="button" class="btn btn-border-brown border-radius-999 mr-2 h-40 fs-7 year">2021</button>
                <button type="button" class="btn btn-border-brown border-radius-999 mr-2 h-40 fs-7 year">2020</button>
            </div>
            <hr class="color-2323">
        </div>
    </section>

    <section class="footer mt-230" id="footer">
        <div class="container py-3">
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
            $('button').toggleClass('scrolled', $(this).scrollTop() > 200);
        });
    </script>
</body>

</html>