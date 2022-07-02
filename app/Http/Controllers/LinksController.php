<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinkResource;
use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function __invoke(){
        $links = Link::all();
        return LinkResource::collection($links);
    }
}
