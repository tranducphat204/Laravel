<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct()
    {
    }
    //Hiển thị danh sách chuyên mục(phương thức GET)
    public function index()
    {
        return view('clients/categories/list');
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
    public function handleCategory()
    {
        return 'Submit thêm chuyên mục';
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
