@extends('layouts.admin-master')

@section('title')
Create Lokasi Aset
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Lokasi Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.lokasi_aset.index') }}">Lokasi Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                  <form action="{{ route('admin.lokasi_aset.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
                  @csrf   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" id="opd_id" name="opd_id" class="form-control">
                        <option value="" hidden>Pilih OPD</option>
                        @foreach($opd as $o)
                           <option value="{{ $o->id_opd }}"> {{ $o->nama_opd }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="lokasi" id="lokasi">
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</section>
@endsection
