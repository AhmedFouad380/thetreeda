 @extends('front.layout')
 @section('title',$Store->name)
    <!-- end nav bar -->
    <!-- section 1 -->
 @section('content')
    <section class="bg-company">
       <div class="bg-img-1">
        <img src="{{asset('website/assets/img/Path 2.png')}}" alt="" class="w-100">
       </div>
       <div class="bg-img-2">
        <img src="{{asset('website/assets/img/woman-in-blue-crew-neck-shirt-using-black-laptop-computer-3994051.png')}}" alt="" class="w-100">
       </div>
       <div class="bg-img-3">
        <img src="{{asset('website/assets/img/Path 1527.png')}}" alt="" class="w-100">
       </div>
       <div class="company-info d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="text-uppercase">{{$Store->name}}</h1>
            <p class="text-center">{!! $Store->description !!}</p>
        </div>
       </div>
    </section>

    <section class="bg-company-mob d-flex justify-content-center align-items-center">
            <div class="text-center info-mob">
                <h1 class="text-uppercase">{{$Store->name}}</h1>
                <p class="text-center">{!! $Store->description !!}</p>
            </div>
    </section>
    <!-- end section 1 -->

    <!-- start section2 -->
{{--    <section class="container mb-5">--}}
{{--       <div class="row">--}}
{{--          <div class="col-md-4 col-lg-3 col-12">--}}
{{--             <div class="company-box">--}}
{{--                <div class="class-a">--}}
{{--                    <div class="bg-box-company">--}}
{{--                        <div class="bg-box-company2 d-flex justify-content-center align-items-center">--}}
{{--                            <img src="assets/img/Group 19315.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                       <h6 class="text-center text-capitalize mt-3 fw-bolder fs-5">title here</h6>--}}
{{--                       <p class="text-center p-sstyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, facere?</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--             </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-4 col-lg-3 col-12">--}}
{{--            <div class="company-box ">--}}
{{--               <div class="class-a">--}}
{{--                   <div class="bg-box-company">--}}
{{--                       <div class="bg-box-company2 d-flex justify-content-center align-items-center">--}}
{{--                           <img src="assets/img/Group 19315.png" alt="">--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--                   <div class="w-100">--}}
{{--                      <h6 class="text-center text-capitalize mt-3 fw-bolder fs-5">title here</h6>--}}
{{--                      <p class="text-center p-sstyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, facere?</p>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-4 col-lg-3 col-12">--}}
{{--            <div class="company-box">--}}
{{--               <div class="class-a">--}}
{{--                   <div class="bg-box-company">--}}
{{--                       <div class="bg-box-company2 d-flex justify-content-center align-items-center">--}}
{{--                           <img src="assets/img/Group 19315.png" alt="">--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--                   <div>--}}
{{--                      <h6 class="text-center text-capitalize mt-3 fw-bolder fs-5">title here</h6>--}}
{{--                      <p class="text-center p-sstyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, facere?</p>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-4 col-lg-3 col-12">--}}
{{--            <div class="company-box">--}}
{{--               <div class="class-a">--}}
{{--                   <div class="bg-box-company">--}}
{{--                       <div class="bg-box-company2 d-flex justify-content-center align-items-center">--}}
{{--                           <img src="assets/img/Group 19315.png" alt="">--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--                   <div>--}}
{{--                      <h6 class="text-center text-capitalize mt-3 fw-bolder fs-5">title here</h6>--}}
{{--                      <p class="text-center p-sstyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, facere?</p>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--       </div>--}}
{{--    </section>--}}
    <!-- end section 2 -->

    <!-- section 3 -->
    <section class="container">
        <div class="about-me">
            <div class="about-me-adress">
                <h1 class="adress1 par-adress">features</h1>
                <h2 class="adress2 par-adress2">why choose us</h2>
            </div>
            <div class="line-before"></div>
            <p class="m-auto w-50 text-center p-sstyle mt-4 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi laudantium quisquam accusantium, enim voluptate molestias.</p>
         </div>
    </section>
    <section class="bg-why-uss py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-12">
                    <div class="box-company33 d-flex flex-column justify-content-center align-items-center">
                        <h6 class="text-uppercase m-auto fs-4">accessories</h6>
                        <img src="{{asset('website/assets/img/baseball-cap.png')}}" class="my-4">
                        <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, architecto?</p>
                     </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12">
                    <div class="box-company33 d-flex flex-column justify-content-center align-items-center">
                        <h6 class="text-uppercase m-auto fs-4">accessories</h6>
                        <img src="{{asset('website/assets/img/baseball-cap.png')}}" class="my-4">
                        <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, architecto?</p>
                     </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12">
                    <div class="box-company33 d-flex flex-column justify-content-center align-items-center">
                        <h6 class="text-uppercase m-auto fs-4">accessories</h6>
                        <img src="{{asset('website/assets/img/baseball-cap.png')}}" class="my-4">
                        <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, architecto?</p>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 3 -->

    <!-- start section 4 -->
    <section class="container top-contaaainer">
        <div class="row row-rev">
              <div class="col-md-6 col-lg-6 col-12">
                 <div class="vedio-box">
                    <div>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/h9i28B-nsqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="text-center p-1 title-vedio">
                        <p class="red-p">exrcies name | s-2, e-4</p>
                        <p>Lorem ipsum dolor, sit amet </p>
                    </div>
                 </div>
              </div>
              <div class="col-md-6 col-lg-6 col-12">
                <div class="about-me">
                    <div class="about-me-adress">
                        <h1 class="adress1 par-adress">Video</h1>
                        <h2 class="adress2 par-adress2">some of our work</h2>
                    </div>
                    <div class="line-before"></div>
                    <p class="m-auto w-50 text-center p-sstyle mt-4 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi laudantium quisquam accusantium, enim voluptate molestias.</p>
                 </div>
              </div>
        </div>
    </section>
    <!-- end section 4 -->

    <!-- start section 5 -->
    <section class="container">
        <div class="about-me">
            <div class="about-me-adress">
                <h1 class="adress1 par-adress">vedios</h1>
                <h2 class="adress2 par-adress2">our prouducts</h2>
            </div>
            <div class="line-before"></div>
         </div>
         <div class="row mt-5">
             @foreach($Store->Products as $Product)
            <div class="col-md-3 col-lg-3 col-12 mb-2">
                <div class="proudact-box">
                    <div class="d-flex justify-content-center align-items-center proudact-box2">
                         <img src="{{$Product->image}}" alt="" class="h-100 w-100">
                    </div>
                    <div class="text-center p-1 title-vedio">
                        <p>{{$Product->title}} </p>
                        <p class="red-p">{{$Product->price}} L.E</p>

                    </div>
                </div>
            </div>
             @endforeach
         </div>
    </section>

    <!-- end section 5 -->

    <!-- start section 6 -->
    <section class="back-img">
         <div class="container p-5">
             <div class="row">
                 <div class="col-md-6 col-lg-6 col-12">
                    <p class="w-sm-100 w-md-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, quibusdam neque soluta quaerat omnis illum.</p>
                 </div>
                 <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex justify-content-end">
                        <a href="#">start shopping</a>
                    </div>
                 </div>
             </div>
         </div>
    </section>
    <!-- end section 6 -->

    <!-- start section 7 -->
    <div class="container">
        <div class="about-me">
            <div class="about-me-adress">
                <h1 class="adress1 par-adress">vedios</h1>
                <h2 class="adress2 par-adress2">more proudacts</h2>
            </div>
            <div class="line-before"></div>
         </div>
         <div class="more-proudact mt-4">
            <div class="row">
                @foreach(\App\Models\Product::where('seller_id',$Store->id)->where('is_active','active')->get() as $Pro)
                 <div class="col-md-3 col-3 col-12 mb-2 text-center">
                    <p class="m-auto">* {{$Pro->title}}.</p>
                 </div>
                @endforeach

            </div>
         </div>
    </div>
    <!-- end section 7 -->


@endsection
