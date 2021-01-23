<?php

namespace App\Repository\User;

use App\Models\User;

class UserRepository implements UserInterface {
    public function getAllUsers(){
        return User::latest()->get();
    }
    public function storeUser($data = []){
        return  User::create($data);
    }
    public function viewUserById($id){
        return User::find($id);
    }
    public function updateUser($id,$data = []){
        return User::find($id)->update($data);
    }
    public function deleteUser($id){
        return User::find($id)->delete();
    }
}