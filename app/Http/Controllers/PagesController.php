<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $lessons = ['My first leson', 'My second leson', 'My third leson'];

        $name = 'CowboyBebop';

        return view('pages.home');
    }

}
