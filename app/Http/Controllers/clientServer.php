<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class clientServer extends Controller
{
    public function listData() {
        $listAll=Http::get("https://jsonplaceholder.typicode.com/posts");
        return $listAll->json();
    }
    public function getIdItems($id) {
        $getIdItems=Http::get("https://jsonplaceholder.typicode.com/posts/".$id);
        return $getIdItems->json();
    }
    public function makeIdItems() {
        $getIdItems=Http::post("https://jsonplaceholder.typicode.com/posts",[
            "title"=>"hungdomanh",
            "body"=>"this is body"
        ]);
        return $getIdItems->json();
    }
    public function editIdItems($id) {
        $getIdItems=Http::put("https://jsonplaceholder.typicode.com/posts/".$id,[
            "title"=>"hungdomanh edit",
            "body"=>"this is body edit",
        ]);
        return $getIdItems->json();
    }
    public function deleteIdItems($id) {
        $getIdItems=Http::delete("https://jsonplaceholder.typicode.com/posts/".$id);
        return $getIdItems->json();
    }
}
