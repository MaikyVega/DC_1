<?php

namespace App\Http\Controllers;

use App\Daycare;

class DaycareController extends Controller
{
    
    public function create()
    {
    	return view('daycare.create');
    }

    public function store()
    {
    	
    	// Validation of daycare data
    	$this->validate(request(), [

    		'name' => 'required',

    		'address1' => 'required',

    		'city' => 'required',

			'state' => 'required',

			'zipcode' => 'required|digits:5',

			'phone1' => 'required',

    		'email' => 'required|email',

    		'admin_firstname' => 'required',

			'admin_lastname' => 'required',

			'admin_email' => 'required',

			'admin_phone' => 'required',

    	]);


    	// Create and submit daycare to database
    	$daycare = Daycare::create(request(['name', 'address1', 'address2', 'city', 'state', 'zipcode', 'phone1', 'phone2', 'email', 'admin_firstname', 'admin_lastname', 'admin_email', 'admin_phone']));


    	// Redirect to home page
    	return redirect()->home();
    }
}
