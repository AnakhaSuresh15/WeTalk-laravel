<?php
namespace App\Models;
use DB;
class Contacts
{
    function getContacts($username) {
        $data=DB::select("SELECT contact from `contacts` WHERE username='$username'");
        return $data;
    }
    function addContacts($data) {
        DB::table('contacts')->insert($data);
    }
}