<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmation;
use App\Models\Comment;

class ConfirmationController extends Controller
{
    public function changeStatus(Request $request)
{
    // dd($request->all());

    $confirmation = Comment::find($request->id);

    $data = new Confirmation();

    $data->comment_id = $request->id;

    $data->confirmed = true;

    $data->save();

    return redirect()->back()->with('success', 'Confirmation updated successfully');
}
}
