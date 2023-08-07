<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/logo.svg" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <title>Enjoy Explore</title>
</head>

<body>
    @include('partials.navbar')
    <form action="/pariwisata/update" method="post" enctype="multipart/form-data">
        @csrf
    <section>
        <div class="jumbotron jumbotron-fluid" style="background-image: url(/img/background-profile.png); background-repeat: no-repeat; background-size: cover; height: 400px;">
        </div>
    </section>
    
    <section>
        <div class="container my-3">
            <div class="row">
                <div class="col-4 pr-5">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active " aria-current="true">Informasi Pariwisata</a>
                        <a href="#upload" class="list-group-item list-group-item-action">Lokasi Pariwisata</a>
                        <a href="#" class="list-group-item list-group-item-action">Fasilitas Pariwisata</a>
                        <a href="#" class="list-group-item list-group-item-action">Data Diri</a>
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                    </div>
                </div>
                <div class="col-8 pl-5">
                        <div class="row mb-5">
                            <h6 class="m-0 fw-bold">Informasi Pariwisata</h6>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-9">
                                <input class="form-control border-radius-none fs-14px baybay" type="file" id="image" name="image1" accept="image/jpg, image/jpeg, image/png" style="border: 0.5px dashed; border-color: #9794A5;">
                            </div>
                            {{-- <div class="input-group control-group increment" >
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn"> 
                                  <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                              </div>
                              <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                  <input type="file" name="filename[]" class="form-control">
                                  <div class="input-group-btn"> 
                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                  </div>
                                </div>
                              </div> --}}
                        </div>
                        <div class="mb-5">
                            <div class="kotak d-inline-block mr-2"></div>
                            <div class="kotak d-inline-block mr-2"></div>
                            <div class="kotak d-inline-block mr-2"></div>
                            <div class="kotak d-inline-block mr-2"></div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Nama</label>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                     </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Deskripsi</label>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <div class="form-group pb-2">
                                        <div id="summernote" class="border-radius-none"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row mb-5">
                            <h6 class="m-0 fw-bold">Lokasi Pariwisata</h6>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Alamat</label>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                     </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Nama</label>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Nama">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Kecamatan</label>
                            </div>
                            <div class="col-9">
                                <select id="disabledSelect" class="form-select border-radius-none baybay h-40">
                                    <option>--Kecamatan--</option>
                                    <option>Opp</option>
                                    <option>App</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Kabupaten</label>
                            </div>
                            <div class="col-9">
                                <select id="disabledSelect" class="form-select border-radius-none baybay h-40">
                                    <option>--Kabupaten/Kota--</option>
                                    <option>Lombok Barat</option>
                                    <option>Lombok Utara</option>
                                    <option>Lombok Timur</option>
                                    <option>Lombok Tengah</option>
                                    <option>Mataram</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <h6 class="m-0 fw-bold">Fasilitas</h6>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label for="">Fasilitas</label>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="fasilitas" name="fasilitas" aria-describedby="emailHelp" placeholder="Fasilitas">
                                    @error('fasilitas')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                     </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block border-radius-none border-none h-40 fs-14px" style="background-color: #1cc51c;">Update</button>
                </div>
            </div>
        </div>
    </section>
</form>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <!-- Bootsrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Deskripsi',
            tabsize: 2,
            height: 100
        });
    </script>

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
