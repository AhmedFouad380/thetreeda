<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
    <head>
        <title> {{\App\Models\Setting::findOrFail(1)->name}}  </title>

        <meta charset="utf-8" />
		<meta name="description" content="Eltib" />
		<meta name="keywords" content="Eltib" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        @include('admin.layouts.head')

    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">


                    <!--begin::Container-->
                    @yield('content')
                    <!--end::Container-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->

        @include('admin.layouts.footer-script')
        <!--end::Main-->

    </body>
    <!--end::Body-->
</html>
