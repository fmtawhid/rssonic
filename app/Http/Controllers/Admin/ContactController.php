<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        
        return redirect()->route('admin.contact.list')
                         ->with('success', 'Contact deleted successfully!');
    }

    public function destroyMultiple(Request $request)
    {
        Contact::whereIn('id', $request->ids)->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Contacts deleted successfully!'
        ]);
    }
}
