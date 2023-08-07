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
    <title>{{ $title }}</title>
</head>

<body>
    @include('partials.navbar')
    <form action="/dashboard/edit" method="post">
    @csrf
    <section>
        <div class="container">
            <div class="row mt-84">
                <div class="col-3">
                    <div class="list-group">
                        <a href="#informasi-akun" class="list-group-item list-group-item-action active " aria-current="true">Informasi Akun</a>
                        <a href="#keamanan" class="list-group-item list-group-item-action">Keamanan</a>
                        <a href="#data-diri" class="list-group-item list-group-item-action">Data Diri</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="jumbotron jumbotron-fluid" style="background-image: url(/img/background-profile.png); background-repeat: no-repeat; background-size: cover; height: 400px;">
                        <div class="row" style="margin-top: 220px; height: 208px;">
                            <div class="col-3 pl-5">
                                <img src="/img/photo-profile.png" alt="" class="position-absolute">
                            </div>
                            <div class="col-5">

                            </div>
                            <div class="col-4" style="bottom: 0;">
                                <div class="position-absolute" style="bottom: 0; right: 12.5px;">
                                    <button type="button" class="btn align-middle btn-edit-profile fw-normal p-0 ml-3 btn-brown float-right" style="bottom: 0; background-color: #C37B52 !important;">Simpan</button>
                                    <button type="button" class="btn align-middle btn-edit-profile fw-normal p-0 float-right" style="bottom: 0;">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5" style="margin-top: 200px !important;">
                        <h6 class="m-0 fw-bold" style="font-size: 20px;" id="informasi-akun">Informasi Akun</h6>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama" required value={{ old('name') }}>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Username</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="username" name="username" aria-describedby="emailHelp" placeholder="Username" required value={{ old('username') }}>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Email</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="email" class="form-control border-radius-none h-40 fs-14px baybay" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required value={{ old('email') }}>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 mt-5">
                        <h6 class="m-0 fw-bold" style="font-size: 20px;" id="keamanan">Ganti Password</h6>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Password Sekarang</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="currentpassword" name="currentpassword" aria-describedby="emailHelp" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Password Baru</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="password" name="password" aria-describedby="emailHelp" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Konfirmasi Password</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="confirm_password" name="confirm_password" aria-describedby="emailHelp" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 mt-5">
                        <h6 class="m-0 fw-bold" style="font-size: 20px;" id="data-diri">Data Diri</h6>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Nomor Telepon</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="no_hp" name="no_hp" aria-describedby="emailHelp" placeholder="Nomer Telepon">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Alamat</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>

    <section class="footer " id="footer" style="margin-top: 100px;">
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
            $('button').toggleClass('scrolled', $(this).scrollTop() > 200);
        });
    </script>
</body>

</html>