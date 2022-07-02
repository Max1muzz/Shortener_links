<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateController extends Controller
{
    public function create(LinkRequest $request){
        //data generation
        $data = [
            'link' => strip_tags($request->validated()['link']),
            'short' => $this->createCode()
        ];
        $url = substr(url()->current(), 0, -3);
        //check if there is such a link in the database, return it
        $link_db = Link::where('link', $data['link'])->first();
        if ($link_db){
            $short_link = $url . $link_db->short;
        //if not, create a new one
        }else{
            Link::create($data);
            $short_link = $url . $data['short'];
        }
        return $short_link;
    }

    public function createCode() {
        //creating a random code for a link and checking for uniqueness in the database
        $existence = true;
        while ($existence):
            $short = Str::random(8);
            if (Link::find($short) === null) {
                $existence = false;
            }
        endwhile;
        return $short;
    }
}
