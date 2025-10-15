<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TesteController extends Controller
{
    public function getTeste() : Response {
        $arr = [
            "usr" => [
                "nome" => "João",
            ]
        ];
        return Inertia::render("teste", $arr);
    }
}
