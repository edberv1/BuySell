<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\User;
use App\Models\Listing;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::where('roles', 'user')->count();
        $admins = User::where('roles', 'admin')->count();
        $contact = Contact::count();
        $contacts = Contact::all();
        $listing = Listing::count();
        $posts = Listing::all();
        $userat = User::all();
        return view('dashboard', compact('userat','users', 'admins', 'listing', 'contact', 'posts', 'contacts'));
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->back()->with('message', 'Listing deleted successfully.');
    }

    public function userDestroy(User $user)
    {
        // Delete the user from the database
        $user->delete();

        // Redirect to the desired page after deletion
        return Redirect::back()->with('message', 'User deleted successfully');
    }

    public function delete($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    // You can add any additional logic or redirection here

    return redirect()->back()->with('success', 'Contact deleted successfully.');
}






}
