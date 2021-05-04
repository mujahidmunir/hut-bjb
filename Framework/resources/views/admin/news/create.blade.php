@extends('layouts.admin.master')
@section('content')
    <section class="bs-validation">
        <div class="msg mb-2"></div>
        <div class="row">
            <!-- Bootstrap Validation -->
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Buat Informasi Baru</h4>
                    </div>
                    <div class="card-body">
                        <form id="addNews" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="select-country1">Category Utama</label>
                                <select class="select2 form-control" name="parent_id" id="parent_id" required>
                                    <option value="">Select Category</option>
                                    <option value="addParentCat">Tambah Category Utama</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select-country1">Category</label>
                                <select class="select2 form-control" name="cat_id" id="category" required>
                                    <option value="">Select Category</option>
                                    <option value="addCategory">Tambah Category</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">Judul</label>
                                <input type="text" name="title" id="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">Masa Berlaku</label>
                                <input type="text" name="duration" id="duration" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">Lokasi</label>
                                <input type="text" name="location" id="location" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="select-country1">Thumb Content</label>
                                <textarea  class="description form-control" name="thumb_desc"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="select-country1">Content</label>
                                <textarea id="redactor" class="description" name="description"></textarea>
                            </div>



                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img" required id="file" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header bgCardIcon bg-light border">
                                            <h5 class="bgCardIcon">Icon Thumbnail</h5>
                                        </div>
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-2 mt-2">
                                                    <div class="form-group">
                                                        <label class="ml-50">Icon</label>
                                                        <div
                                                            class="custom-control custom-control-success custom-switch mt-50 ml-50">
                                                            <input type="checkbox" name="icon"
                                                                   class="icon custom-control-input form-control"
                                                                   id="customSwitch2"/>
                                                            <label class="custom-control-label"
                                                                   for="customSwitch2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10 mt-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-addon-name">Icon</label>
                                                        <input type="file" disabled name="img_icon" id="icon"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header bgCardYt bg-light border" id="">
                                            <h5 class="bgCardYt">Media / Youtube ID</h5>
                                        </div>
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-2 mt-2">
                                                    <div class="form-group">
                                                        <label class="ml-50">Add</label>
                                                        <div
                                                            class="custom-control custom-control-success custom-switch mt-50 ml-50">
                                                            <input type="checkbox" name="media"
                                                                   class="agree custom-control-input form-control"
                                                                   id="customSwitch3"/>
                                                            <label class="custom-control-label"
                                                                   for="customSwitch3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10 mt-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-addon-name">URL Video / ID
                                                            Youtube</label>
                                                        <input type="text" disabled name="video_url" id="url_video"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-1 mb-lg-0">
                                    <button type="reset" class="btn btn-lg btn-gradient-danger btn-block round">Reset
                                    </button>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <button type="submit" class="btn btn-lg btn-gradient-success btn-block round">
                                        Simpan
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ URL::to('admin/app-assets/redactor/redactor.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/assets/css/style.css')}}">
@endsection

