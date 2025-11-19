<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class BusinessServicesController extends Controller
{
    /**
     * Display the contact form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBusinessLoanService()
    {
        return view('business-loans');
    }

    public function getPersonalLoanService()
    {
        return view('personal-loans');
    }



}
