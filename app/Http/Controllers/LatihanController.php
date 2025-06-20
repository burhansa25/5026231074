<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatihanController extends Controller
{
    //
    public function indexPage()
    {
        $pageCounters = DB::table('pagecounter')->get();
        // Increment the page view count for each page
        return view('pagecounter/index', ['pageCounters' => $pageCounters]);
    }

    public function show(Request $request, $id)
    {
        DB::table('pagecounter')->where('ID',$request->id)->update([
            'Jumlah' => DB::raw('Jumlah + 1'),
        ]);

        $page = DB::table('pagecounter')->where('ID', $id)->first();
        return view('pagecounter/page'.$id, ['page' => $page]);
    }
}
