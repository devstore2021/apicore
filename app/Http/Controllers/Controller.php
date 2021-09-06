<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function error_code( )
    {
       /*   $error_code         =       array(
            "ER001"         =>     "true",
            "ER002"   =>      "false" 
        );
        */

        return  "error_code";
    }

    public function message_code( )
    {
         /* $message_code        =       array(
            "MS001"         =>     "Thành công",
            "MS002"   =>      "Giá trị đã tồn tại" 
        );
     */

        return  "message_code ";
    }

   
}
