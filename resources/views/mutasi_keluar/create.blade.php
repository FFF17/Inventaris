@extends('layouts.skeleton')
@section('content')

        <form  action="{{url('mutasi_keluar/create')}}" method="post"  enctype="multipart/form-data">
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
                                                <label>Pengirim</label>
                                                <input type="text"  name="pengirim" class="form-control border-input" placeholder="dd-mm-yyyy"  value="{{ Auth::user()->name }}"> 
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Penerima</label>
                                                <input type="text"  name="penerima"   class="form-control border-input"  >
                                            </div>
                                        </div>
                                      
                                    </div>

                                

                                   

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" value="{{$barang->nm_barang}}" class="form-control border-input" name="nm_barang" disabled="">  
                                            </div>
                                        </div>
                                     
                                    
                                            
                                                                                    <div class="col-md-4">

                                                                         <div class="form-group">
                                                <label>Jumlah Barang</label>
                                                <input type="number" value="{{$barang->stok}}" class="form-control border-input" name="jumlah_barang" max="{{$barang->stok}}">
                                            </div>
                                        </div>
                                        





                                    </div>

  
                                              
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