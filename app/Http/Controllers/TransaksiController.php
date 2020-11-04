<?php


namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cart = session()->get('shop');
        $total = 0;
        if ($cart != null) {
            foreach ($cart as $item) {
                $total += $item['harga'] * $item['jumlah'];
            }
        }
        $data = [
            'title' => 'User - Cart',
            'shop' => $cart ?? [],
            'books' => Items::all(),
            'total' => $total
        ];
        return view('user.cart', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buys($id)
    {
        $book = Items::where(['kd_brg' => $id])->get()[0];
        if ($id == '' || !$book) {
            return redirect()->back()->with('error', 'Tidak Ada Kode Buku yang Dimasukkan!!');
        }

        $cart = session()->get('shop');
        if (!$cart) {
            if ($book->stok > 0) {
                $cart = [
                    $id => [
                        'nama' => $book->judul,
                        'jumlah' => 1,
                        'harga' => $book->harga,
                        'gambar' => $book->gambar,
                    ]
                ];
                session()->put('shop', $cart);
                return redirect()->route('user.cart')->with('success', 'Buku telah Ditambahkan kedalam Keranjang!!');
            } else {
                return redirect()->back()->with('error', 'Stok Buku Kosong!!');
            }
        }

        if (isset($cart[$id])) {
            $cart[$id]['jumlah']++;
            session()->put('shop', $cart);
            return redirect()->route('user.cart')->with('success', 'Buku telah Ditambahkan kedalam Keranjang!!');
        }
        $cart[$id] = [
            'nama' => $book->judul,
            'jumlah' => 1,
            'harga' => $book->harga,
            'gambar' => $book->gambar,
        ];
        session()->put('shop', $cart);
        return redirect()->route('user.cart')->with('success', 'Buku telah Ditambahkan kedalam Keranjang!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $cart = session()->get('shop');
        if ($cart) {
            $kd_trans = "KD" . rand(0, 9999) . time();
            foreach ($cart as $key => $item) {
                $data = [
                    'kd_transaksi' => $kd_trans,
                    'kd_brg' => $key,
                    'id' => Auth::user()->id,
                    'alamat' => $req->alamat,
                    'jumlah' => $item['jumlah'],
                    'harga' => $item['harga'],
                    'created_at' => now()
                ];
                Transaksi::insert($data);
            }
            session()->forget('shop');
            return redirect()->back()->with("success", "Berhasil Melakukan Transaksi!!");
        } else {
            return redirect()->back()->with("error", "Tidak Ada Buku yang dibeli!!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$id) {
            return redirect()->route('user.cart')->with('error', 'Tidak Ada Kode Buku yang Dimasukkan!!');
        }

        $cart = session()->get('shop');
        if ($cart[$id]) {
            $carts = [];
            foreach ($cart as $key => $value) {
                if ($key != intval($id)) {
                    $carts[$key] = $value;
                }
            };
            session()->put('shop', $carts);
            return redirect()->back()->with('success', 'Buku telah Hapus dari Keranjang!!');
        }
    }
}
