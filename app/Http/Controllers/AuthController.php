<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Driver;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class AuthController extends Controller
{
   public function login(Request $request){
       $validate = Validator::make($request->all(), [
           'user' => 'required',
           'password' => 'required',

       ]);

       if($validate->fails()){
           $respon = [
               'status'     => 'error',
               'msg'        => 'Validator error',
               'errors'     => $validate->errors(),
               'content'    => null,

           ];
           return response()->json($respon, 200);
       }else{
           $credentials     = request(['user','password']);
           $credentials     = Arr::add($credentials,'status','aktif');
           if(!Auth::attempt($credentials)){
               $respon   = [
                'status'     => 'error',
                'msg'        => 'Unathorized',
                'errors'     => null,
                'content'    => null,
               ];
           return response()->json($respon, 401);

           }

           $Driver  = Driver::where ('user', $request->user )->first();
           if(!Hash::check($request->password, $Driver->password, []))
           {
                throw new Exception('Error in Login');
           }
           $tokenResult = $Driver->createToken('token-auth')->plainTextToken;
           
           $respon      = [
            'status'     => 'success',
            'msg'        => 'Login Successfully',
            'errors'     => null,
            'content'    => [
                'status_code'   => 200,
                'access_token'  => $tokenResult,
                'token_type'    => 'Bearer',
            ],
           ];
            return response()->json($respon, 200);
        }
    
    }

    public function logout(Request $request){
        $Driver = auth('sanctum')->Driver();
        $Driver->currentAccessToken()->delete();
        $respon      = [
            'status'     => 'success',
            'msg'        => 'Logout Successfully'
           ];
            return response()->json($respon, 200);

    } 
}
