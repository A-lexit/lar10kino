<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\AddNewComment;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Validator;

use App\Http\Requests\Comment\CreateRequest;


class CommentController extends Controller
{

    public function store (CreateRequest $request) {

        /*$data = $request->all();

        $data['user_id'] = $comment->film_id;*/
        /*$request['user_id'] = user()->id;*/


        if($request['subject'] != null) {

            AddNewComment::dispatch($request['subject'], $request['body'], $request['status'], $request['film_id'], $request['user_id']);

        } else {

            $request['subject'] = Auth::user()->name;
            AddNewComment::dispatch($request['subject'], $request['body'], $request['status'], $request['film_id'], $request['user_id']);

        }

        /*AddNewComment::dispatch($request['subject'], $request['body'], $request['status'], $request['film_id'], $request['user_id']);

        $request['subject'] = 55;*/

        return response()->json([
            'status' => 'success',
        ], 201);

    }
}
