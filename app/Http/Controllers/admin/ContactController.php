<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    protected $contacts;
    public function contactManage()
    {
        $this->contacts = Contact::all();
        return view('admin.contact-manage', ['contacts' => $this->contacts]);
    }
}
