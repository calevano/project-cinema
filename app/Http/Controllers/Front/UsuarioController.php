<?php namespace Cinema\Http\Controllers\Front;

use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\User;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
//		$this->middleware('admin', ['only'=>['create','edit']]);
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(2);
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
	public function store(UserCreateRequest $request)
	{
//		User::create([
//			'name' 		=> $request['name'],
//			'email' 	=> $request['email'],
//			'password' 	=> $request['password']
//		]);
		User::create($request->all());
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
	public function update($id, UserUpdateRequest $request)
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
//		User::destroy($id);
		$user = User::find($id);
		$user->delete();
		return redirect()->to('usuario')->with('message', 'Se elimino al usuario');
	}

}
