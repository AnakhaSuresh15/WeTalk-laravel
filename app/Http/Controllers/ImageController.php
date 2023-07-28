<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
class ImageController extends Controller
{
    function getContacts(Request $request) {
        $username = $request->route('username');
        $contactsModel = new Contacts();
        $data=$contactsModel->getContacts($username);
        return response()->json($data);
    }
    function setImageId(Request $request) {
        $username = $request->route('username');
        $url = $request->input('url');
        $imageModel = new Image();
        $data=$imageModel->setImageId($username, $url);
    }
}