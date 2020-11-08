<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'required|file'
        ]);
        $img = $request->file('gambar');
        $fileName = "BOOK" . rand(0, 99999) . "IMG" . rand(0, 9999) . "." . $img->getClientOriginalExtension();
        $img->move('image/', $fileName);
        $data = [
            'judul' => $request->judul,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $fileName,
            'created_at' => now()
        ];
        $create =  Items::insert($data);
        if ($create) {
            return redirect()->route('home')->with('success', 'Berhasil Menambahkan Item Buku!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items, $id)
    {
        $data = [
            'items' => $items::find($id),
            'title' => 'Edit Profile'
        ];
        return view('admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        $book = Items::find($id);
        if ($request->has('gambar')) {
            $img = $request->file('gambar');
            $fileName = "BOOK" . rand(0, 99999) . "IMG" . rand(0, 9999) . "." . $img->getClientOriginalExtension();
            $img->move('image/', $fileName);
        } else {
            $fileName = $book->gambar;
        }
        $data = [
            'judul' => $request->judul,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $fileName,
            'created_at' => now()
        ];
        $upp = Items::where('kd_brg', $id)->update($data);
        if ($upp) {
            return redirect()->route('home')->with('success', 'Berhasil Mengubah Item Buku!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
}
