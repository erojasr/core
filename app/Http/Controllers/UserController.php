<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //return User::findOrFail($id);
        return $id;
    }

    public function store(Request $request)
    {
    	$name = $request->input('name');

    	return $name;
    }

}