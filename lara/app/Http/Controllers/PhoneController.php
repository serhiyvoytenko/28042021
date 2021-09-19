<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function addPhone(Request $request)
    {
        $phone = new Phone();
        $phone->model = 'test model';
        $phone->number = '234234234';
        $phone->users_id = 5;
        $phone->save();
        $user = $phone->users()->getResults();
        var_dump('hi', $user);
    }
}
