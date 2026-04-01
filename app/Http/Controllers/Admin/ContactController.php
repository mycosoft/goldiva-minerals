<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::when($request->search, fn ($q) => $q->where('name', 'like', "%{$request->search}%"))
            ->when($request->is_read !== null, fn ($q) => $q->where('is_read', $request->is_read))
            ->latest()
            ->paginate(15);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        $contact->update(['is_read' => true]);

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact message deleted successfully.');
    }

    public function markAsRead(Contact $contact)
    {
        $contact->update(['is_read' => true]);

        return redirect()->back();
    }

    public function markAsUnread(Contact $contact)
    {
        $contact->update(['is_read' => false]);

        return redirect()->back();
    }
}
