@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <div class="panel-body">
            <div class="col-lg-12">
            <div class="col-lg-6">
                <blockquote col="col-md-12">
                
                        <b>BIODATA</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Nama
                        </div>
                        <div class="col-md-8 no-margin">
                            Rizky Kurniawan
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Nim
                        </div>
                        <div class="col-md-8 no-margin">
                            1815051058
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Program Studi
                        </div>
                        <div class="col-md-8 no-margin">
                            Pendidikan Teknik Informatika
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                 <blockquote col="col-md-12">
                        <b>STUDI KASUS</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            Judul
                        </div>
                        <div class="col-md-8 no-margin">
                            Sistem Rental Mobil
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            Penjelasan
                        </div>
                        <div class="col-md-8 no-margin">
                        Tujuan dibuatnya sistem rental mobil ini yaitu untuk memudahkan pelanggan dalam pemilihan mobil yang ingin disewa  
                        </div>
                    </div>
            </div>
            </div>
            <div class="col-lg-12">
            <a href="{{route('rental.create')}}">Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>NAMA CUSTOMER</th><th>ALAMAT</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($customer as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->Nama_Customer}}</td><td>{{$val->Alamat_Customer}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->Id_Customer)}}">update</a>
                        <form action="{{route('rental.destroy', $val->Id_Customer)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$customer->links()}}
            </div>
        </div>
    </div>
</div>
@endsection