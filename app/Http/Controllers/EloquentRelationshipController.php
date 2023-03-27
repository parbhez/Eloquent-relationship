<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use App\Models\User;

class EloquentRelationshipController extends Controller
{
    /**
     * Display a card.
     */

    public function index()
    {
        return view('home');
    }

    /**
     * Display a listing of the resource.
     */
    public function OneToOnehasOne()
    {
        // $user = User::find(1); // get user data
        // $phone = User::find(1)->phone; //get user wise phone data
        // return $phone;
        $users = User::with($this->eagerLoad())->get();
        return view('oneToone.OneToOnehasOne', compact('users'));
    }


    /**
     * Display a listing of the resource.
     */
    public function OneToOnebelongsTo()
    {
        // $phone = Phone::find(1); // get user data
        //$user = Phone::find(1)->user; //get user wise phone data
        //return $user;

        $phones = Phone::with('user')->get();
        return view('oneToone.OneToOnebelongsTo', compact('phones'));
    }

    /**
     * load relationship
     */
    public function eagerLoad()
    {
        return [
            'phone',
        ];
    }
}
