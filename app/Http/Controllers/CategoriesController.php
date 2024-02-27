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

        $id = $request->query('id');
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
    public function handleAddCategory()
    {
        return view('clients/categories/add');
    }
    //thêm dữ liệu vào chuyên mục(phương thức POST)
    public function handleCategory(Request $request)
    {
        $allData = $request->all();
        dd($allData);

        if ($request->isMethod('POST')) {
            echo 'Method POST';
        }

        $cateName = $request->category_name; //trả về mảng
        dd($cateName);

        // if ($request->has('category_name')) {
        //     $cateName = $request->category_name;
        //     dd($cateName);
        // } else {
        //     return 'Không có category_name';
        // }


        if ($request->has('category_name')) {
            $cateName = $request->category_name;
            $request->flash;
            return redirect(route('categories.add'));
        } else {
            return 'Không có category_name';
        }

        // return 'Submit thêm chuyên mục';
    }

    public function addCategory(Request $request)
    {
        // $path = $request -> path();
        // echo $path;
        $old = $request->old('category_name');
        // echo $old;
        return view('clients/categories/add');
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

    //xử lí lấy thôg tin file
    public function handleFile(Request $request)
    {
        if ($request->hasFile('photo')) {
            if($request -> hasFile('photo')){
                $file = $request->file('photo');
                $file = $request -> photo;
                $path = $file -> store('image');
                dd($path);
            }else{
                return "Upload không thành công";
            }
        } else {
            echo "Chọn file";
        }

    }
}
