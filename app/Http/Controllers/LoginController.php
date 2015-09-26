<?php namespace App\Http\Controllers;

class LoginController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
        $data=array();
        $data['title']="Login To Lunchbox";
		return view('authentication.login',$data);
	}

    public function doLogin(){
    	echo "Hii";
    }


}
