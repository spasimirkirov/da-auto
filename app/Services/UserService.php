<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public static function getUserQuery()
    {
        return User::select('id', 'name', 'email', 'created_at');
    }

    public static function getUserPagination()
    {
        return self::getUserQuery()->paginate(25);
    }

    public static function getUserEditData(int $id)
    {
        return self::getUserQuery()
            ->where('id', '=', $id);
    }

    public static function storeUser(array $input)
    {
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();
    }
}
