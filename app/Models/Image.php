<?php
namespace App\Models;
use DB;
class Image
{
    function getContacts($username) {
        $data=DB::select("SELECT contact from `contacts` WHERE username='$username'");
        return $data;
    }
    function setImageId($username, $url) {
        DB::table('users')->where('uname', $username)->update(['profilepic' => $url]);
        //DB::update("UPDATE `users` SET profilepic='$url' WHERE uname='$username'");
    }
}

