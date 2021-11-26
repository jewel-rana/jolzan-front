@extends('dashboard::layouts.master')

@section('content')
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <p class="card-text"></p>
                </div>
                <div>
                    <table class="table" id="productTable" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Thumb</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
@endsection

@section('header')

@endsection

@section('footer')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <script>
        jQuery(function ($) {
            let table = $('#productTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('features.index') }}',
                    data: function (d) {
                        d.name = $('input[name=name]').val();
                        d.email = $('input[name=email]').val();
                    }
                },
                columns: [
                    {data: 'thumb', name: 'thumb'},
                    {data: 'type', name: 'type'},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'action', searchable: false, orderable: false}
                ]
            });

            $('#search-form').on('submit', function(e) {
                table.draw();
                e.preventDefault();
            });
        });
    </script>
@endsection
