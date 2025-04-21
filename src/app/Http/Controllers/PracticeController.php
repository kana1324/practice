<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'password',]);
        return view('confirm', compact('content'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        Practice::create($contact);
        return view('login');

    }
}
