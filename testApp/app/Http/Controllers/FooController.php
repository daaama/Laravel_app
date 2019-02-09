<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    public function foo1()
    {
        return 'Foo1!!';
    }

    public function foo2()
    {
        return view('foo.foo2', [
            'title' => 'Foo2',
            'body' => 'My first Laravel.'
        ]);
    }
}
