<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        
        $data = Pelanggan::all();

        return view('pages.pelanggan.index',['data'=>$data]);
    }

    public function store(Request $request){
        
        $this->validate($request,[

            'name'   => 'required',
            'email'  => 'required',
            'alamat' => 'required'
           
          
         ]);

         Pelanggan::create([
             
            'name'   => $request->name,
            'email'  => $request->email,
            'alamat' => $request->alamat
              
        ]);
           
        return redirect('/pelanggan')->with('sukses','Pelanggan Baru berhasil diinput');

    }

    public function edit($id){

        $data = Pelanggan::findOrFail($id);

        return view('pages.pelanggan.edit',compact('data'));

    }

    public function update(Request $request,$id){

        $this->validate($request,[

            'name'   => 'required',
            'email'  => 'required',
            'alamat' => 'required'
           
          
         ]);

         $data = Pelanggan::findOrFail($id);
         $data->name = $request->name;
         $data->email = $request->email;
         $data->alamat = $request->alamat;

         $data->update();

         return redirect('/pelanggan')->with('sukses','Pelanggan berhasil diupdate');


    }

    public function destroy($id){

        $data = Pelanggan::findOrFail($id);

        $data->delete();
        return redirect('/pelanggan')->with('sukses','Pelanggan berhasil dihapus');
    }
}
