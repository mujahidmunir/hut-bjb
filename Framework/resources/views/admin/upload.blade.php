@extends('layouts.admin.master')
@section('content')
    <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3>Export Data</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="file" class="form-control" name="import">
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group float-right">
                    <input type="submit" value="Export" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

@endsection
