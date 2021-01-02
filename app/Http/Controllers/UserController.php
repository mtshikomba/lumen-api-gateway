<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->validReponse(User::all());
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function show($user)
    {
        return $this->validReponse(User::findOrFail($user));
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:8|confirmed',
        ];

        $this->validate($request, $rules);

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        $new_user = User::create($data);

        return $this->validReponse($new_user, Response::HTTP_CREATED);
    }
    /**
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $rules = [
            'name' => 'max:255',
            'email' => 'email|unique:user,email,'. $user,
            'password' => 'min:8|confirmed',
        ];

        $this->validate($request, $rules);

        $updated_user = User::findOrFail($user);

        $updated_user->fill($request->all());

        if ($updated_user->isClean()) {
            return $this->errorResponse('One value should change atleast', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if ($request->has('password')) {
            $updated_user->password = Hash::make($request->password);
        }

        $updated_user->save();

        return $this->validReponse($updated_user);
    }

    public function destroy($user)
    {
        $user = User::findOrFail($user);

        $user->delete();

        return $this->validReponse($user);
    }
}
