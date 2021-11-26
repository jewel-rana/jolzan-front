@extends('dashboard::layouts.master')

@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">

    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection

@section('footer')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/admin/js/vendors/js/charts/apexcharts.min.js') }}"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/admin/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->
@endsection
