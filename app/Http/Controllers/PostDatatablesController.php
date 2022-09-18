<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostDatatablesController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDatatablesPost(Request $request)
    {
//        dump($request);
        $users = User::select(['id','name','email','created_at','updated_at']);
        return Datatables::of($users)->make(true);
    }
}
