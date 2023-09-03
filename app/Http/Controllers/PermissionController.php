<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index($id) {
        $user = User::find($id);
        $userPermissions = $user->permissions;
        
        $permissions = Permission::all();

        return view('permissions', ['permissions' => $permissions, 'userPermissions' => $userPermissions]);
    }
}
