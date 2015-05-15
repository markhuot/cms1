<?php namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.settings.region.index')
			->with('regions', Region::all())
		;
	}

	/**
	 * Show the form to create a new region.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return view('admin.settings.region.getCreate');
	}

	/**
	 * Creates the region, stores it in the database, and returns you to
	 * the list of regions.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$region = new Region;
		$region->name = $request->input('region.name');
		$region->slug = str_slug($request->input('region.name'));
		$region->save();
		return redirect()->route('region_index');
	}

}
