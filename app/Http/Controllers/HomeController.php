<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_Masuk;
use App\Supplier;
use App\Peminjaman;
use App\Mutasi_Keluar;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

  
    public function index_supplier(){

        $data['supp'] = \App\Supplier::all();
        return view('supplier/index')->with($data);

    }

    public function create_supplier(){

        $data['supplier'] = \App\Supplier::all();

    return view('supplier/create');


    }

    public function save_supplier(Request $r){



        $supplier = new Supplier;
        $supplier->tanggal = $r->input('tanggal');
        $supplier->kode_supplier = $r->input('kode_supplier');
        $supplier->nm_supplier = $r->input('nm_supplier');
        $supplier->alamat = $r->input('alamat');
        $supplier->telepon = $r->input('telepon');
        $supplier->save();
        return redirect(url('supplier/index'));

    }
public function edit_supplier($id){
            $data['supplier'] = Supplier::find($id);

    return view('supplier/edit')->with($data);
}
public function update_supplier(Request $r){

           
                    $id = $r->input('id');
            
            $supplier = Supplier::find($id);
            $supplier->tanggal = $r->input('tanggal'); 
            $supplier->kode_supplier = $r->input('kode_supplier'); 
            $supplier->nm_supplier = $r->input('nm_supplier'); 
            $supplier->alamat = $r->input('alamat'); 
            $supplier->telepon = $r->input('telepon'); 
          
            $supplier->save();
        return redirect(url('supplier/index'));






}
public function delete_supplier($id)
    {
        Supplier::whereId($id)->delete();
        return redirect(url('supplier/index'));
    }



public function index_barangmasuk(){

    $data['barang_masuk'] = Barang_Masuk::all();
    return view('barang_masuk/index')->with($data);
}


public function create_barangmasuk(){

    $data['supplier'] = Supplier::all();
    return view('barang_masuk/create')->with($data);
}

public function save_barangmasuk(Request $r){

$barang_masuk = new Barang_Masuk;
$barang_masuk->tanggal = $r->input('tanggal');
$barang_masuk->no_nota = $r->input('no_nota');
$barang_masuk->id_supplier = $r->input('id_supplier');
$barang_masuk->kode_barang = $r->input('kode_barang');
$barang_masuk->nm_barang = $r->input('nm_barang');
$barang_masuk->stok = $r->input('stok');

$barang_masuk->save();
return redirect(url('barang_masuk/index'));
}


public function edit_barangmasuk($id){
            $data['supplier'] = Supplier::all();
            $data['barang_masuk'] = Barang_Masuk::find($id);

    return view('barang_masuk/edit')->with($data);
}
public function update_barangmasuk(Request $r){

           
                    $id = $r->input('id');
            
$barang_masuk = Barang_Masuk::find($id);
$barang_masuk->tanggal = $r->input('tanggal');
$barang_masuk->no_nota = $r->input('no_nota');
$barang_masuk->id_supplier = $r->input('id_supplier');
$barang_masuk->kode_barang = $r->input('kode_barang');
$barang_masuk->nm_barang = $r->input('nm_barang');
$barang_masuk->stok = $r->input('stok');

$barang_masuk->save();
return redirect(url('barang_masuk/index'));





}
public function delete_barangmasuk($id)
    {
        Barang_Masuk::whereId($id)->delete();
        return redirect(url('barang_masuk/index'));
    }


public function index_peminjaman(){


    $data['peminjaman'] = Peminjaman::all();
    return view('Peminjaman.index')->with($data);
}


public function create_peminjaman($id){

    $data['barang'] = Barang_Masuk::where('id',$id)->first();

        return view('Peminjaman/create',$data);



}

public function save_peminjaman(Request $r){

$update = Barang_Masuk::where('id', $r->input('id'))->first();
$update->stok = $update->stok - $r->input('qty');
$update->update();

    $peminjam = new Peminjaman;
    $peminjam->user_id = $r->input('user_id');
    $peminjam->email = $r->input('email');
    $peminjam->qty = $r->input('qty');
    $peminjam->id_barang = $r->input('id');
    $peminjam->status = "Sedang Meminjam";

    $peminjam->save();

    return redirect(url('Peminjaman/index')); 
}


public function create_pengembalian(Request $r,$id){    
    $peminjam = Peminjaman::find($id);
    return view('Pengembalian/create')->with('peminjam',$peminjam);



}

public function save_pengembalian(Request $r){

$update = Barang_Masuk::where('id', $r->input('id_barang'))->first();
$update->stok = $update->stok + $r->input('qty');
$update->update();

 $peminjam = Peminjaman::find($r->input('id'));
 $peminjam->qty = $peminjam->qty - $r->input('qty');
 $peminjam->update();

 return redirect(url('Peminjaman/index'));  
}






public function create_mutasikeluar($id){

    $data['barang'] = Barang_Masuk::where('id',$id)->first();

        return view('mutasi_keluar/create',$data);



}

public function save_mutasikeluar(Request $r){

$update = Barang_Masuk::where('id', $r->input('id'))->first();
$update->stok = $update->stok - $r->input('jumlah_barang');
$update->update();

   
  $mutasi_keluar = new Mutasi_Keluar;
  $mutasi_keluar->pengirim = $r->input('pengirim');
  $mutasi_keluar->penerima = $r->input('penerima');
  $mutasi_keluar->id_barang = $r->input('id');
  $mutasi_keluar->jumlah_barang = $r->input('jumlah_barang');
$mutasi_keluar->save();

    return redirect(url('mutasi_keluar/index')); 
}



public function index_mutasikeluar(){

    $data['mutasi_keluar'] = Mutasi_Keluar::all();
    return view('mutasi_keluar/index')->with($data);
}





public function downloadpdf_allmutasikeluar()
    {
        $data['mutasi_keluar'] = Mutasi_Keluar::all();
        $pdf = PDF::loadview('mutasi_keluar.pdfall',$data);
/*        dd($data['mail']);
*/        return $pdf->download('data_mutasikeluarall.pdf');
    }




public function downloadpdf_allbarangmasuk()
    {
        $data['barang_masuk'] = Barang_Masuk::all();
        $pdf = PDF::loadview('barang_masuk.pdfall',$data);
/*        dd($data['mail']);
*/        return $pdf->download('data_barangmasukall.pdf');
    }



public function downloadpdf_allpeminjam()
    {
        $data['peminjaman'] = Peminjaman::all();
        $pdf = PDF::loadview('Peminjaman.pdfall',$data);
/*        dd($data['mail']);
*/        return $pdf->download('data_peminjamall.pdf');
    }








public function downloadpdf_allsupplier()
    {
        $data['supp'] = Supplier::all();
        $pdf = PDF::loadview('supplier.pdfall',$data);
/*        dd($data['mail']);
*/        return $pdf->download('data_supplierall.pdf');
    }













}
