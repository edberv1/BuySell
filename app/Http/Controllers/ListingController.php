<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;



class ListingController extends Controller
{
    //Show All Listings
    public function index()
    {
        $listing = Listing::count();
        return view('listings.index', compact('listing'), [

            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(8)

        ]);
    }

    public function home()
    {
    $listings = Listing::latest()->filter(request(['tag', 'search']))->paginate(4); // retrieve the latest listings from the database

    return view('home', compact('listings'));
    }


    //Show Single Listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    //Store Form
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'logo.*' => 'image', // Allow multiple image uploads
        ]);

        $formFields['user_id'] = auth()->id();

        if ($request->hasFile('logo')) {
            $images = [];
            foreach ($request->file('logo') as $file) {
                $path = $file->store('logos', 'public');
                $images[] = $path;
            }
            $formFields['logo'] = implode('|', $images);
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Post Created Successfully!');
    }



    public function storing(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'logo.*' => 'image', // Allow multiple image uploads
        ]);

        $formFields['user_id'] = auth()->id();

        if ($request->hasFile('logo')) {
            $images = [];
            foreach ($request->file('logo') as $file) {
                $path = $file->store('logos', 'public');
                $images[] = $path;
            }
            $formFields['logo'] = implode('|', $images);
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Post Created Successfully!');
    }


    //Show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }
    //Update Listing Data
    public function update(Request $request, Listing $listing)
    {

        //Make sure logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Post Updated Succsessfully!');
    }





    public function edition(Listing $listing)
    {
        return view('listings.edition', compact('listings'));
    }

    public function updation(Request $request, Listing $listing)
{
    $data = $request->except(['_token', '_method']);
    $listing->update($data);

    return redirect()->back()->with('success', 'Listing updated successfully.');
}




    //Delete Listing

    public function destroy(Listing $listing){
         //Make sure logged in user is owner
         if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        $listing->delete();
        return redirect('/')->with('message', 'Post Deleted Successfully');
    }

    //Manage Listing
    public function manage(){
        return view('listings.manage', ['listings' => request()->user()->listings()->get()]);
    }


}
