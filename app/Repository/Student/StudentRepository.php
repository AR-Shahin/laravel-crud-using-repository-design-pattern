<?php

namespace App\Repository\Student;
use App\Models\Student;
use function is;
use function is_null;

class StudentRepository implements StudentInterface{
    public function getAllData(){
        return Student::latest()->get();
    }

    public function storeOrUpdate($id = null,$data){
        if(is_null($id)){
            $student = new Student();
            $student->name = $data['name'];
            $student->roll = $data['roll'];
            return $student->save();
        }else{
            $student = Student::find($id);
            $student->name = $data['name'];
            $student->roll = $data['roll'];
            return $student->save();
        }
    }

    public function view($id){
        return Student::find($id);
    }
    public function delete($id){
        return Student::find($id)->delete();
    }
    public function getAllTrashedData()
    {
        return Student::onlyTrashed()->latest()->get();
    }
    public function restoreData($id){
        return Student::withTrashed()->find($id)->restore();
    }
    public function permanentDelete($id)
    {
        return Student::withTrashed()->find($id)->forceDelete();
    }
}