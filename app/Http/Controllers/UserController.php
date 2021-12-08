<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function store (Request $request)
    {
        $requestBody = [
            'name' => 'required', 
            'point' => 'nullable|integer',  
        ];

        $request['name'] = '';
        $request['point'] = 'My point';


        $validator = Validator::make($request->all(), $requestBody);

        if ($validator->fails()) {
            print_r($validator->getMessageBag()->toArray());
        }
    }
}
