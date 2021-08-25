<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ItemType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use DataTables;

class ItemTypeController extends Controller {
	public function index() {
		return view("console.item_types.index",["page_title" => "Jenis Item"]);
	}

	public function get_item_types(Request $request) {
		if ($request->ajax()) {
			$data = ItemType::select(['id','name','created_at','updated_at'])->orderBy('id', 'desc')->get();
			return Datatables::of($data)
			->addIndexColumn()
			->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
			->editColumn('updated_at', function($data) {return date('d-m-Y H:i', strtotime($data->updated_at));})
			->addColumn('action', function($data){
				// return '<a href="'.url('console/item_types/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.item_types.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->name.' ?\')" action="'.route("console.item_types.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
				return '<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mdlEdit" data-id="'.$data->id.'" data-name="'.$data->name.'"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs btnDelete" data-id="'.$data->id.'" title="Hapus"><i class="fa fa-trash"></i></button>';
			})
			->escapeColumns([])
			->make(true);
		}
	}

	public function create() {
		// $provinces = DB::table('provinces')->get();
		// $item_types = DB::table('item_types')->get();
		// return view('console.item_types.create', ['page_title' => 'Tambah Data', 'active_menu' => 'item_types', 'provinces' => $provinces, 'item_types' => $item_types]);
	}

	public function store(Request $request) {
		$arrValidator = [];
		if ($request->has('id')) {
			$item_type = ItemType::findOrFail($request->id);
			$item_type->updated_at = date('Y-m-d H:i:s');
			$arrValidator = ['name' => 'required|unique:item_types,name,'.$request->id];
		} else {
			$item_type = new ItemType;
			$arrValidator = ['name' => 'required|unique:item_types'];
		}

		$validator = Validator::make($request->all(), $arrValidator);

		if ($validator->fails()) {
			return response()->json(["success" => false]);
		}
		
		$item_type->name = ucwords($request->name);
		$item_type->save();
		return response()->json(["success" => true]);
	}

	public function destroy(Request $request) {
		ItemType::findOrFail($request->id)->delete();
	}
}
