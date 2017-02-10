<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Route;
use App\Post;
use Session;
use Mail;

/**
* Page Controller Class
*/
class PagesController extends Controller
{
	
	public function getIndex()
	{
		$posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
		return view('pages.welcome')->withPosts($posts);
	}
	public function getAbout()
	{
		$full = 'Alex Lodu';
		return view('pages.about')->with('fullname', $full);
	}
	public function getBlog()
	{
		return view('pages/blog');
	}
	public function getContact()
	{
		return view('pages/contact');
	}
	public function postContact(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'required|min:3',
			'message' => 'min:10']);
		$data =array(
				'email' => $request->email,
				'subject' => $request->subject,
				'bodyMessage' => $request->message,
			);
		Mail::send('emails.contact', $data, function($message) use ($data){
			$message -> from($data['email']);
			$message -> to('er.mayankrajput95@gmail.com');
			$message -> subject($data['subject']);
		});
		Session::flash('success', 'The Email Was Successfully Sent!..');
		return view('pages/contact');
	}
}