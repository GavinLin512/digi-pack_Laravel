@extends('template.index_template')

@section('title', '首頁')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">
@endsection

@section('main')
    <main>
        <section class="section-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-davys-grey-solid-color-background.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="section-2">
            <div class="container my-container">
                <div class="row d-flex flex-column ">
                    <h2 class="text-center mt-5">Raw Denim Heirloom Man Braid</h2>
                    <p class="text-center w-50 mt-2 mx-auto under-line">Blue bottle crucifix vinyl post-ironic four
                        dollar
                        toast
                        vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
                </div>
                <div class="card-group mt-md-5 d-flex flex-column flex-md-row ">
                    <div class="card border-0 mt-5 mt-md-0">
                        <div
                            class="circle rounded-circle text-center mx-auto mt-5 mb-1 d-flex justify-content-center align-items-center ">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" width="40px" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center ">Shooting Stars</h5>
                            <p class="card-text text-center ">Blue bottle crucifix vinyl post-ironic four dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p class="card-text text-center ">
                                Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div
                            class="circle rounded-circle text-center mx-auto mt-5 mb-1 d-flex justify-content-center align-items-center ">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" width="40px" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center ">The Catalyzer</h5>
                            <p class="card-text text-center ">Blue bottle crucifix vinyl post-ironic four dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p class="card-text text-center ">
                                Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div
                            class="circle rounded-circle text-center mx-auto mt-5 mb-1 d-flex justify-content-center align-items-center ">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" width="40px" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center ">Neptune</h5>
                            <p class="card-text text-center ">Blue bottle crucifix vinyl post-ironic four dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p class="card-text text-center ">
                                Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <button type="button" class="btn btn-primary btn-lg px-4">Button</button>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-3">
            <div class="container my-container">
                <div class="row mb-5 ml-1">
                    <div class="col-xl-4 col-12">
                        <h3 class="pr-4">Master Cleanse Reliac Heirloom</h3>
                    </div>
                    <div class="col-xl-8 col-12">
                        <p class="px-xl-3">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,
                            subway
                            tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing
                            selfies heirloom.</p>
                    </div>
                </div>
                <div class="row mt-4 pt-4 ml-1">
                    <div class="col-6 pl-4">
                        <div class="row">
                            <div class="col-6 pl-0">
                                <img src="https://dummyimage.com/500x300" alt="" class="w-100">
                            </div>
                            <div class="col-6 pl-0">
                                <img src="https://dummyimage.com/501x301" alt="" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                            <img src="https://dummyimage.com/600x360" alt="" class="w-100 pr-3 mt-3">
                        </div>
                    </div>
                    <div class="col-6 pr-4">
                        <div class="row">
                            <img src="https://dummyimage.com/601x361" alt="" class="w-100 pr-3 mb-3">
                        </div>
                        <div class="row">
                            <div class="col-6 pl-0">
                                <img src="https://dummyimage.com/502x302" alt="" class="w-100">
                            </div>
                            <div class="col-6 pl-0">
                                <img src="https://dummyimage.com/503x303" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-4">
            <div class="container my-container">
                <div class="row d-flex flex-column justify-content-center align-content-center ">
                    <h2 class="text-center ">Pricing</h2>
                    <span class="col-8 text-center mb-5">Banh mi cornhole echo park skateboard authentic crucifix neutra
                        tilde
                        lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</span>
                </div>
                <table class="table col-xl-8 col-lg-9 col-12 mx-auto mt-4 mb-4">
                    <thead>
                        <tr class="table-active">
                            <th scope="col" style="width: 25%;" class="border-0 rounded-left">Plan</th>
                            <th scope="col" style="width: 25%;" class="border-0">Speed</th>
                            <th scope="col" style="width: 25%;" class="border-0">Storage</th>
                            <th scope="col" style="width: 20%;" class="border-0">Price</th>
                            <th scope="col" style="width: 5%;" class="border-0 rounded-right "></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-0 ">Start</td>
                            <td class="border-0 ">5 Mb/s</td>
                            <td class="border-0 ">15 GB</td>
                            <td class="border-0 ">Free</td>
                            <td class="border-0 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Pro</td>
                            <td>25 Mb/s</td>
                            <td>25 GB</td>
                            <td>$24</td>
                            <td style="width: unset;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Business</td>
                            <td>36 Mb/s</td>
                            <td>40 GB</td>
                            <td>$50</td>
                            <td style="width: unset;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-bottom-1 ">
                            <td>Exclusive</td>
                            <td>48 Mb/s</td>
                            <td>120 GB</td>
                            <td>$72</td>
                            <td style="width: unset;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row mx-auto d-flex justify-content-center no-gutters">
                    <div class="col-xl-8 col-lg-9 col-12 d-flex justify-content-between">
                        <p class="ml-2 mb-0">Learn More<svg fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </p>
                        <button type="button" class="btn btn-primary px-4 mb-4">Button</button>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-5">
            <div class="container my-container">
                <div class="row mb-5 ml-1">
                    <div class="col-lg-6 col-12 pl-0 pl-lg-3">
                        <h3 class="pr-4 under-line">Pitchfork Kickstarter Taxidermy</h3>
                    </div>
                    <div class="col-lg-6 col-12 pl-0">
                        <p class="mt-3 mt-lg-0">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                            gentrify, subway
                            tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing
                            selfies heirloom.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12 py-4 px-3">
                        <div class="card p-4 border-0">
                            <img src="https://dummyimage.com/720x400" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-4">
                                <p class="card-text m-0"><small>SUBTITLE</small></p>
                                <h5 class="card-title">Chichen Itza</h5>
                                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                    hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 py-4 px-3">
                        <div class="card p-4 border-0">
                            <img src="https://dummyimage.com/721x401" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-4">
                                <p class="card-text m-0"><small>SUBTITLE</small></p>
                                <h5 class="card-title">Colosseum Roma</h5>
                                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                    hexagon
                                    disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 py-4 px-3">
                        <div class="card p-4 border-0">
                            <img src="https://dummyimage.com/722x402" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-4">
                                <p class="card-text m-0"><small>SUBTITLE</small></p>
                                <h5 class="card-title">Great Pyramid of Giza</h5>
                                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                    hexagon
                                    disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 py-4 px-3">
                        <div class="card p-4 border-0">
                            <img src="https://dummyimage.com/723x403" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-4">
                                <p class="card-text m-0"><small>SUBTITLE</small></p>
                                <h5 class="card-title">San Francisco</h5>
                                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                    hexagon
                                    disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-6">
            <div class="container my-container">
                <div class="card-group d-flex flex-column">
                    <div class="card border-0 mt-5 mt-md-0 d-flex flex-md-row justify-content-center ">
                        <div class="row d-flex justify-content-center ">
                            <div
                                class="circle rounded-circle text-center my-auto mx-4 d-flex justify-content-center align-items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" width="40px" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body col-lg-6 col-md-9 col-12">
                            <h5 class="card-title text-center text-md-left ">Shooting Stars</h5>
                            <p class="card-text text-center text-md-left ">Blue bottle crucifix vinyl post-ironic four
                                dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p class="card-text text-center text-md-left ">
                                Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="card border-0 d-flex flex-md-row-reverse justify-content-center ">
                        <div class="row d-flex justify-content-center ">
                            <div
                                class="circle rounded-circle text-center my-auto mx-4 d-flex justify-content-center align-items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" width="40px" viewBox="0 0 24 24">
                                    <circle cx="6" cy="6" r="3"></circle>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body col-lg-6 col-md-9 col-12">
                            <h5 class="card-title text-center text-md-left ">The Catalyzer</h5>
                            <p class="card-text text-center text-md-left ">Blue bottle crucifix vinyl post-ironic four
                                dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p class="card-text text-center text-md-left ">
                                Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="card border-0 d-flex flex-md-row justify-content-center ">
                        <div class="row d-flex justify-content-center ">
                            <div
                                class="circle rounded-circle text-center my-auto mx-4 d-flex justify-content-center align-items-center ">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" width="40px" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body col-lg-6 col-md-9 col-12">
                            <h5 class="card-title text-center text-md-left ">Neptune</h5>
                            <p class="card-text text-center text-md-left ">Blue bottle crucifix vinyl post-ironic four
                                dollar toast
                                vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                            </p>
                            <p class="card-text text-center text-md-left ">
                                Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-1 mb-1" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <button type="button" class="btn btn-primary btn-lg px-4">Button</button>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-7">
            <div class="container my-container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-12">
                        <img src="https://dummyimage.com/400x400" alt="" class="w-100">
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="row d-flex flex-column">
                            <p class="mb-0">BRAND NAME</p>
                            <h3>The Catcher in the Rye</h3>
                        </div>
                        <div class="row d-flex w-100">
                            <span class="d-flex justify-content-center star mr-1">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                            </span>
                            <span class="d-flex align-items-center mx-1">4 Reviews</span>
                            <span class="d-flex social">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <p class="my-3">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy
                            chia
                            microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                            Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
                            neutra jean shorts keytar banjo tattooed umami cardigan.</p>
                        <div class="row mt-4 mb-3 d-flex align-items-center ">
                            <span class="mr-2">Color</span>
                            <button type="button" class="btn rounded-circle color mx-1"></button>
                            <button type="button" class="btn rounded-circle color mx-1"></button>
                            <button type="button" class="btn rounded-circle color mx-1"></button>
                            <span class="ml-4 mr-3">Size</span>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SM
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button class="dropdown-item border-0 text-light " type="button">SM</button>
                                    <button class="dropdown-item border-0 text-light " type="button">M</button>
                                    <button class="dropdown-item border-0 text-light " type="button">L</button>
                                    <button class="dropdown-item border-0 text-light " type="button">XL</button>
                                </div>
                            </div>
                        </div>
                        <hr class="sm-hr">
                        <div class="row d-flex justify-content-between">
                            <h4 class="col-2 d-flex align-items-center">$58.00</h4>
                            <div class="col-4 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary px-4 mr-3">Button</button>
                                <button type="button" class="btn rounded-circle ">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        class="w-5 h-5" width="30px" viewBox="0 0 24 24">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-8">
            <div class="container my-container">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/420x260" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/421x261" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">Shooting Stars</h5>
                                <p class="card-text">$21.15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/422x262" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">Neptune</h5>
                                <p class="card-text">$12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/423x263" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">The 400 Blows</h5>
                                <p class="card-text">$18.40</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">The Catalyzer</h5>
                                <p class="card-text">$16.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/425x265" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">Shooting Stars</h5>
                                <p class="card-text">$21.15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/426x266" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">Neptune</h5>
                                <p class="card-text">$12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="card p-3 border-0">
                            <img src="https://dummyimage.com/427x267" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-2">
                                <p class="card-text m-0"><small>CATEGORY</small></p>
                                <h5 class="card-title mt-1 mb-2">The 400 Blows</h5>
                                <p class="card-text">$18.40</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <section class="section-9">
            <div class="row no-gutters">
                <iframe class="frame" width="100%" height="712px" frameborder="0" marginheight="0" marginwidth="0"
                    title="map" scrolling="no"
                    src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
                <form class="bg-light p-4">
                    <h5 class="pt-3">Feedback</h5>
                    <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Messenger</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg m-auto w-100 text-light ">Button</button>
                    <small class="form-text text-muted">Chicharrones blog helvetica normcore iceland tousled brook viral
                        artisan.</small>
            </div>
        </section>

    </main>
@endsection
