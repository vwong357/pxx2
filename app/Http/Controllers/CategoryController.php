<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class CategoryController extends Controller
{
    public function index(){

        $client = new Client();
        $uri = 'http://www.pornhub.com/webmasters/search?search=bondage&tags[]=sclip&thumbsize=medium';
        $result = $client->request('GET',$uri);
        $body = $result->getBody()->getContents();
        return view('category.index', compact('body'));
    }
}
