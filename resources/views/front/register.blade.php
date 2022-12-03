@extends('front.layout')
@section('title')
    {{__('lang.Register')}}
@endsection
@section('content')
    <!-- this is main section in login -->
    <section class="main-bg-login">
          <div class="container bg-login-2">
               <div class="row">
                  <div class="col-md-6 col-lg-6 col-12 px-0 d-flex  align-items-center">
                      <div>
                         <!-- <img src="assets/img/Group 17797.png" alt="" class="w-100"> -->
                         <img src="{{asset('website/assets/img/Wavy_Tech-28_Single-10.jpg')}}" alt="" class="w-100">
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-12 px-0">
                    <div class="bg-form-end">
                        <div class="text-center">
                               <p class="text-center text-uppercase register py-4">register new account As A Seller</p>
                           </div>
                           <div class="mx-5 py-5 ">
                                <form action="{{url('registerSeller')}}" class="form-register" method="post">
                                    @csrf
{{--                                    <div class="d-flex position-relative">--}}
{{--                                        <span class="sign-form d-block position-absolute">--}}
{{--                                            <i class="fa-solid fa-user"></i>--}}
{{--                                        </span>--}}
{{--                                        <input type="text" name="ar_name" placeholder="{{__('lang.ar_name_company')}}" class="form-control mb-3 login-form text-capitalize">--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex position-relative">--}}
{{--                                        <span class="sign-form d-block position-absolute">--}}
{{--                                            <i class="fa-solid fa-user"></i>--}}
{{--                                        </span>--}}
{{--                                        <input type="text" name="en_name" placeholder="{{__('lang.en_name_company')}}" class="form-control mb-3 login-form text-capitalize">--}}
{{--                                    </div>--}}
                                    <div class="d-flex position-relative">
                                        <span class="sign-form d-block position-absolute">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <input type="text" name="owner_name" placeholder="{{__('lang.name')}}" class="form-control mb-3 login-form text-capitalize">
                                    </div>
                                    <div class="d-flex position-relative">
                                        <span class="sign-form d-block position-absolute">
                                            <i class="fa-solid fa-phone"></i>
                                        </span>
                                        <input type="tel" name="phone" placeholder="{{__('lang.phone')}}" class="form-control mb-3 login-form text-capitalize">
                                    </div>
                                    <div class="d-flex position-relative">
                                        <span class="sign-form d-block position-absolute">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <input type="email" name="email" placeholder="{{__('lang.email')}}" class="form-control mb-3 login-form text-capitalize">
                                    </div>

                                    <div class="d-flex position-relative">
                                        <span class="sign-form d-block position-absolute">
                                            <i class="fa-solid fa-lock"></i>
                                        </span>
                                        <input type="password" name="password" placeholder="{{__('lang.password')}}" class="form-control mb-3 login-form text-capitalize">
                                    </div>
                                    <div class="d-flex position-relative">
                                        <span class="sign-form d-block position-absolute">
                                            <i class="fa-solid fa-lock-open"></i>
                                        </span>
                                        <input type="password" name="password_confirmation" placeholder="{{__('lang.Confirm password')}}" class="form-control mb-3 login-form text-capitalize">
                                    </div>


{{--                                    <div class="d-flex position-relative">--}}
{{--                                        <span class="sign-form d-block position-absolute">--}}
{{--                                            <i class="fa-solid fa-table"></i>--}}
{{--                                        </span>--}}
{{--                                        <select name="category_id" class="form-control mb-3 login-form text-capitalize">--}}
{{--                                            <option selected disabled>{{__('lang.MainCategory')}}</option>--}}
{{--                                            @foreach(\App\Models\Category::where('is_active','active')->get() as $Category)--}}
{{--                                                <option value="{{$Category->id}}">{{$Category->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex position-relative">--}}
{{--                                        <span class="sign-form d-block position-absolute">--}}
{{--                                            <i class="fa-solid fa-flag"></i>--}}
{{--                                        </span>--}}
{{--                                        <select name="country_id" class="form-control mb-3 login-form text-capitalize">--}}
{{--                                            <option selected disabled>{{__('lang.Countries')}}</option>--}}
{{--                                            @foreach(\App\Models\Country::where('is_active','active')->get() as $Category)--}}
{{--                                                <option value="{{$Category->id}}">{{$Category->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

                                    <div class="d-sm-block d-md-flex justify-content-between">
                                        <div>
                                            <input type="checkbox" class="text-capitalize">
                                            <span class="text-capitalize form-login-color">remember me</span>
                                        </div>
{{--                                        <div>--}}
{{--                                            <input type="checkbox" class="text-capitalize">--}}
{{--                                            <span class="text-capitalize form-login-color">saler</span>--}}
{{--                                            <input type="checkbox" class="text-capitalize">--}}
{{--                                            <span class="text-capitalize form-login-color">customer</span>--}}
{{--                                        </div>--}}


                                    </div>
                                    <button class="btn my-4 text-uppercase d-block m-auto register-btttn">register</button>

                                </form>
                           </div>
                    </div>
                  </div>
               </div>
          </div>
    </section>

  <!-- end main section in login -->

@endsection

   <!-- thisi is footer -->

