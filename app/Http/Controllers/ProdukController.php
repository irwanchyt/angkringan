<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index(){
        
        $data = Produk::all();

        return view('pages.Produk.index',['data'=>$data]);
    }

    public function store(Request $request){
        
        $this->validate($request,[

            'product_name' => 'required',
            'description'  => 'required',
            'stok'         => 'required'
           
          
         ]);

         Produk::create([
             
            'product_name' => $request->product_name,
            'description'  => $request->description,
            'stok'         => $request->stok
              
        ]);
           
        return redirect('/Produk')->with('sukses','Produk Baru berhasil diinput');

    }

    public function edit($id){

        $data = Produk::findOrFail($id);

        return view('pages.Produk.edit',compact('data'));

    }

    public function update(Request $request,$id){

        $this->validate($request,[

            'name'   => 'required',
            'email'  => 'required',
            'alamat' => 'required'
           
          
         ]);

         $data = Produk::findOrFail($id);
         $data->name = $request->name;
         $data->email = $request->email;
         $data->alamat = $request->alamat;

         $data->update();

         return redirect('/Produk')->with('sukses','Produk berhasil diupdate');


    }

    public function destroy($id){

        $data = Produk::findOrFail($id);

        $data->delete();
        return redirect('/Produk')->with('sukses','Pelanggan berhasil dihapus');
    }
}
