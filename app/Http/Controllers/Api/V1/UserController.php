<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){


        return new UserResource($request->user());
    }


}
