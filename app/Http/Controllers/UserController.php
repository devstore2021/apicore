<?php

namespace App\Http\Controllers;

 
use App\Models\GlobalVar;
use App\Models\TokensModel;
use App\Models\ManagerToken;
use Illuminate\Http\Request;
use App\Models\GlobalSettings;
use App\Models\User as Usermodel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
 
 

class UserController extends Controller  
{
    private $error_code ;

    private $message_code ;

    public function __construct()
    {
      $this-> error_code  = GlobalVar::error_code() ;
      $this-> message_code =GlobalVar::$message_code ;
    }
  

    public function register(Request $request) {

         $validator  =   Validator::make($request->all(), [
            "name"  =>  "required",
            "email"  =>  "required|email",
            "phone"  =>  "required",
            "password"  =>  "required"
        ]);
       
        if($validator->fails()) {
            return response()->json(["status" => "failed", "Báo lỗi" => $validator->errors()]);
        }

        // Lấy dự liệu và mã hóa mật khầu  .
        $inputs = $request->all();

        $id=$inputs['email'];
        // Kiem tra xem có tồn tai hay chưa  . 
         $post       =   Usermodel::where("email", $id)->first();
         if(!is_null($post)){
            return response()->json(["status" =>$this->error_code['ER002'] , "message" =>$this->message_code['MS002']] );
         
         }
         else{
        
        // Tạo user và trả về user Model cho biết user .

         $inputs["password"] = bcrypt($inputs['password']); // Mã hóa mất khẩu  .
         $chuoimahoa=$inputs['email'].$inputs['password'];
         $tokenuser=ManagerToken::createTokenCustom( $chuoimahoa);
         $inputs["user_token"] =$tokenuser;
         $user   =   Usermodel::create($inputs);

        if(!is_null($user)) {
            return response()->json(["status" => "success", "message" => "Success! registration completed","token"=> $tokenuser ]);
        }
        else {
            return response()->json(["status" => "failed", "message" => "Registration failed!"]);
        }    
        
        }

    }


// User login

public function login(Request $request) {

 $validator = Validator::make($request->all(), [
        "email" =>  "required|email",
        "password" =>  "required",
    ]);
 
    if($validator->fails()) {
        return response()->json(["validation_errors" => $validator->errors()]);
    }
    else{

        $user           =       Usermodel::where("email", $request->email)->first();
        $checkacount=Usermodel::check_acount($user, $request->email, $request->token_name ,$request->password);
  
       if ($checkacount)
        {
            // Revoke all tokens...
            $user->tokens()->delete();            
            $token      =  $user->createToken( $user['email'])->plainTextToken;

            return response()->json(["status" => "success", "login" => true, "token" => $token]);

        }
        else{
            
            return "false" ;
            
        }
       
        
    }
 
}
 
// User Detail
public function showuser() {

    $user       =       Auth::user();
    if(!is_null($user)) { 
        return response()->json(["status" => "success", "data" => $user]);
    }

    else {
        return response()->json(["status" => "failed", "message" => "Whoops! no user found"]);
    }  

}



}
