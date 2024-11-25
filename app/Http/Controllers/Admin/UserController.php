<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserPasswordUpdateRequest;
use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Http\Requests\Admin\User\UserUpdateRequest;
use App\Services\UserService;
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

    public function show(Request $request, int $id)
    {
        return view('admin.users.show', [
            'user' => UserService::getUserData($id),
        ]);
    }

    public function edit(Request $request, int $id)
    {
        return view('admin.users.edit', [
            'user' => UserService::getUserData($id),
        ]);
    }

    public function update(UserUpdateRequest $request, int $id)
    {
        UserService::updateUser($id, $request->validated());

        return redirect(route('users.show', ['id' => $id]));
    }

    public function editPassword(Request $request, int $id)
    {
        return view('admin.users.password', [
            'user' => UserService::getUserData($id),
        ]);
    }

    public function updatePassword(UserPasswordUpdateRequest $request, int $id)
    {
        UserService::updateUserPassword($id, $request->password);

        return redirect(route('users.show', ['id' => $id]));
    }
}
