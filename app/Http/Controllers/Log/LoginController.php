<?php namespace Cinema\Http\Controllers\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cinema\Http\Requests;
use Cinema\Http\Requests\Log\LoginRequest;
use Cinema\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function store(LoginRequest $request)
    {
//        return $request['email'];
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']]))
        {
            return redirect()->intended('admin');
//            return "pasaste";
        }
//        return "nopaso";
        return redirect()->back()->with('message', 'Datos ingresados incorrectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
