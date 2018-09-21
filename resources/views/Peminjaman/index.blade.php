@extends('layouts.skeleton')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Peminjaman</h4>
                                 <div class="text-right">

                                                      

                                                      <a href="{{route('downloadpdf_allpeminjam')}}" class="btn btn-sm btn-success btn-icon" >  
                                                        <i class="fa fa-download"></i></a>
                                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>User</th>
                                    	<th>Email</th>
                                    	<th>qty</th>
                                    	<th>Nama Barang</th>
                                    	<th>Pilihan</th>
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)
                                    @foreach($peminjaman as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->user_id}}</td>
                                     <td>{{$data->email}}</td>
                                     <td>{{$data->qty}}</td>
                                     <td>{{$data->barang->nm_barang}}</td>
                                     <td>
                                     	
                                     		  <a href="{{url('Pengembalian/create/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>
       
                                




                                     </td>
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


	







@endsection