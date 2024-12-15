<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;

class UserAccountController extends Controller
{

    protected $user;

    public function __construct(){

        $this->user = new UserAccount();
        
    }


    public function index()
    {
        $response['UserAccount'] = $this->user->all();
        return view('pages.index')->with($response);
    }


    
    public function store(Request $request)
    {
      

        $this->user->create($request->all());
        return redirect()->back();

    }

  
    public function edit(string $id)
    {
        $response['UserAccount'] = $this->user->find($id);
        return view('pages.edit')->with($response);
    }


    public function update(Request $request, string $id)
    {
        $useraccount = $this->user->find($id);

        $useraccount->update(array_merge($useraccount->toArray(), $request->toArray()));
        return redirect('UserAccount');
    }

    public function destroy(string $id)
{
    $useraccount = $this->user->find($id);  // Corrected: use $this->user
    $useraccount->delete();
    return redirect('UserAccount');  // Redirect to the correct route
}

}