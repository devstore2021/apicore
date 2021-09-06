<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
 
 
 
use App\Models\Api\DanhmucMaster;
use App\Http\Controllers\Controller;
use App\Models\FuncList\TaokhoaFunc;

class DanhmucController extends Controller
{
     
    public function index()
    {

       $maxid = DanhmucMaster::max('id_code')+1;
      
       return $maxid;
    }

    
    public function store(Request $request)
    {
        $input=$request->all();
        $input['id_code']=TaokhoaFunc::taokhoa_danhmuc_master();
        $danhmuc = DanhmucMaster::create($input);
       // $maxid = DanhmucMaster::max('id_code')

        return  $input;
    }

   
    public function show($id)
    {
        return $id;
    }

    
    public function update(Request $request, $id)
    {

        return $id ;
    }

    
    public function destroy($id)
    {
        return "asasasasasa1111" ;
    }
}
