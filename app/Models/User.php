<?php
namespace App\Models;
use DB;
class User
{
    function getUser() {
        $data=DB::select("SELECT fname,lname,uname,profilepic from `users`");
        return $data;
    }
    function addUser($data) {
        DB::table('users')->insert($data);
    }
    function getUserValidation($username, $password) {
        $pword=DB::select("SELECT pword1 from `users` WHERE uname='$username'");
        if($pword[0]->pword1 == $password) {
            return true;
        }
        else {
            return false;
        }
    }
}
