<?php
/**
 * Created by PhpStorm.
 * User: eduardo.rojas
 * Date: 2017-08-08
 * Time: 1:53 PM
 */

namespace App\Http\Controllers;

use App\Meetups;
use Illuminate\http\Request;

class MeetupsController extends Controller
{
    public function index()
    {
        $meetups = Meetups::all();
        return response()->json($meetups, 200);

    }

    public function createNewMeetup(Request $request)
    {
        $meetup = Meetups::create($request->all());
        return response()->json($meetup, 201);
    }

}