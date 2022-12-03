@extends('front.layout')

@section('title')
    Comming Soon
@endsection

@section('content')
<!-- this is section 1 -->
<section class="header-bg">
    <!--this is nav bar  -->
    <!-- end nav bar -->
    <!-- start header content -->
    <!-- end header content -->
    <div class=" info2">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>comming soon !</h2>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="timer">
                        <div class="d-flex">
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="day1"></span>
                                </div>
                            </div>
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="day2"></span>
                                </div>
                            </div>
                            <div class="layer-dott d-flex justify-content-center align-items-center">
                                :
                            </div>
                        </div>
                    </div>

                    <div class="timer">
                        <div class="d-flex">
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="hour1"></span>
                                </div>
                            </div>
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="hour2"></span>
                                </div>
                            </div>
                            <div class="layer-dott d-flex justify-content-center align-items-center">
                                :
                            </div>
                        </div>
                    </div>

                    <div class="timer">
                        <div class="d-flex">
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="min1"></span>
                                </div>
                            </div>
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="min2"></span>
                                </div>
                            </div>
                            <div class="layer-dott d-flex justify-content-center align-items-center">
                                :
                            </div>
                        </div>
                    </div>

                    <div class="timer">
                        <div class="d-flex">
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="sec1"></span>
                                </div>
                            </div>
                            <div class="layer1">
                                <div class="bg1">
                                    <div class="bg2">

                                    </div>
                                    <div class="bg3"></div>
                                </div>
                                <div class="timelayer">
                                    <span class="sec2"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="row row-rev top-content">
                <div class="col-md-6 col-lg-6 col-12 text-center">
                    <h2 class="text-capitalize who-we-are">who we are </h2>
                    <p class="color-me">Treeda-gate is your gateway to a world where you can find and buy goods and services without leaving your seat.

                        Unlike many places that source products from large stores, We deliver products From different types of stores and services to your doorsteps.

                        With us, you will find products from all the shops you never thought of, as well as various price categories for every taste. </p>
                    <a class="btn yellowbtn" href="{{url('register')}}"> Get Start As a seller </a>
                </div>
                <div class="col-md-6 col-lg-6 col-12 text-center">
                    <div class="header-image2">
                        <img src="{{asset('website/assets/img/about us.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="svg">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 255"><path fill="#4A4AFF" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,96C384,96,480,160,576,165.3C672,171,768,117,864,133.3C960,149,1056,235,1152,250.7C1248,267,1344,213,1392,186.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
</div>
<section class="container">
    <div class="row flag">
        <h2 class="text-center">soon we will be able to buy from any market you want</h2>
        <div class=" col-md-4 col-lg-4 col-12">
            <div class="flag-img">
                <img src="{{asset('website/assets/img/Mask Group 1.png')}}" alt="">
            </div>
        </div>
        <div class=" col-md-4 col-lg-4 col-12">
            <div class="flag-img">
                <img src="{{asset('website/assets/img/Mask Group 2.png')}}" alt="">
            </div>
        </div>
        <div class=" col-md-4 col-lg-4 col-12">
            <div class="flag-img">
                <img src="{{asset('website/assets/img/Mask Group 3.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<!-- end section 1 -->

<!-- this is section 2 -->
<section class="bg-section2-comming">
    <div class="container">
        <div class="row ">
            <div class=" col-md-4 col-lg-4 col-12 text-center mt-5">
                <div class="box-soon">
                    <iframe width="w-100" height="300" src="https://www.youtube.com/embed/iznGFV-LxJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        <div class="bg-iframe-info">
                        <h6>About Treeda</h6>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4 col-lg-4 col-12 text-center mt-5">
                <div class="box-soon">
                    <iframe width="w-100" height="300" src="https://www.youtube.com/embed/DZZq73R6E0E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="bg-iframe-info">
                        <h6>Reach more customers with us</h6>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4 col-lg-4 col-12 text-center mt-5">
                <div class="box-soon">
                    <iframe width="w-100" height="300" src="https://www.youtube.com/embed/B6HfdtwhcN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="bg-iframe-info">
                        <h6>Check Our Services</h6>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end section 2 -->

