<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{

    public function store(Request $request){
        $valData = $request->validate([
            'nama_depan'=> 'required|string',
            'nama_belakang' => 'required|string',
            'email' => 'required|string',
            'nomor_hp'=> 'required|string|max:13',
            'alamat'=> 'required|string'
        ]);

        Customers::create($valData);

        return redirect()->route('admin.customer')->with('success','Data Customer Berhasil Ditambahkan');
    }

    public function edit($id){
        return view('admin.crud.edit',[
            'customers' => Customers::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_depan'=> 'required|string',
            'nama_belakang' => 'required|string',
            'email' => 'required|string',
            'nomor_hp'=> 'required|string|max:13',
            'alamat'=> 'required|string'
        ]);

        $customer = Customers::findOrFail($id);

        $customer->update([
        'nama_depan' => $request->nama_depan,
        'nama_belakang' => $request->nama_belakang,
        'email' => $request->email,
        'nomor_hp' => $request->nomor_hp,
        'alamat' => $request->alamat,
        ]);
        return redirect()->route('admin.customer')->with('success','Data Customer Berhasil Diubah');
    }

    public function delete($id){
        $mahasiswa = Customers::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('admin.customer')->with('success','Data Customer Berhasil Dihapus');
    }
}
