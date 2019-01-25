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

    // TOUT CA FONCTIONNE
	/*request('url')*/
	/*request()->get('url')*/
	/*$url = request('url');*/

	
 
 	//autre methode pour la validation
 	$this->validate($request,['url' => 'required|url']);
 	/*$data  = ['url' => $url];
	$validation = Validator::make($data,['url' => 'required|url'])->validate();*/
	/*
		['required'=>'Ce champ est requis','url' => 'URL invalide'])	
	*/
	/*we can do this in record with this condition
	if ($validation->fails()) {
		dd('Failed');
	}*/
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

	/*a = Url::firstOrCreate*/
	/*difference btwn them is New doesnt save it in data base u need to do this after
	$a->save();*/

	return Url::firstOrCreate(['url' => $url],['shortened'=>Url::get_unique_url_short_url()]);
							 //The first arrow mean
							 //condition if u found
							 //this url return him
							 //if not create him and add the 2nd argument to the table

	/*$record = Url::where('url',$url)->first();

		if ($record) 
		{
		return $record;
		}

	return Url::create([
			'url' 		=> $url,
			'shortened' => Url::get_unique_url_short_url()
		]);*/
	
	}

}
