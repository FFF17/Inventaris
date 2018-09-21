@extends('layouts.skeleton')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Supplier</h4>
                                 <div class="text-right">

                                                        <a href="{{url('supplier/create')}}" class="btn btn-sm btn-success btn-icon" >	
                                                        <i class="fa fa-plus"></i></a>

                                                           <a href="{{route('downloadpdf_allsupplier')}}" class="btn btn-sm btn-success btn-icon" >	
                                                        <i class="fa fa-download"></i></a>
                                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                    	<th>ID</th>
                                    	<th>Nama</th>
                                    	<th>Alamat</th>
                                    	<th>No.Telepon</th>
                                    	<th>Pilihan</th>
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)
                                    @foreach($supp as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->tanggal}}</td>
                                     <td>{{$data->kode_supplier}}</td>
                                     <td>{{$data->nm_supplier}}</td>
                                     <td>{{$data->alamat}}</td>
                                     <td>{{$data->telepon}}</td>
                                     <td>
                                     	
                                     		  <a href="{{url('supplier/edit/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>

                                     		    <a href="{{ route('delete_supplier',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>
                                




                                     </td>
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


	







@endsection