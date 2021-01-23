<?php

namespace App\Http\Controllers\Repo;

use App\Http\Controllers\Controller;
use App\Repository\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use function redirect;

class UserController extends Controller
{
    protected $repo;
    public function __construct(UserInterface $user)
    {
        $this->repo = $user;
    }

    public function index(){
        if(View::exists('user.index')){
            return view('user.index',['users' => $this->repo->getAllUsers()]);
        }
    }

    public function store(Request $request){
        // return $request->all();
        $store =   $this->repo->storeUser($request->all());
        if($store){
            return redirect()->route('user.index')->with('message','Data Inserted!');
        }

    }

    public function view($id){
        if(View::exists('user.edit')){
            return view('user.edit',['user' => $this->repo->viewUserById($id)]);
        }
    }
    public function update($id,Request $request){
        $update = $this->repo->updateUser($id,$request->only(['name','email']));
        if($update){
            return redirect()->route('user.index')->with('message','Data Updated!');
        }
    }
    public function delete($id){
        $this->repo->deleteUser($id);
        return redirect()->route('user.index')->with('message','Data Deleted!');
    }
}
