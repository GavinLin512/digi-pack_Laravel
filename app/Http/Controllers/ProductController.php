<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function GuzzleHttp\json_decode;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->index = 'admin.product.item.index';
        $this->create = 'admin.product.item.create';
        $this->edit = 'admin.product.item.edit';
    }

    public function index()
    {
        $productData = Product::with('category')->get();


        // dd($productData);
        return view($this->index, compact('productData'));
    }

    public function create()
    {
        $category = ProductCategory::get();
        // dd($category);
        // $color = Product::COLOR;
        $size = Product::SIZE;
        return view($this->create, compact('category', 'size'));
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        // dd($request->pin_to_top);
        $color = json_encode($request->input('color'));
        // dd(json_decode($color));

        if ($request->hasFile('product_img')) {
            $requestData['product_img'] = FileController::imageUpload($request->file('product_img'), 'product');
        }

        // $pinValue = $request->pin_to_top;

        if ($request->pin_to_top === null) {
            $pin_to_top = 0;
        } else {
            $pin_to_top = $request->input('pin_to_top');
        }

        Product::create([
            'product_name' => $request->product_name,
            'product_category_id' => $request->product_category_id,
            'price' => $request->price,
            'color' => $color,
            'size' => $request->size,
            'discript' => $request->discript,
            'product_img' => $requestData['product_img'],
            'pin_to_top' => $pin_to_top
        ]);
        // dd($color);

        return redirect('/admin/product/item')->with('message', '新增產品成功！');
    }

    public function delete($id)
    {
        $old_record = Product::find($id);
        // dd(public_path() . $old_record->product_img);
        if (file_exists(public_path() . $old_record->product_img)) {
            // 如果該檔案存在，就刪除該檔案
            File::delete(public_path() . $old_record->product_img);
        }
        $old_record->delete();

        return redirect('/admin/product/item')->with('message', '刪除產品品項成功！');
    }

    public function edit($id)
    {
        $old_productData = Product::with('category')->find($id);
        // dd($old_productData->color);
        $category = ProductCategory::get();
        $sizes = Product::SIZE;
        $size = $old_productData->size;
        $colors = $old_productData->color;
        // dd($size);
        // $colors = json_decode($old_productData->color);
        // $color = $old_productData->color;
        // dd($color);

        return view($this->edit, compact('old_productData','size','sizes', 'category', 'colors'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        // dd($requestData);
        $old_productData = Product::with('category')->find($id);

        if ($request->hasFile('product_img')) {
            File::delete(public_path().$old_productData->product_img);
            $path = FileController::imageUpload($request->file('product_img'),'product');
            $requestData['product_img'] = $path;
        }

        if ($request->pin_to_top === null) {
            $requestData['pin_to_top'] = 0;
        } else {
            $requestData['pin_to_top'] = $request->input('pin_to_top');
        }
        // dd($requestData['pin_to_top']);
        $old_productData->update($requestData);




        // $old_productData->update($requestData[$pin_to_top]);
        return redirect('/admin/product/item')->with('message', '編輯產品品項成功！');
    }

}
