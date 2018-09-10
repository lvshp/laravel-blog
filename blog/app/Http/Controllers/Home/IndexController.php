<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 博客首页
    public function index()
    {
        //
        return view('Home/index');
    }

    // 导航更新页
    public function update(){
        return view('Home/update');
    }
    // 导航链接页
    public function link(){
        return view('Home/link');
    }

    //导航归档页
    public function archives(){
        return view('Home/archives');
    }

    //搜索
    public function search(){
        return view('Home/search');
    }

    //留言
    public function gustbook(){
        return view('Home/gustbook');
    }

    //博客文章页
    public function detail(){
        return view('Home/detail');
    }


}
