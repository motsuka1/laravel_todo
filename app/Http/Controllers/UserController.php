<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {   
        // CRUD with SQL query

        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Taro', 'taro@example.com', 'password']);
        // DB::update('update users set name = ? where id = 1', ['Taro Yamada']);
        // DB::delete('delete from users where id = 1');
        // $users = DB::select('select * from users');
        // return $users;


        // CRUD with ORM

        // $user = new User;
        // $user->name = 'Hanako Yamada';
        // $user->email = 'hanako@example.com';
        // $user->password = 'password';
        // $user->save();

        // User::create([
        //     'name' => 'Hanako Yamada',
        //     'email' => 'hanako@example.com',
        //     'password' => 'password',
        // ]);

        $data = [
            'name' => 'hanako yamada',
            'email' => 'hanako@example.com',
            'password' => 'password',
        ];

        User::create($data);

        $user = User::all();
        return $user;

        // User::where('name', 'Hanako Yamada')->update(['name' => 'Hanako Sato']);

        // User::where('name', 'Hanako Sato')->delete();

        return view('home');
    }
}
