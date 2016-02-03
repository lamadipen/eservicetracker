<?php namespace App\Http\Controllers;


use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller {

    function __construct()
    {
        //$this->middleware('auth');
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::all()->toArray();
		return view('user/userindex')->with('users',$users);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
	public function create()
	{
		return view('user/usercreate');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
	public function store(Request $request)
	{
        try{
            $this->validate($request, User::$storeRules);

            $user = new User;
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->password = Input::get('password');
            $user->save();

            return Redirect::to('user');
        }
        catch(Exception $e) {
            return redirect('user/create')->withInput($request->except('password'))->with('message','New user could not be created.');
        }

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
        $user = User::find($id);
        return view('user/usershow')->with('user',$user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
        $user = User::find($id);
        return view('user/useredit')->with('user',$user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
     * @param  Request $request
	 * @return Response
	 */
	public function update($id, Request $request)
	{

        try{
            $this->validate($request, User::$updateRules);

            $user = User::find($id);
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');

            $user->save();

            return Redirect::to('user');
        }
        catch(Exception $e) {
            return redirect()->back();
        }

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
        $user = User::findOrFail($id);

        $user->delete();

        return Redirect::to('user');
        //return redirect()->route('user');
	}

}
