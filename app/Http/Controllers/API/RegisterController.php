<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\ApiResponseController as ResponseController;
use Illuminate\Http\Request;
use Validator;
use  App\User;

class RegisterController extends ResponseController
{
    public function register(Request $request)
    {

        //validate incoming request

        $rules = [
            'fullname' =>'required|string',
            'email' =>'required|unique:users|max:255',
            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/' // must contain a special character
            ],
            'password_confirmation' => 'required|same:password'];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }


        // validating email account

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        //return successful response
        //$user->createToken('MyApp')->accessToken;
        $success['user'] =  $user;
        return $this->sendResponse($success, 'User register successfully.');

    }
}
