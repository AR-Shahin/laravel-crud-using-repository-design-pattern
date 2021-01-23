<?php

namespace App\Repository\User;

interface UserInterface {

    public function getAllUsers();
    public function storeUser($data = []);
    public function viewUserById($id);
    public function updateUser($id,$data = []);
    public function deleteUser($id);


}

?>