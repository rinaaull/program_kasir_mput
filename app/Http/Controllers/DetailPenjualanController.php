<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $detailpenjualan = DetailPenjualan::all();
        return view('home.detailpenjualan.index', compact('detailpenjualan'));
        $id_penjualan = $id;
        $detail_penjualan = detailpenjualan::where('id_penjualan', $id)->select('*')->get();
        return view('home.detailpenjualan.index', compact('id_penjualan', 'detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_penjualan = $id;
        return view('home.detailpenjualan.tambah',caompact('id_penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailPenjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'sub_total' => $request->sub_total,
        ]);
        return redirect('penjualan');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailpenjualan = DetailPenjualan::find($id);
        return view('home.detailpenjualan.edit', compact('detailpenjualan'));
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
        $detailpenjualan = DetailPenjualan::find($id);
        $detailpenjualan->update([
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'sub_total' => $request->sub_total,
            ]);
        return redirect('/detailpenjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailpenjualan = DetailPenjualan::find($id);
        $detailpenjualan->delete();
        return redirect('/penjualan');
    }
}
