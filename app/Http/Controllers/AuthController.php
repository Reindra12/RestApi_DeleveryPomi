<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
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

           $user  = User::where ('user', $request->user )->first();
           if(!Hash::check($request->password, $user->password, []))
           {
                throw new Exception('Error in Login');
           }
           $tokenResult = $user->createToken('token-auth')->plainTextToken;
           $nama =  $user->nama_driver;
           $id  = $user->id;
           $nik = $user->no_ktp;
           
           $respon      = [
            'status'     => 'success',
            'msg'        => 'Login Successfully',
            'errors'     => null,
            'content'    => [
                'status_code'   => 200,
                'id'            =>$id,
                'access_token'  => $tokenResult,
                'token_type'    => 'Bearer',
                'nama_driver'   => $nama,
                'no_ktp'        => $nik,
               

            ],
           ];
            return response()->json($respon, 200);
        }
    
    }

    public function logout(Request $request){
        $user = auth('sanctum')->user();
        $user->currentAccessToken()->delete();
        $respon      = [
            'status'     => 'success',
            'msg'        => 'Logout Successfully'
           ];
            return response()->json($respon, 200);

    } 
}
