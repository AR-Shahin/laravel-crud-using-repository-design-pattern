<?php

namespace App\Repository\Student;

use App\Models\Student;

interface StudentInterface{
    public function getAllData();
    public function storeOrUpdate($id = null,$data);
    public function view($id);
    public function delete($id);
    public function getAllTrashedData();
    public function permanentDelete($id);
    public function restoreData($id);
}
