<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_model;

class UserApi extends Controller
{


    public function listAllUser()
    {
        $users = user_model::all('name','email', 'created_at', 'updated_at');
        return $users;
    }



    public function createUser(Request $request)
    {
        $createUser = user_model::create($request->all());
        return $createUser;  
    }



    public function selectOneUser($id)
    { 
        $listUsersById = user_model::find($id, ['name', 'email', 'created_at', 'updated_at']);       
        if(!is_null($listUsersById)){
            return $listUsersById; 
        }else{
            return "User doesn't exist";
        }       
    }


    public function updateById(Request $request, $id)
    {
        $updateUser = user_model::findOrfail($id);
        if(!is_null($updateUser)){
            $updateUser->update($request->all()); 
        }else{
            return "'User doesn't exist'";
        }                
    }



    public function destroyUser(Request $request, $id)
    {
        $userDestroy = user_model::find($id);
        if(!is_null($userDestroy)){
            $userDestroy->delete(); 
        }else{
            return "User doesn't exist";
        }                
    }
}
