<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct(Request $request)
    {
        if ($request->is('/')) {
            echo 'Xin chào unicode';
        }
    }
    //Hiển thị danh sách chuyên mục(phương thức GET)
    public function index(Request $request)
    {
        // $path = $request->path();
        // echo $path;

        $url = $request->url();
        $fullUrl = $request->fullUrl();
        $method = $request->method();
        // if($request -> isMethod('GET')){
        //     echo 'Phương thức GET';
        // }
        $ip = $request->ip();
        $server = $request->server();
        // dd($server);
        // echo $fullUrl;
        $header = $request->headers();
        $id = $request->input('id');
        $id = $request->input('id.0');//get index 0
        $id = $request->input('id.0.name');//get name of array 1
        $id = $request->input('id.*.name');//get all name of aray 2 chiều
        $input = $request->input();

        $id = $request->id;
        $name = $request->name;
        dd($input);



        // return view('clients/categories/list');
    }

    // Lấy ra một chuyên mục theo id
    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    //Cập nhật một thư mục(phương thức POST)
    public function updateCategory($id)
    {
        return 'Submit sửa chuyên mục' . $id;
    }

    //thêm dữ liệu vào chuyên mục(phương thức POST)
    public function addCategory()
    {
        return view('clients/categories/add');
    }
    //thêm dữ liệu vào chuyên mục(phương thức POST)
    public function handleCategory(Request $request)
    {
        $allData = $request->all();
        dd($allData);
        // return 'Submit thêm chuyên mục';
    }

    //show form thêm dữ liệu
    public function showCategory()
    {

    }

    //xoá dl
    public function deleteCategory($id)
    {
        return 'Submit xoá chuyên mục' . $id;
    }
}
