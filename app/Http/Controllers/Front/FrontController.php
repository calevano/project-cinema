<?php namespace Cinema\Http\Controllers\Front;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	public function __construct()
	{
//		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("front.index");
	}

	public function contacto()
	{
		return view("front.contacto.contacto");
	}

	public function reviews()
	{
		return view("front.reviews.reviews");
	}

}
