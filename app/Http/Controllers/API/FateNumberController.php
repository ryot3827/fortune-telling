<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FateNumber;

class FateNumberController extends Controller
{
    public function index() {
        $fateNumbers = FateNumber::all();
        return $fateNumbers;
    }
}
