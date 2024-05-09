<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MigrationController extends Controller
{
    public function update(Request $request)
    {
        // sometimes you just want to reset the database
        if ($request->has('refresh')) {
            Artisan::call('migrate:refresh');

            // if that's the case, install users
            Artisan::call('db:seed --class=UserSeeder');
            // Artisan::call('db:seed --class=LibraryBooksSeeder');
        }

        // or just update the existing database
        if (!$request->has('refresh')) {
            Artisan::call('migrate');
        }

        return response('It is done!');
    }
}
