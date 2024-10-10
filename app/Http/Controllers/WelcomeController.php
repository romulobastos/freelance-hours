<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // User::query()->create([
        //     'name' => 'Rômulo',
        // ]);
        return view('welcome');
    }
}