<!-- start section 3 -->
<!--  <section class="container">-->
<!--    <div class="about-me">-->
<!--        <div class="about-me-adress">-->
<!--            <h1 class="adress1">shopping</h1>-->
<!--            <h2 class="adress2">what you can get from treeda</h2>-->
<!--        </div>-->
<!--        <div class="line-before"></div>-->
<!--     </div>-->
<!--     <div class="owl-carousel">-->
<!--        <div class="rounded">-->
<!--            <div class="spices text-center">-->
<!--                <img src="assets/img/Mask Group 5.png" alt="" class="rounded">-->
<!--                <p >spices</p>-->
<!--             </div>-->
<!--        </div>-->
<!--        <div class="rounded">-->
<!--            <div class="spices text-center">-->
<!--                <img src="assets/img/Mask Group 5.png" alt="" class="rounded">-->
<!--                <p >spices</p>-->
<!--             </div>-->
<!--        </div>-->
<!--        <div class="rounded">-->
<!--            <div class="spices text-center">-->
<!--                <img src="assets/img/Mask Group 5.png" alt="" class="rounded">-->
<!--                <p >spices</p>-->
<!--             </div>-->
<!--        </div>-->
<!--        <div class="rounded">-->
<!--            <div class="spices text-center">-->
<!--                <img src="assets/img/Mask Group 5.png" alt="" class="rounded">-->
<!--                <p >spices</p>-->
<!--             </div>-->
<!--        </div>-->
<!--        <div class="rounded">-->
<!--            <div class="spices text-center">-->
<!--                <img src="assets/img/Mask Group 5.png" alt="" class="rounded">-->
<!--                <p >spices</p>-->
<!--             </div>-->
<!--        </div>-->
<!--        <div class="rounded">-->
<!--            <div class="spices text-center">-->
<!--                <img src="assets/img/Mask Group 5.png" alt="" class="rounded">-->
<!--                <p >spices</p>-->
<!--             </div>-->
<!--        </div>-->
<!--      </div>-->
<!-- </section>-->
<!-- end section 3 -->
<!-- start section 4 -->
<section>
    <div class="about-me mb-5">
        <div class="about-me-adress">
            <h1 class="adress1">posts</h1>
            <h2 class="adress2">posts from treeda</h2>
        </div>
        <div class="line-before"></div>
    </div>
    <div class="flex-this">
        <div class="bg-section4-1"></div>
        <div class="bg-section4-2"></div>
    </div>
</section>

<section class="container top-imgs">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div>
                <a href="https://facebook.com/story.php?story_fbid=pfbid02itDFTN5ntUjQpH2Q3MpM8rqHYUAwiwXHe9cb6Un9NXy4QWPkkZtdVouHhNquVjAMl&id=100083247316709&sfnsn=scwspwa&mibextid=RUbZ1f" target="_blank">
                <img src="{{asset('website/assets/img/3.jpeg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div>
                <a href="https://facebook.com/story.php?story_fbid=pfbid02oSpyzRoiL1gxj2yf7T1qdMdxLYkoZsSe3kmWXQewcMLKYdt64BzHCBC99HDhj1UEl&id=100083247316709&sfnsn=scwspwa&mibextid=RUbZ1fRUbZ1f" target="_blank">
                    <img src="{{asset('website/assets/img/2.jpeg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div>
                <a href="https://facebook.com/story.php?story_fbid=pfbid025H4t5gWwVUdeWs6dU8xSDBoWdbgbwLRJeut89XaChFS3Dgbh9G1tSaf8a1jyPQykl&id=100083247316709&sfnsn=scwspwa&mibextid=RUbZ1f" target="_blank">
                    <img src="{{asset('website/assets/img/1.jpeg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row top-subscribe">
            <div class="col-md-4 col-lg-4 col-12">
                <div class="sub-img">
                    <img src="{{asset('website/assets/img/Group 1197.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-12">
                <div class="row bottom-sub ">
                    <div class="col-12 col-lg-8 col-md-8">
                        <input type="text" class="form-control" placeholder="your email">
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <button class="btn">subscribe</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end section 5 -->

@endsection
