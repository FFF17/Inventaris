@extends('layouts.skeleton')
@section('content')

        <form  action="{{url('barang_masuk/create')}}" method="post"  enctype="multipart/form-data">
                                                {!! csrf_field() !!}
                              <input type="hidden" name="id" value="{{ $barang_masuk->id }}">
                      

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
                                                <input type="text"  name="tanggal" class="form-control border-input" placeholder="dd-mm-yyyy" value="{{$barang_masuk->tanggal}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Nota</label>
                                                <input type="text"  name="no_nota"  value="{{$barang_masuk->no_nota}}" class="form-control border-input" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
      <div class="form-group">
 <label for="inputState">Kode Supplier</label>
      <select id="inputState" class="form-control"  name="id_supplier" value="{{$barang_masuk->id_supplier}}">
         <option selected>Choose...</option>
      @foreach($supplier as $key)
                    @if(isset($barang_masuk->id_supplier))
                        @if($barang_masuk->id_supplier==$key->id)

<option selected value="{{$key->id}}">{{$key->kode_supplier}}</option>
                        @else
                            <option value="{{$key->id}}">{{$key->kode_supplier}}</option>
                        @endif
                    @else
                        <option value="{{$key->id}}">{{$key->kode_supplier}}</option>
                    @endif
                @endforeach

   
      </select>

                                            </div>

                                            </div>
                                    </div>

                                

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kode Barang</label>
                                                <input type="text" value="{{$barang_masuk->kode_barang}}" class="form-control border-input" name="kode_barang" >
                                            </div>
                                        </div>
                                

                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" value="{{$barang_masuk->nm_barang}}" class="form-control border-input" name="nm_barang">  
                                            </div>
                                        </div>
                                     
                                    </div>
                                                                        <div class="row">
                                                                                    <div class="col-md-4">

                                                                         <div class="form-group">
                                                <label>Stok</label>
                                                <input type="number" value="{{$barang_masuk->stok}}" class="form-control border-input" name="stok">
                                            </div>
                                        </div>
                                    </div>



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