<?php

namespace App\Http\Controllers;

use App\Category;
use App\Setting;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    protected $categories;

    public function __construct()
    {

        // Danh mục
        $menu = Category::where([
            'is_active' => 1,
        ])->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        // TT Câu hình
        $setting = Setting::first();

        // Chia sẻ dữ qua tất các layout
        view()->share([
            'setting' => $setting,
            'menu' => $menu
        ]);
    }
}
