@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($customer))?route('rental.update',$customer->id_customer):route('rental.store')}}" method="POST">
        @csrf
        @if(isset($customer))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Nama Customer</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($customer))?$customer->merk_customer:old('merk_customer')}}" name="Nama_Customer" class="form-control">
                    @error('Nama_Customer')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Alamat_Customer</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($customer))?$customer->plat_customer:old('Alamat_Customer')}}" name="Alamat_Customer" class="form-control">
                    @error('Alamat_Customer')<small style="color:red">{{$message}}</small>@enderror
                </div>
            </div>
            
            
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
@endsection