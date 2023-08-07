<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark nav-pd">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/img/arrow-left.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> Enjoy Explore
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mr-3 fs-7">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3 fs-7 active">
                    <a class="nav-link {{ ($title === "Pariwisata") ? 'active' : '' }}" href="/pariwisata/index">Pariwisata</a>
                </li>
                <li class="nav-item mr-3 fs-7">
                    <a class="nav-link {{ ($title === "TentangKami") ? 'active' : '' }}" href="/TentangKami">Tentang Kami</a>
                </li>
            </ul>
        </div>
        @auth
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle bg-transparent border-none baybay" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                <span><img src="/img/logoProfile.svg" alt=""></span>
            </a>
            <div class="dropdown-menu border-radius-none" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" style="font-size: 14px;" href="/dashboard">
                    <span>
                        <img src="/img/drop-down-profile.svg" alt="" class="my-auto pr-2"> 
                    </span> Profile
                </a>
                <a class="dropdown-item" style="font-size: 14px;" href="/dashboard/edit">
                    <button type="submit" class="dropdown-item " style="font-size: 14px;">
                        <span>
                            <img src="/img/drop-down-edit-profile.svg" alt="" class="my-auto pr-2"> 
                        </span> Edit Profile
                    </button>
                </a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item" style="font-size: 14px;" >
                        <span>
                            <img src="/img/drop-down-logout.svg" alt="" class="my-auto pr-2"> 
                        </span> Keluar
                    </button>
                </form>
            </div>
        </div>
        @else
        <a href="login">
            <button class="btn ml-3 px-4 h-40 fs-7 btn-masuk text-white border-radius-none">Masuk</button>
        </a>
        <a href="register">
            <button class="btn ml-3 px-4 h-40 fs-7 btn-white text-white">Daftar</button>
        </a>
        @endauth
    </div>
</nav>