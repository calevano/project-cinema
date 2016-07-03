<?php namespace Cinema\Http\Controllers\Front;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Entities\User;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::All();
		return view('admin.usuario.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		User::create([
			'name' 		=> $request['name'],
			'email' 	=> $request['email'],
			'password' 	=> $request['password']
		]);
//		'password' 	=> bcrypt($request['password']),
		return redirect()->to('usuario')->with('message', 'Se agrego correctamente al usuario');
//		return redirect('usuario')->with('message', 'store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return view('admin.usuario.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		return redirect()->to('usuario')->with('message', 'Se actualizo correctamente al usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
