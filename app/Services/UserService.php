<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * @return Builder
     */
    public static function getUserQuery(): Builder
    {
        return User::select('id', 'name', 'email', 'created_at')
            ->orderBy('id', 'desc');
    }

    /**
     * @return LengthAwarePaginator
     */
    public static function getUserPagination(): LengthAwarePaginator
    {
        return self::getUserQuery()->paginate(25);
    }

    /**
     * @param int $id
     *
     * @return User
     */
    public static function getUserData(int $id): User
    {
        return self::getUserQuery()
            ->where('id', '=', $id)
            ->first();
    }

    /**
     * @param array $input
     */
    public static function storeUser(array $input)
    {
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->created_by = Auth::id();
        $user->save();
    }

    /**
     * @param int $id
     * @param array $input
     */
    public static function updateUser(int $id, array $input)
    {
        $user = User::findOrFail($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->updated_by = Auth::id();
        $user->save();
    }

    /**
     * @param int $id
     * @param string $password
     */
    public static function updateUserPassword(int $id, string $password)
    {
        $user =  User::findOrFail($id);
        $user->password = Hash::make($password);
        $user->updated_by = Auth::id();
        $user->save();
    }

    /**
     * @param int $id
     */
    public static function deleteUser(int $id)
    {
        $user = User::findOrFail($id);
        $user->updated_by = Auth::id();
        $user->save();
        $user->delete();
    }
}
