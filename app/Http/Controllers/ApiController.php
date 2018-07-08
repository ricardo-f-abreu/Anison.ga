<?php

namespace Anison\Http\Controllers;

use Illuminate\Http\Request;
use Anison\Song;

class ApiController extends Controller
{
    public function api($type, $id) {
        return Song::where($type, '=', $id)->get();
    }
}
