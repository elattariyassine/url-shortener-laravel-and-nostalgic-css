<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use Illuminate\Support\Facades\Validator;

class Urlscontroller extends Controller
{
    public function create()
    {
    	return view('welcome');
    }
    
    public function store(Request $request)
    {
	$this->validate($request,['url' => 'required|url']);
	$validation = Validator::make($data,['url' => 'required|url'])->validate();*/
	$record = $this->getRecordForUrl($request->url);
        if (!$record) {
            return view('result')->with('shortened',$record->shortened);
        }
        else
        {
            return view('error');
        }
	}


	public function show($shortened)
    {
        $url = Url::where('shortened',$shortened)->firstOrFail();

    	return redirect($url->url);
	}

	private function getRecordForUrl($url)
	{
        return Url::firstOrCreate(['url' => $url],['shortened'=>Url::get_unique_url_short_url()]);
	}

}
