<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\AddNewComment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;

use App\Http\Requests\Comment\CreateRequest;


class CommentController extends Controller
{
    public function store (CreateRequest $request) {




        $request['user_id'] = 123;
if($request['subject'] != null || $request['user_id'] != null) {
    $request['user_id'] = 123;
    AddNewComment::dispatch($request['subject'], $request['body'], $request['status'], $request['film_id'], $request['user_id']);
    $request['subject'] = null;
    $request['user_id'] = 123;

} else {
    $request['user_id'] = 123;
    AddNewComment::dispatch($request['subject'], $request['body'], $request['status'], $request['film_id'], $request['user_id']);
    $request['user_id'] = 123;
}










        return response()->json([
            'status' => 'success',
        ], 201);




    }
}
