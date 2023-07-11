<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmation;

class ConfirmationController extends Controller
{
    public function confirm(Request $request, Confirmation $confirmation)
    {
        $confirmation->update(['confirmed' => true]);
        return response()->json(['succes' => true]);
    }
}
