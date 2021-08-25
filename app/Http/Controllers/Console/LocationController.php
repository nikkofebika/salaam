<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use DataTables;

class LocationController extends Controller {
	public function index() {
		return view("console.locations.index",["page_title" => "Location"]);
	}

	public function get_locations(Request $request) {
		if ($request->ajax()) {
			$data = Location::select(['id','name','created_at','updated_at'])->orderBy('id', 'desc')->get();
			return Datatables::of($data)
			->addIndexColumn()
			->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
			->editColumn('updated_at', function($data) {return date('d-m-Y H:i', strtotime($data->updated_at));})
			->addColumn('action', function($data){
				// return '<a href="'.url('console/locations/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.locations.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->name.' ?\')" action="'.route("console.locations.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
				return '<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mdlEdit" data-id="'.$data->id.'" data-name="'.$data->name.'"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs btnDelete" data-id="'.$data->id.'" title="Hapus"><i class="fa fa-trash"></i></button>';
			})
			->escapeColumns([])
			->make(true);
		}
	}

	public function create() {
		$provinces = DB::table('provinces')->get();
		$locations = DB::table('locations')->get();
		$location_types = DB::table('location_types')->get();
		return view('console.locations.create', ['page_title' => 'Tambah Data', 'active_menu' => 'locations', 'provinces' => $provinces, 'locations' => $locations, 'location_types' => $location_types]);
	}

	public function store(Request $request) {
		$arrValidator = [];
		if ($request->has('id')) {
			$location = Location::findOrFail($request->id);
			$location->updated_at = date('Y-m-d H:i:s');
			$arrValidator = ['name' => 'required|unique:locations,name,'.$request->id];
		} else {
			$location = new location;
			$arrValidator = ['name' => 'required|unique:locations'];
		}

		$validator = Validator::make($request->all(), $arrValidator);

		if ($validator->fails()) {
			return response()->json(["success" => false]);
		}
		
		$location->name = ucwords($request->name);
		$location->save();
		return response()->json(["success" => true]);
	}

	public function destroy(Request $request) {
		Location::findOrFail($request->id)->delete();
	}
}
