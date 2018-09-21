@extends('layouts.skeleton')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Barang</h4>
                                 <div class="text-right">

                                                        <a href="{{url('barang_masuk/create')}}" class="btn btn-sm btn-success btn-icon" >	
                                                        <i class="fa fa-plus"></i></a>



                                                      <a href="{{route('downloadpdf_allbarangmasuk')}}" class="btn btn-sm btn-success btn-icon" >  
                                                        <i class="fa fa-download"></i></a>

                                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                    	<th>No Nota</th>
                                        <th>ID Supplier</th>
                                    	<th>Nama Supplier</th>
                                    	<th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                    	<th>Stok</th>
                                    	<th>Pilihan</th>
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)
                                    @foreach($barang_masuk as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->tanggal}}</td>
                                     <td>{{$data->no_nota}}</td>
                                     <td>{{$data->supplier->kode_supplier}}</td>
                                     <td>{{$data->supplier->nm_supplier}}</td>
                                     <td>{{$data->kode_barang}}</td>
                                     <td>{{$data->nm_barang}}</td>
                                     <td>{{$data->stok}}</td>
                                     <td>
                                     	
                                     		  <a href="{{url('barang_masuk/edit/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>

                                     		    <a href="{{ route('delete_barangmasuk',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>
                                

 <a href="{{url('Peminjaman/create/'.$data->id) }} " class="btn btn-xs btn-success"><i class="fa fa-book"></i> </a>


 <a href="{{url('mutasi_keluar/create/'.$data->id) }} " class="btn btn-xs btn-danger"><i class="fa fa-truck"></i> </a>


                                     </td>
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


	







@endsection