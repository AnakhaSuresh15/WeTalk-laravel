<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    function getUser() {
        $userModel = new User();
        $data=$userModel->getUser();
        return response()->json($data);
    }
    function addUser(Request $request) {
        $userModel = new User();
        $data=$userModel->addUser($request->all());
    }
    function getUserValidation(Request $request) {
        $username = $request->query('username');
        $password = $request->query('password');
        $userModel = new User();
        $data=$userModel->getUserValidation($username, $password);
        return response()->json($data);
    }
}
