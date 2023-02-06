<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        
        //$role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'write articles']);
        // $role = Role::findById(1);
        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);
        // // $role->revokePermissionTo($permission);
        // $permission->removeRole($role);
        //auth()->user()->givePermissionTo('edit articles');
        //auth()->user()->assignRole('writer');
        return auth()->user()->revokePermissionTo('edit articles');
        return view('home');
    }
}
