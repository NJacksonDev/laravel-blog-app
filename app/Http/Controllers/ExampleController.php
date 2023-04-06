<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        // imagine we loaded from the database - we pass the below info to the view
        $ourName = 'Nick';
        $animals = ['Meow', 'Bark', "Purr"];
        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meow']);
    }

    public function aboutPage() {
        return '<h1>About Page!!</h1>';
    }
}
