<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    public  function index()
    {
        return view('contact.index');
    }

    public function store(ContactRequest $request, ContactRepository $contactRepository)
    {
        $contactRepository->store($request->name, $request->email, $request->phone, $request->subject, $request->message);

        flash('Message envoyé avec succès');
        return redirect()->to(url()->previous() . '#contact-form');
    }
}
