<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //BeLongTo mỗi quan hệ nghịch đảo một danh mục con chỉ ở 1 danh mục cha
    public function parent(){
        return $this->belongsTo("App\Category", "parent_id");
    }
    // 1 danh mục có nhiều sản phẩm
    public function products(){
        return $this->hasMany('App\Product');
    }

}
