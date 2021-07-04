<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    // protected $table ='product';

    // const COLOR = [
    //     'white' => '#e4e7eb', 'black' => '#000000', 'purple' => '#6366f1'
    // ];

    const SIZE = [
        'extra_small' => 'XS','small' => 'S', 'medium' => 'M', 'large' => 'L', 'extra_large' => 'XL','extra_extra_large' => 'XXL'
    ];

    protected $fillable = [
        'product_name', 'product_category_id', 'price', 'discript', 'product_img', 'pin_to_top', 'color', 'size'
    ];

    // 只要有資料透過 model 進行存取（新增、修改、使用）修改器 必須放在關聯上面 有優先順序
    public function setSizeAttribute($value)
    {
        $this->attributes['size'] = json_encode($value);
    }
    // 根據不同的 attribute 要寫在不同地方
    public function setColorAttribute($value)
    {
        $this->attributes['color'] = json_encode($value);
    }

    public function getSizeAttribute($value)
    {
        return $this->attributes['size'] = json_decode($value);
    }

    public function getColorAttribute($value)
    {
        return $this->attributes['color'] = json_decode($value);
    }

    public function category()
    {
        return $this->hasOne('App\ProductCategory', 'id', 'product_category_id');
    }


}
