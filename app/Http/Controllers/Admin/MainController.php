<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        // TODO: add unique to slug fields
        //
        //return 'Admin';

        //dd(Str::slug('привет мир'));    //вбудований примитивний метод перетворення в slug


        //Ручне додавання slug до тегів в базу даних через перезавантаження сторінки domen/admin
        /*$tag = new Tag();
        $tag->title = 'Привет мир';
        $tag->save();*/


        return view('admin.index');
    }
}
