<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Services\UserService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.users.index', [
            'users' => UserService::getUserPagination(),
        ]);
    }

    public function create(Request $request)
    {
        return view('admin.users.create');
    }

    public function store(UserStoreRequest $request)
    {
        UserService::storeUser($request->validated());

        return redirect(route('users.index'));
    }

    public function edit(Request $request, int $id)
    {
        return view('admin.users.edit', [
            'user' => UserService::getUserPagination(),
        ]);
    }

    public function update(FormRequest $request)
    {
        return 1;
    }
}
