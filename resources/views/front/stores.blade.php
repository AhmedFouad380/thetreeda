@extends('front.layout')
@section('title',__('lang.Stores'))
@section('content')
    <!-- section 1 in stores -->
    <header class="header-bg stores-header">
        <!--this is nav bar  -->
        <!-- end nav bar -->
        <!-- start header content -->
        <div class=" info2 stores-info">
            <div class="container">
                <div class="row row-rev top-content align-items-center">
                    <div class="col-md-6 col-lg-6 col-12 text-center">
                        <h2 class="text-capitalize who-we-are">{{__('lang.all you need in one place')}}</h2>
{{--                        <p class="color-me">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae--}}
{{--                            nesciunt et nemo ad id aut autem architecto, quos deserunt.--}}
{{--                            Hic incidunt corrupti id ducimus quia explicabo esse, doloremque--}}
{{--                            cumque quod facilis ipsa assumenda, maxime fuga nulla tenetur expedita, possimus at! </p>--}}
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 text-center">
                        <div class="stores-img">
                            <img src="{{asset('website/assets/img/Group 120.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header content -->
    </header>
    <div class="svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 255"><path fill="#4A4AFF" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,96C384,96,480,160,576,165.3C672,171,768,117,864,133.3C960,149,1056,235,1152,250.7C1248,267,1344,213,1392,186.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <h2 class="text-uppercase adress-reco mt-5">{{__('lang.Recomended Categories')}}</h2>
                <div class="line-reco"></div>
            </div>
            <div class="row my-4">
                @foreach($Categories as $Cat)
                <div class="col-md-6 col-lg-3 col-12 mt-4">
                    <div class="recomended p-3 d-flex align-items-center justify-content-between align-items-center">
                       <div class="bg-category d-flex justify-content-center">
                           <img width="100px" height="100px" src="{{$Cat->image}}">
                       </div>
                       <div>
                        <h6 class="text-capitalize mt-2 mb-3">{{$Cat->name}}</h6>
                        <p class="items-color">
                            <span class="color-items">{{$Cat->Stores->count()}}</span>
                            {{__('lang.Stores in category')}}
                        </p>
                       </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section 1 -->

    <div class="bg-ssstores">
        <div class=" container">
            <h2 class="text-uppercase adress-reco mt-5">recomended stores</h2>
            <div class="line-reco ms-0"></div>
        </div>
        <!-- this is filter -->
        <div class="container">
            <div class="container mt-5 w-75 ms-0">
                <form action="{{url('storesSearch')}}" method="get">
                    <div class="row">
                        <div class="col-md-2 col-12 mt-2">
                            <label class="mb-2 text-capitalize">Search</label>
                            <div class="d-flex position-relative">
                                <input type="text" name="search" class="form-control d-block" placeholder="write name">
                            </div>
                        </div>
                        <div class="col-md-2 col-12 mt-2">
                            <label class="mb-2 text-capitalize" for="cars">Country:</label>
                            <select id="cars" class="form-control " name="country_id">
                                @foreach(\App\Models\Category::where('is_active','active')->get() as $Cat)
                                    <option value="{{$Cat->id}}">{{$Cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-12 mt-2">
                            <label class="mb-2 text-capitalize" for="cars">Category:</label>
                            <select id="cars" class="form-control" name="category_id">
                                @foreach(\App\Models\Category::where('is_active','active')->get() as $Cat)
                                    <option value="{{$Cat->id}}">{{$Cat->name}}</option>
                                @endforeach
                            </select>
                        </div>

{{--                        <div class="col-md-2 col-12 mt-2">--}}
{{--                            <label class="mb-2 text-capitalize" for="cars">Choose a car:</label>--}}
{{--                            <select id="cars" class="form-control">--}}
{{--                                <option value="volvo">Volvo</option>--}}
{{--                                <option value="saab">Saab</option>--}}
{{--                                <option value="opel">Opel</option>--}}
{{--                                <option value="audi">Audi</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="col-md-2 col-12 mt-2">
                            <label for="" class="submit-label mb-2">submit</label>
                            <button class="btn submitt-stores d-block">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end filtr -->
        <!-- start section 2 -->
        <section class="container">
            <div class="row mt-5">
                @foreach($Stores as $Store)

                <div class="col-md-3 col-lg-3 col-12">
                    <div class="cate-box pt-3 px-3 mb-3">
                        <div class="img-cate-box">
                            <img src="{{$Store->cover}}" alt="">
                        </div>
                        <div class="img-2-cate-box m-auto">
                            <img src="{{$Store->image}}" alt="">
                        </div>
                        <div class="top-cate">
                            <p class="text-capitalize text-center"> {{$Store->name}}</p>
                            <h6 class="text-center color-cate">{{$Store->Category->name}}</h6>
                            <a  href="{{url('store',$Store->id)}}" class="btn add-fav">{{__('lang.ShowMore')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end section 2 -->
        </section>
    </div>

    <!-- start section 2 -->

    <!-- end section 2 -->

    <!-- section 2 in stores -->
    <!-- end section 2 -->

@endsection
