<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->user_type == 'admin') {
            if ($request->ajax()) {

                $data = User::latest()->get();

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('image', function ($row) {
                        if ($row->image) {
                            $url = asset('images/users/' . $row->id . '/' . $row->image);
                        } else {
                            $url = asset('images/users/user.png');
                        }

                        return '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
                    })
                    ->addColumn('action', function ($row) {

                        $btn = '<a href="' . route('users.edit', $row->id) . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>';
                        $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>';
                        $btn = $btn . ' <a href="' . route('users.show', $row->id) . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="View" class="btn btn-info btn-sm viewUser">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['image', 'action'])
                    ->make(true);
            }

            return view('backend.userList');
        } else {
            return view('message.pages-error-403');
        }
    }   
}
