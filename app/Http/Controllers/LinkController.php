<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinkResource;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function __invoke(Link $link){
        return new LinkResource($link);
    }
}
