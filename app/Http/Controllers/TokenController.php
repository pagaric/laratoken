<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function showAll()
    {
        $token = new Token();
        $tokens = $token->getAll();

        return view('token', compact('tokens'));
    }
}
