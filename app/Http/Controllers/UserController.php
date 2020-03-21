<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(Request $request) {
        $user = User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'name' => $request['name'],
            'profile_picture' => 'https://ui-avatars.com/api/?name=' . $request['name'],
            'password' => HASH('SHA256', $request['password']),
        ]);

        $res['status'] = 201;
        $res['message'] = 'Created';
        $res['result'] = $user;
        return response($res);
    }

    public function signin(Request $request) {
        $user = DB::table('users')
                            ->select('username', 'password')
                            ->where([
                                ['username', '=', $request['username']],
                                ['password', '=', HASH('SHA256', $request['password'])],
                            ])->exists();

        if ($user == true) {
            $res['status'] = 200;
            $res['message'] = 'Signed In';
            return response($res);
        } else {
            $res['status'] = 403;
            $res['message'] = 'Wrong Username or Password';
            return response($res);
        }
    }

    public function show($id) {
        $user = User::findOrFail($id);

        $total_reviews = Review::where('users_id', $id)->count();

        // $total_reviews = DB::table('reviews')
        //                          ->where('users_id', '=', $id)
        //                          ->count();

        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['total_reviews'] = $total_reviews;
        $res['result'] = $user;
        return response($res);
    }

    public function update($id, Request $request) {
        $user = User::findOrFail($id);

        $user->update($request->all());

        $res['status'] = 200;
        $res['message'] = 'Updated';
        $res['result'] = $user;
        return response($res);
    }

    public function delete($id) {
        $user = User::findOrFail($id);

        $user->delete();

        $res['status'] = 200;
        $res['message'] = 'Deleted';
        return response($res);
    }
}