@section('js')
    <script src="{{ URL::to('admin/app-assets/redactor/redactor.min.js')}}"></script>
    <script src="{{ URL::to('admin/app-assets/redactor/_plugins/alignment/alignment.min.js')}}"></script>

    <script type="text/javascript">
        $R('#redactor', {
            minHeight: '300px',
            toolbarFixedTopOffset: 60,
            plugins: ['alignment']
        });
    </script>

    <script>
        $(document).ready(function () {
            $.get("{{url('api/parent')}}", function (data) {
                data.map(function (v) {
                    $('#parent_id').append('<option value="' + v.id + '">' + v.cat_name + '</option>');
                });
            });
        });

        $('#parent_id').on('change', function () {
            let ParentID = this.value;
            if (this.value == 'addParentCat') {
                $('#addCat').modal('show');
                $('#title').html('Tambah Kategory Utama');
                $('.label').html('Masukan Nama Kategori Utama');
                document.getElementById('hdnID').innerHTML += ('<input type="text" class="form-control" name="ParentID" value="0">');
            } else {
                if (this.value == 32 || this.value == 33) {
                    $('#icon').prop("disabled", false);
                    $('.bgCardIcon').removeClass("bg-light").addClass("bg-success text-white");
                    $('#icon').prop("required", true);
                    $('#customSwitch2').prop("checked", true).prop("disabled", true);
                } else {
                    $('#icon').prop("disabled", true);
                    $('.bgCardIcon').removeClass("bg-success text-white").addClass("bg-light");
                    $('#icon').prop("required", false);
                    $('#customSwitch2').prop("checked", false).prop("disabled", false);
                }
                $('.hdnID').html('');
                $.get("{{url('api/cat')}}/" + this.value, function (data) {
                    $('#category').html('<option value="">Select Category</option>\n' +
                        '<option value="addCategory">Tambah Category</option>');
                    data.map(function (v) {
                        $('#category').append('<option value="' + v.id + '">' + v.cat_name + '</option>');
                    });
                });

                document.getElementById('hdnID').innerHTML = ('<input type="hidden" name="ParentID" class="form-control" value="'+this.value+'">');
            }

        });

        $('#category').on('change', function () {
            let CatID = this.value;
            if (CatID == 'addCategory') {
                $('#addCat').modal('show');
                $('#title').html('Tambah Kategori');
                $('.label').html('Masukan Nama Kategori');
            }
        });


        $('#createCat').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                data: $('#createCat').serialize(),
                url: "{{ URL::to('/api/cat') }}",
                method: "post",

                success: function (data) {
                    console.log(data[0].type);
                    $('#createCat')[0].reset();
                    $('#addCat').modal('hide');
                    $('.msg').html('<div class="alert alert-success alert-dismissible fade show" role="alert">\n' +
                        '              <div class="alert-body">\n' +
                        '                Category ' + data[1].cat_name + ' Berhasil ditambahkan \n' +
                        '              </div>\n' +
                        '              <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '                <span aria-hidden="true">×</span>\n' +
                        '              </button>\n' +
                        '            </div>\n');

                    if(data[0].type == 'parent'){
                        $('#parent_id').append('<option value="' + data[1].id + '">' + data[1].cat_name + '</option>');
                    } else {
                        $('#category').append('<option value="' + data[1].id + '">' + data[1].cat_name + '</option>');
                    }

                }
            });
        });
        //create Post
        $('#addNews').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url('api/create/news') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",

                success: function (data) {
                    $('#title').prop('');
                    $('.msg').html('<div class="alert alert-success alert-dismissible fade show" role="alert">\n' +
                        '              <div class="alert-body">\n' +
                        '              ' + data + '' +
                        '              </div>\n' +
                        '              <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '                <span aria-hidden="true">×</span>\n' +
                        '              </button>\n' +
                        '            </div>\n');
                }
            });
        });
    </script>
    <script>
        $(".agree").click(function () {
            if ($(this).prop("checked") == true) {
                $('#url_video').prop("disabled", false);
                $('.bgCardYt').removeClass("bg-light").addClass("bg-success text-white");
                $('#url_video').prop("required", true);


            } else if ($(this).prop("checked") == false) {
                $('#url_video').prop("disabled", true);
                $('.bgCardYt').removeClass("bg-success text-white").addClass("bg-light");
                $('#url_video').prop("required", false);
            }
        });
    </script>

    <script>
        $(".icon").click(function () {
            if ($(this).prop("checked") == true) {
                $('#icon').prop("disabled", false);
                $('.bgCardIcon').removeClass("bg-light").addClass("bg-success text-white");
                $('#icon').prop("required", true);


            } else if ($(this).prop("checked") == false) {
                $('#icon').prop("disabled", true);
                $('.bgCardIcon').removeClass("bg-success text-white").addClass("bg-light");
                $('#icon').prop("required", false);
            }
        });
    </script>




@endsection


<div class="modal modal-slide-in fade" id="addCat">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0" method="post" id="createCat">
            @csrf
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="title">New Record</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group" id="hdnID"></div>
                <div class="form-group">
                    <label class="form-label label" for="basic-icon-default-fullname">Full Name</label>
                    <input type="text" class="form-control" name="cat_name"/>
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1 titleBtn">Simpan</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
