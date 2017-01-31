<?php

namespace App\Http\Controllers;

/**
* Page Controller Class
*/
class PagesController extends Controller
{
	
	public function getIndex()
	{
		$data['name'] = 'Alex';
		$data['email'] = 'alex@b.c';
		return view('pages.welcome')->withData($data);
	}
	public function getAbout()
	{
		$full = 'Alex Lodu';
		return view('pages.about')->with('fullname', $full);
	}
	public function getContact()
	{
		return view('pages/contact');
	}
	public function getBlog()
	{
		return view('pages/blog');
	}
	public function postContact()
	{
		# code...
	}
}