<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function store()
    {
        $data = request()->validate($this->rules());
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactFormMail($data));
    }

    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'reason' => 'required',
            'reason' => 'required',
            'message' => 'required',
        ];
    }


}



