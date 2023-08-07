<!DOCTYPE html>
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
    <link rel="icon" href="img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <title>Daftar</title>
    <style>
        * {
            font-family: 'Poppins';
        }
        
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <section class="register" id="register">
        <div class="container-fluid p-0">
            <div class="row px-0 mx-0">
                <div class="col-md-6 px-182 my-auto">
                    <h3 class=" display-6 mb-5">Daftar</h3>
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama </label>
                            <input type="text" name="name"class="form-control @error('name') is-invalid @enderror border-radius-none h-40 fs-14px" id="name" aria-describedby="emailHelp" placeholder="Nama Lengkap" required value={{ old('name') }}>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror 
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror border-radius-none h-40 fs-14px" id="username" placeholder="Username" required value={{ old('username') }}>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror 
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror border-radius-none h-40 fs-14px" id="email" aria-describedby="email" placeholder="Email" required value={{ old('email') }}>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror 
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror border-radius-none h-40 fs-14px" id="password" placeholder="Password" required value={{ old('password') }}>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror 
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror border-radius-none h-40 fs-14px" id="confirm_password" placeholder="Confirm Password" required value={{ old('confirm_password') }}>
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror 
                        </div>
                        <div class="form-check p-0">
                            <input type="checkbox" name="" id="verify">
                            <label for="verify" class="fs-14px m-0 ">Saya menyetujui syarat dan ketentuan.</label>
                        </div>
                        <p class="text-center mt-3">Sudah punya akun? <a href="login" class="text-decoration-none fw-bold" style="color: #C37B52;">Login</a></p>
                        <button type="submit" class="btn btn-primary btn-block border-radius-none border-none h-40 fs-14px" style="background-color: #C37B52;;">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 px-0 d-none d-md-block">
                    <img src="img/rightbck.png" alt="" style="width: 100%; height: 100vh; object-fit: cover; object-position: right;">
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
</body>
</html>