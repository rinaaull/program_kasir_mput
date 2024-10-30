<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $Transaksi = Transaksi::all();
        return view('home.Transaksi.index', compact('Transaksi'));
        // $id_penjualan = $id;
        // $detail_penjualan = Transaksi::where('id_penjualan', $id)->select('*')->get();
        // return view('home.Transaksi.index', compact('id_penjualan', 'detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('home.Transaksi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'sub_total' => $request->sub_total,
        ]);
        return redirect('Transaksi');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Transaksi = Transaksi::find($id);
        return view('home.Transaksi.edit', compact('Transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Transaksi = Transaksi::find($id);
        $Transaksi->update([
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'sub_total' => $request->sub_total,
            ]);
        return redirect('/Transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Transaksi = Transaksi::find($id);
        $Transaksi->delete();
        return redirect('/Transaksi');
    }
}
