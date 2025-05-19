<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function alchemist1()
    {
        return view('pertama');
    }

    public function alchemist2()
    {
        return view('bootstrap1');
    }

    public function alchemist3()
    {
        return view('bootstrap2');
    }

    public function alchemist4()
    {
        return view('pertemuan4layouting');
    }

    public function alchemist5()
    {
        return view('js1');
    }

    public function alchemist6()
    {
        return view('js2');
    }

    public function alchemist7()
    {
        return view('linktree');
    }

    public function alchemist8()
    {
        return view('index');
    }
}
