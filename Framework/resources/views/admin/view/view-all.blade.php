@extends('layouts.admin.master')
@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Berita</a>
                            </li>
                            <li class="breadcrumb-item active">Semua Berita
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                        data-toggle="modal"
                        data-target="#modals-slide-in" aria-expanded="false"><i class="font-medium-3" data-feather='edit'></i></button>
            </div>
        </div>
    </div>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="datatables-basic table" id="myuser">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Store Name</th>
                            <th>Category</th>
                            <th>Menu</th>
                            <th>Location</th>
                            <th>Seen</th>
                            <th>Cabang</th>
                            <th>PIC Name</th>
                            <th>PIC No Wa</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('head')
    @include('layouts.admin.assets.component.data-table.head')
@endsection
@section('js')
    @include('layouts.admin.assets.component.data-table.js')
    <script>
        $.get("{{url('api/admin/get-info-all')}}", function (data) {
            var res = [];
            console.log(data);
            data.map(function (v, i) {
                // let status
                // if (v.status_karyawan == 0) {
                //     status = '';
                // } else if(v.status_karyawan == 1) {
                //     status = '<div class="badge badge-glow badge-danger">Non Karyawan</div>';
                // } else {
                //     status = '<div class="badge badge-glow badge-success text-center">Pegawai</div>';
                // }
                res.push([i + 1,v.title, v.cat_name,v.Parent_id,v.location,v.seen,v.cabang,v.pic_name,'0'+v.no_wa, '<a href="#" data-toggle="modal" data-target="#changepassword" class="btn btn-primary btn-sm" onclick="cp(' + v.nik + ')">Modal</a>'])
            });
            $('#myuser').DataTable({
                lengthChange: true,
                data: res,
                order: [[0, "asc"]],
                dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 25,
                lengthMenu: [25, 50, 75, 100, 150, 200],
            });
        });
    </script>

@endsection
