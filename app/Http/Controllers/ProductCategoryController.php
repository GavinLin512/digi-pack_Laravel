<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->index = 'admin.product.category.index';
        $this->create = 'admin.product.category.create';
        $this->edit = 'admin.product.category.edit';
    }

    public function index()
    {
        $productCategoryData = ProductCategory::get();

        // dd($productData);
        return view($this->index, compact('productCategoryData'));
    }

    public function create()
    {
        return view($this->create);
    }

    public function store(Request $request)
    {
        ProductCategory::create([
            'category' => $request['category']
        ]);

        return redirect('/admin/product/category')->with('message', '新增產品種類成功！');
    }

    public function edit($id)
    {
        $categoryData = ProductCategory::find($id);

        return view($this->edit, compact('categoryData'));
    }

    public function update(Request $request, $id)
    {
        $old_categoryData = ProductCategory::find($id);
        $old_categoryData->category = $request->category;
        $old_categoryData->save();

        return redirect('/admin/product/category')->with('message', '更新產品種類成功！');
    }

    public function delete($id)
    {
        $old_categoryData = ProductCategory::with('products')->find($id);
        $count = $old_categoryData->products->count();

        if ($count != 0) {
            return redirect('/admin/product/category')->with('message', '無法刪除該產品種類，該產品種類內還有' . $count . '筆產品品項資料，請先刪除產品種類的產品品項。');
        } elseif ($count == 0) {
            $old_categoryData->delete();
            return redirect('admin/product/category')->with('message', '刪除產品種類成功！');
        }



    }


}
