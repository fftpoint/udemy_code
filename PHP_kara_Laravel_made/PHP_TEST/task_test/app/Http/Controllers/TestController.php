<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestController extends Controller
{
    //
    public function index() {
        $values = Test::all();
        $user = DB::table('tests')
        ->select('id')
        ->get();

        dd($user);

        $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        $chunks = $collection->chunk(4);

        $chunks->toArray();

        // dd($values);

        return view('tests.test', compact('values'));
    }
}
