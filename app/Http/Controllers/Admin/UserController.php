<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserDeleteRequest;
use App\Http\Requests\Admin\User\UserPasswordUpdateRequest;
use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Http\Requests\Admin\User\UserUpdateRequest;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/users
     */
    public function index(Request $request): View
    {
        return view('admin.users.index', [
            'users' => UserService::getUserPagination(),
        ]);
    }

    /**
     * @param Request $request
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/users/create
     */
    public function create(Request $request): View
    {
        return view('admin.users.create');
    }

    /**
     * @param UserStoreRequest $request
     *
     * @return RedirectResponse
     *
     * @method POST
     * @endpoint /admin/users/{id}
     */
    public function store(UserStoreRequest $request): RedirectResponse
    {
        UserService::storeUser($request->validated());

        return redirect(route('users.index'));
    }

    /**
     * @param Request $request
     * @param int $id User ID
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/users/{id}
     */
    public function show(Request $request, int $id): View
    {
        return view('admin.users.show', [
            'user' => UserService::getUserData($id),
        ]);
    }

    /**
     * @param Request $request
     * @param int $id User ID
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/users/{id}/edit
     */
    public function edit(Request $request, int $id): View
    {
        return view('admin.users.edit', [
            'user' => UserService::getUserData($id),
        ]);
    }

    /**
     * @param UserUpdateRequest $request
     * @param int $id User ID
     *
     * @return RedirectResponse
     *
     * @method PUT
     * @endpoint /admin/users/{id}
     */
    public function update(UserUpdateRequest $request, int $id): RedirectResponse
    {
        UserService::updateUser($id, $request->validated());

        return redirect(route('users.show', ['id' => $id]));
    }

    /**
     * @param Request $request
     * @param int $id User ID
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/users/{id}/password
     */
    public function editPassword(Request $request, int $id): View
    {
        return view('admin.users.password', [
            'user' => UserService::getUserData($id),
        ]);
    }

    /**
     * @param UserPasswordUpdateRequest $request
     * @param int $id User ID
     *
     * @return RedirectResponse
     *
     * @method PUT
     * @endpoint /admin/users/{id}/password
     */
    public function updatePassword(UserPasswordUpdateRequest $request, int $id): RedirectResponse
    {
        UserService::updateUserPassword($id, $request->password);

        return redirect(route('users.show', ['id' => $id]));
    }

    /**
     * @param UserDeleteRequest $request
     * @param int $id User ID User ID
     *
     * @return RedirectResponse
     *
     * @method DELETE
     * @endpoint /admin/users/{id}
     */
    public static function delete(UserDeleteRequest $request, int $id): RedirectResponse
    {
        UserService::deleteUser($id);

        return redirect(route('users.index'));
    }
}
