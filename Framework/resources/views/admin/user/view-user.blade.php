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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Kode Akses</th>
                            <th>Point</th>
                            <th>Kota</th>
                            <th>No Tlp</th>
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
        $.get("{{url('api/users')}}", function (data) {
            var res = [];
            data.map(function (v, i) {
                // let status
                // if (v.status_karyawan == 0) {
                //     status = '';
                // } else if(v.status_karyawan == 1) {
                //     status = '<div class="badge badge-glow badge-danger">Non Karyawan</div>';
                // } else {
                //     status = '<div class="badge badge-glow badge-success text-center">Pegawai</div>';
                // }
                res.push([i + 1, v.name, v.email,v.access_code,v.point,v.city_name, v.phone, '<a href="#" data-toggle="modal" data-target="#changepassword" class="btn btn-primary btn-sm" onclick="cp(' + v.nik + ')">Detail</a>'])
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

<div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                    <input
                        type="text"
                        class="form-control dt-full-name"
                        id="basic-icon-default-fullname"
                        placeholder="John Doe"
                        aria-label="John Doe"
                    />
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-post">Post</label>
                    <input
                        type="text"
                        id="basic-icon-default-post"
                        class="form-control dt-post"
                        placeholder="Web Developer"
                        aria-label="Web Developer"
                    />
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control dt-email"
                        placeholder="john.doe@example.com"
                        aria-label="john.doe@example.com"
                    />
                    <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                    <input
                        type="text"
                        class="form-control dt-date"
                        id="basic-icon-default-date"
                        placeholder="MM/DD/YYYY"
                        aria-label="MM/DD/YYYY"
                    />
                </div>
                <div class="form-group mb-4">
                    <label class="form-label" for="basic-icon-default-salary">Salary</label>
                    <input
                        type="text"
                        id="basic-icon-default-salary"
                        class="form-control dt-salary"
                        placeholder="$12000"
                        aria-label="$12000"
                    />
                </div>
                <button type="button" class="btn btn-primary data-submit mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
