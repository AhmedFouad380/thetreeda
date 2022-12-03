@extends('admin.layouts.master')

@section('css')
@endsection

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }
    </style>
@endsection

@section('breadcrumb')
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">الصفحة الشخصية</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>

        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">الصفحة الشخصية</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->

        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">تعديل الصفحة الشخصية</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form"  enctype="multipart/form-data"  action="{{url('update-Seller')}}" class="form"
                          method="post">
                    @csrf
                    <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title"> اللوجو</h4>
                                        <div class="controls">
                                            <input type="file"  class="dropify"  name="image" data-default-file="{{$employee->image}}" @if(!isset($employee->image) ) required  @endif data-validation-required-message="{{trans('word.This field is required')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                            {{--                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>--}}
                            <!--end::Hint-->
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title"> الغلاف</h4>
                                        <div class="controls">
                                            <input type="file"  class="dropify"  name="cover" data-default-file="{{$employee->cover}}" @if(!isset($employee->cover) ) required  @endif  data-validation-required-message="{{trans('word.This field is required')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                            {{--                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>--}}
                            <!--end::Hint-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">اسم المتجر باللغة العربية</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="ar_name"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->ar_name}}" required/>
                                <input type="hidden" class="form-control" name="id" value="{{$employee->id}}">
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">اسم المتجر باللغة الانجليزية</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="en_name"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->en_name}}" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">اسم مدير العمل</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="owner_name"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->owner_name}}" required/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->  <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">البريد الالكتروني</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" name="email"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="البريد الالكتروني" value="{{$employee->email}}"
                                />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2"> رقم الهاتف</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="tel" name="phone" id="phone"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="رقم الهاتف" value="{{$employee->phone}}" required/>
                                <!--end::Input-->
                                <span id="error-validation" style="color:red"></span>
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">القسم</label>
                                <!--end::Label-->
                                <select class="form-control" name="category_id" required>
                                    @foreach(\App\Models\Category::all() as $category)
                                        <option @if($employee->category_id == $category->id)  selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">الدولة</label>
                                <!--end::Label-->
                                <select class="form-control" name="country_id" required>
                                    @foreach(\App\Models\Country::all() as $category)
                                        <option @if($employee->country_id == $category->id)  selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">كلمة المرور</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="password" name="password"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">تأكيد كلمة المرور</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="password" name="password_confirmation"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="تأكيد كلمة المرور" value=""/>
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">لينك فيديو التعريفي </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="video_link"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->video_link}}"/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">عنوان الفيديو </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="video_title"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->video_title}}"/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">وصف الفيديو </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea type="text" name="video_description"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="">{{$employee->video_description}}</textarea>
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">الوصف باللغة العربية</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea type="text" name="ar_description" id="editor1"
                                          class="form-control form-control-solid mb-3 mb-lg-0"
                                          required>{{$employee->ar_description}}</textarea>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">الوصف باللغة الانجليزية </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea type="text" name="en_description" id="editor2"
                                          class="form-control form-control-solid mb-3 mb-lg-0"
                                          required>{{$employee->en_description}}</textarea>
                                <!--end::Input-->
                            </div>

                            <!--end::Input group-->


                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">حفظ
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor1' );

        $('.dropify').dropify();

        $('#phone').change( function () {
            var val = $(this).val();
            var id = {{$employee->id}};

            $.ajax({
                type: "GET",
                    url: "{{url('checkPhoneValidationUser')}}",
                data: {'phone': val ,'id':id},
                success: function (data) {
                    if (data == true) {

                        var text = 'عفوا رقم الهاتف موجود بالفعل';
                        $('#error-validation').html(text)
                    } else {
                        var text = '';
                        $('#error-validation').html(text)

                    }
                }
            })
        })


        $("#state").change(function () {
            var wahda = $(this).val();

            if (wahda != '') {
                $.get("{{ URL::to('/get-branch')}}" + '/' + wahda, function ($data) {
                    var outs = "";
                    $.each($data, function (title, id) {
                        console.log(title)
                        outs += '<option value="' + id + '">' + title + '</option>'
                    });
                    $('#branche').html(outs);
                });
            }
        });
    </script>



@endsection

