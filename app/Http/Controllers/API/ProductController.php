<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ResponseFormatter;

class ProductController extends Controller
{
    public function index()
    {
        //Mengambil Data Produk
        $product = Product::all();

        return ResponseFormatter::success($product, 'Semua Data Telah Di Keluarkan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required',
            'productPrice' => 'integer|required',
            'productDescription' => 'required',
            'store_id' => 'integer|required'
        ]);

        Product::create($request->all());

        return ResponseFormatter::success('Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return ResponseFormatter::success($product, 'Data Produk Berhasil Di Update');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return ResponseFormatter::success('Data Berhasil Di Hapus');
    }
}
