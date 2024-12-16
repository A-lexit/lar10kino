<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    public function toggle($id)
    {
        $comment = Comment::find($id);
        $comment->toggleStatus();

        return redirect()->back();
    }



    public function destroy($id)
    {
        //6 урок // dd(__METHOD__);  //виведем назву методу, щоб пересвідчитися, що ми потрапляємо сюди при видаленні категорії
        //Category::destroy(id);               //7//Видалення категорії однією строчкою коду замість $category = Category::find($id); та $category->delete();
        $comment = Comment::find($id);         //7//Знаходимо категорію
        //dd(($category->posts->count()));                                                                  //16     перевірка на к-сть постів в категорії (при намаганні видалити категорію)

        /*if ($comment->films->count()) {                                                                             //16//Якщо категорія має хоча б один пост
            return redirect()->route('admin.comments.index')->with('error', 'Ошибка! У категории есть записи');
        }*/
        $comment->delete();                     //7//Видаляємо категорію
        return redirect()->route('admin.comments.index')->with('success', 'Категория удалена');        //7//Робимо редірект на головну категорій
    }
}
