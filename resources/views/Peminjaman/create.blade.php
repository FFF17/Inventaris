@extends('layouts.skeleton')
@section('content')

        <form  action="{{url('Peminjaman/create')}}" method="post"  enctype="multipart/form-data">
                                                {!! csrf_field() !!}

                      

        <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Supplier</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                               


                                <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="text"  name="tanggal" class="form-control border-input" placeholder="dd-mm-yyyy" value="{{$barang->tanggal}}" disabled> 
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Nota</label>
                                                <input type="text"  name="no_nota"  value="{{$barang->no_nota}}" class="form-control border-input"  disabled="">
                                            </div>
                                        </div>
                                      
                                    </div>

                                

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kode Barang</label>
                                                <input type="text" value="{{$barang->kode_barang}}" class="form-control border-input" name="kode_barang" disabled="" >
                                            </div>
                                        </div>
                                

                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" value="{{$barang->nm_barang}}" class="form-control border-input" name="nm_barang" disabled="">  
                                            </div>
                                        </div>
                                     
                                    </div>
                                                                        <div class="row">
                                                                                    <div class="col-md-4">

                                                                         <div class="form-group">
                                                <label>Qty</label>
                                                <input type="number" value="{{$barang->stok}}" class="form-control border-input" name="qty" max="{{$barang->stok}}">
                                            </div>
                                        </div>
                                        





                                    </div>

  
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->name }}">
                                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                                <input type="hidden" name="id" value="{{$barang->id}}">


                              
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </form>

@endsection