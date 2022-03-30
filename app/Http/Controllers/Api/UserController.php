<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|exists:users,email',
            'password' => 'required',
            'phone' => 'required|numeric',
            'image' => 'required'
        ]);

        $createUser = new User();

        $createUser->name = $request->name;
        $createUser->email = $request->email;
        $createUser->password = Hash::make($request->password);
        $createUser->phone = $request->phone;
        $createUser->image_url = $request->file('image')->store('user_avatars');

        $createUser->save();

        var_dump($request->all());
        return response()->json(['message' => 'wait'], 404);
    }

    public function showUsers(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }

    public function showUser(Request $request, int $id): JsonResponse
    {
        $request->merge(['id' => $id]);

        $this->validate($request, [
            'id' => 'required|exists:users,id'
        ]);

        $user = User::find($request->id);

        return response()->json($user);
    }

    public function editUser(Request $request, int $id): JsonResponse
    {
        $request->merge(['id' => $id]);

        $this->validate($request, [
            'id' => 'required|exists:users,id'
        ]);

        $updateUser = User::find($request->id);
        $updateUser->name = $request->name;
        $updateUser->email = $request->email;
        $updateUser->password = Hash::make($request->password);
        $updateUser->phone = $request->phone;
        $updateUser->image_url = $request->file('image')->store('user_avatars');

        $updateUser->save();

        return response()->json($updateUser);
    }

    public function removeUser(Request $request, int $id): JsonResponse
    {
        $request->merge(['id' => $id]);

        $this->validate($request, [
            'id' => 'required|exists:users,id'
        ]);

        User::destroy($request->id);

        return response()->json(['message' => 'user deleted']);
    }
}
