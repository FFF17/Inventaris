@extends('layouts.skeleton')
@section('content')

        <form  action="{{url('supplier/create')}}" method="post"  enctype="multipart/form-data">
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
                                                <input type="date"  name="tanggal" class="form-control border-input" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kode Supplier</label>
                                                <input type="text"  name="kode_supplier" class="form-control border-input" placeholder="5 Digit">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input type="text" class="form-control border-input" name="nm_supplier">
                                            </div>
                                        </div>
                                    </div>

                                

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control border-input" name="alamat" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="text" class="form-control border-input" name="telepon">
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