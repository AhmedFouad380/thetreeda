@extends('front.layout')

@section('title')
    {{__('lang.Login')}}
@endsection

@section('content')

    <!-- this is main section in login -->
    <section class="main-bg-login">
          <div class="container bg-login-2">
               <div class="row">
                  <div class="col-md-6 col-lg-6 col-12 px-0">
                      <div>
                         <!-- <img src="assets/img/Group 17797.png" alt="" class="w-100"> -->
                         <img src="{{asset('website/assets/img/Wavy_Tech-28_Single-10.jpg')}}" alt="" class="w-100">
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-12 px-0">
                           <div class="login-img text-center mt-5">
                              <img src="{{asset('website/assets/img/Rectangle 6325.png')}}" alt="" class="w-25">
                            </div>
                            <div class="mx-5 py-5">
                                <h2>hello,</h2>
                                <h1 class="mb-4">welcome!</h1>
                                <form action="{{url('login')}}" method="post">
                                    @csrf
                                    <div class="d-flex position-relative">
                                        <span class="span-form"></span>
                                        <input type="email" name="email" placeholder="Enter your email" class="form-control mb-3 p-3 login-form">
                                    </div>
                                    <div class="d-flex position-relative">
                                        <span class="span-form2"></span>
                                        <input type="password" name="password" placeholder="Enter your password" class="form-control mb-3 p-3 login-form2">
                                    </div>
                                    <div class="d-sm-block d-md-flex justify-content-between">
                                        <div>
                                            <input type="checkbox" class="text-capitalize">
                                            <span class="text-capitalize form-login-color">remember me</span>
                                        </div>
                                        <a href="#" class="text-capitalize form-login-color">forget password ?</a>
                                    </div>
                                    <button class="btn login-btn my-3 text-uppercase me-1">login</button>
                                    <a  href="{{url('Register')}}" class="btn sign-btn my-3 text-uppercase me-1">sign up</a>
                                    <div class="another-way-to-login">
                                        <div class="d-flex align-items-center">
                                            <span class="or-line mt-4"></span>
                                            <span class="text-uppercase span2 text-center d-block mt-4 px-2">or</span>
                                            <span class="or-line mt-4"></span>
                                        </div>

                                        <div class="d-flex flex-coulmn justify-content-center">
                                             <a href="#" class="border-link text-center me-3 mt-3">
                                                <img src="{{asset('website/assets/img/Group 17800.png')}}" alt="" class="w-75">
                                             </a>
                                             <a href="#" class="border-link2 mt-3">
                                                <img src="{{asset('website/assets/img/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png')}}" alt="" class="w-100">
                                             </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                  </div>
               </div>
          </div>
    </section>

  <!-- end main section in login -->

@endsection
