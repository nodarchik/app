<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show listings
    public function listings(){
        return view('listings',[
           'listings'=>Listing::all()
        ]);
    }
    // Show Create Form
    public function create() {
        return view('create');
    }
    // Store and Validate Form Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>'required|min:5',
            'country'=>'required|in:georgia,usa,uk,germany,italy',
            'date'=>'required|date|date_format:Y-m-d|after:start_at|before:-18 years'
        ]);
        Listing::create($formFields);
        return redirect('/listings');
    }
}
