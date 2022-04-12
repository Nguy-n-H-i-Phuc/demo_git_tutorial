<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //them bai viiet
    function add()
    {

        return view('admin.post.add');
    }
    //danh sach bai viet
    function show($id)
    {
        // return "day la trang admin post show co id=" . $id;
        return view('admin.post.show', ['id' => $id]);
    }
    // cap nhat bai viet
    function update($id)
    {

        return view('admin.post.update', ['id' => $id]);
    }
    // xoa bai viet
    function delete($id)
    {
        return "xoa trang co id =" . $id;
    }
}
