@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Surat KP</h1>
  <a href="#" class="btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Surat
  </a>
</div>
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" collspacing="0">
            <thead>
                <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Location</th>
                <th>Type</th>
                <th>Departure Date</th>
                <th>Type</th>
                <th>Action</th>
                </tr>
            </thead>
           
            <tbody>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="#" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="#" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
                </tr>
                
            </tbody>
            </table>
        </div>
    </div>
</div>






</div>
<!-- /.container-fluid -->
@endsection