<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
        <div class="container w-100 m-xl-auto ">
            <a class="navbar-brand p-0" href="#">
                <img src="./img/logo.svg" width="53%" height="" alt="" class="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active d-flex justify-content-center">
                        <button type="button" class="btn mr-3 mt-2 mt-lg-0">
                            <a class="nav-link px-1 w-100" href="#">Blog <span class="sr-only">(current)</span></a>
                        </button>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <button type="button" class="btn mr-3 mt-2 mt-lg-0">
                            <a class="nav-link d-flex justify-content-center  px-1 w-100" href="#">Protfolio</a>
                        </button>
                    </li>
                    <li class="nav-item d-flex justify-content-center  px-1 w-100">
                        <button type="button" class="btn mr-3 mt-2 mt-lg-0">
                            <a class="nav-link" href="#">About</a>
                        </button>
                    </li>
                    <li class="nav-item d-flex justify-content-center  px-1 w-100">
                        <button type="button" class="btn mr-3 mt-2 mt-lg-0">
                            <a class="nav-link" href="#">Contact</a>
                        </button>
                    </li>
                    <li class="nav-item d-flex justify-content-center ">
                        <a class="nav-link d-flex" href="./2021-04-23 Bootstrap(????????????) cart-1.html">
                            <i class="fas fa-shopping-cart mr-2"></i>
                        </a>
                        <div class="dropdown">
                            <a class="nav-link d-flex " href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item login" href="./2021-04-23 Bootstrap(????????????) login.html">Login</a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container my-container">
            <div class="row mx-auto cart-page no-gutters">
                @yield('cart-content')
            </div>
        </div>

    </main>

    <footer class="mt-5">
        <div class="container">
            <div class="row d-flex justify-content-between  no-gutters mb-5 " id="fat-footer">
                <!--no gutters????????? col????????????(*?????????)-->
                <div class="col-md-4 mb-5 d-flex justify-content-around">
                    <div
                        class="row h-100 px-5 px-lg-5 fat-f-left d-flex justify-content-md-start justify-content-center align-content-center ">
                        <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #162446;
                                    }

                                    .cls-2 {
                                        fill: #fff;
                                    }

                                </style>
                            </defs>
                            <title>?????? 2</title>
                            <g id="??????_2" data-name="?????? 2">
                                <g id="??????_1-2" data-name="?????? 1">
                                    <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                    <path class="cls-2"
                                        d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <h5 class="mt-2 ml-2">????????????</h5>
                        <span class="text-md-left text-center mb-md-5 mt-2 px-5 pr-5 pl-md-0">Air plant banjo lyft
                            occupy retro adaptogen indego</span>
                    </div>
                </div>
                <div class="col-md-8 d-flex flex-row flex-wrap">
                    <div
                        class="col-lg-3 col-md-6 col-12 d-flex align-items-center justify-content-center justify-content-md-start mb-5">
                        <ul class="list-group d-flex flex-column align-content-center ml-md-5">
                            <li class="list-group-item border-0 p-0 mb-3"> CATEGORIES</li>
                            <li class="list-group-item border-0 p-0">First Link</li>
                            <li class="list-group-item border-0 p-0">Second Link</li>
                            <li class="list-group-item border-0 p-0">Third Link</li>
                            <li class="list-group-item border-0 p-0">Fourth Link</li>
                        </ul>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start mb-5">
                        <ul class="list-group d-flex flex-column align-content-center ml-md-5">
                            <li class="list-group-item border-0 p-0 mb-3"> CATEGORIES</li>
                            <li class="list-group-item border-0 p-0">First Link</li>
                            <li class="list-group-item border-0 p-0">Second Link</li>
                            <li class="list-group-item border-0 p-0">Third Link</li>
                            <li class="list-group-item border-0 p-0">Fourth Link</li>
                        </ul>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start mb-5">
                        <ul class="list-group d-flex flex-column align-content-center ml-md-5">
                            <li class="list-group-item border-0 p-0 mb-3"> CATEGORIES</li>
                            <li class="list-group-item border-0 p-0">First Link</li>
                            <li class="list-group-item border-0 p-0">Second Link</li>
                            <li class="list-group-item border-0 p-0">Third Link</li>
                            <li class="list-group-item border-0 p-0">Fourth Link</li>
                        </ul>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start mb-5">
                        <ul class="list-group d-flex flex-column align-content-center ml-md-5">
                            <li class="list-group-item border-0 p-0 mb-3"> CATEGORIES</li>
                            <li class="list-group-item border-0 p-0">First Link</li>
                            <li class="list-group-item border-0 p-0">Second Link</li>
                            <li class="list-group-item border-0 p-0">Third Link</li>
                            <li class="list-group-item border-0 p-0">Fourth Link</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 bg-b-footer m-0">
            <div class="container">
                <div
                    class="row bottom-footer d-flex flex-column align-content-center flex-md-row  justify-content-md-between">
                    <div class="col-sm-6">
                        <p class="my-2 text-center text-md-left ">?? 2020 Tailblocks ??? @knyttneve</p>
                    </div>
                    <div
                        class="col-3 col-sm-2 d-flex justify-content-center justify-content-md-end mb-2 mb-md-0 mx-auto mx-md-0">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5 mr-1 mr-md-2" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5 mr-1 mr-md-2" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5 mr-1 mr-md-2" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </footer>












    @yield('calc-js')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>


</body>

</html>
