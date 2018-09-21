@extends('layouts.skeleton')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Mutasi Keluar</h4>
                                 <div class="text-right">

                                                      
                                                          <a href="{{route('downloadpdf_allmutasikeluar')}}" class="btn btn-sm btn-success btn-icon" >  
                                                        <i class="fa fa-download"></i></a>
                                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Pengirim</th>
                                    	<th>Penerima</th>
                                    	<th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                    	
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)
                                    @foreach($mutasi_keluar as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->pengirim}}</td>
                                     <td>{{$data->penerima}}</td>
                                     <td>{{$data->barang->nm_barang}}</td>
                                     <td>{{$data->jumlah_barang}}</td>
                                     
                                     	
                                     		 
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


	







@endsection