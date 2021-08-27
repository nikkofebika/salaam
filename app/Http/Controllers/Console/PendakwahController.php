<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Speaker;
use Illuminate\Support\Facades\DB;
use DataTables;

class PendakwahController extends Controller {
	public function index() {
		return view("console.speakers.index", ["page_title" => "Pendakwah"]);
	}

	public function get_pendakwah(Request $request) {
		if ($request->ajax()) {
			$data = Speaker::all();
			return Datatables::of($data)
			->addIndexColumn()
			->editColumn('image', function($data) {return '<a href="'.asset($data->image).'" target="_blank"><img src="'.asset($data->image).'" width="80"/></a>';})
			->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
			->editColumn('updated_at', function($data) {return $data->updated_at != null ? date('d-m-Y H:i', strtotime($data->updated_at)) : "-";})
			->editColumn('approved_by', function($data) {
				$checked = $data->approved_by !== null ? 'checked' : '';
				return '<input type="checkbox" '.$checked.' class="check_approve" data-pendakwah_id="'.$data->id.'" />';
			})
			->addColumn('action', function($data){
				return '<a href="'.url('console/pendakwah/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.pendakwah.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->title.' ?\')" action="'.route("console.pendakwah.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
			})
			->escapeColumns([])
			->make(true);
		}
	}

	public function create() {
		return view('console.speakers.create', ['page_title' => 'Tambah Data', 'active_menu' => 'speakers']);
	}

	public function store(Request $request) {
		$request->validate([
			'name' => 'required|unique:speakers,name',
			'priority' => 'required',
			'is_active' => 'required',
			'description' => 'required',
			'image' => 'required|file|image|max:1024',
		]);

		if ($request->image->isValid()) {
			$imageName = Str::slug($request->name, '-').'-'.time().'.'.$request->image->extension();
			$dir = '/images/pendakwah/';
			if (!file_exists(public_path($dir))) {
				mkdir(public_path($dir), 0777, true);
				chmod(public_path($dir), 0777);
			}
			$request->image->move(public_path($dir), $imageName);
		}

		$pendakwah = new Speaker;
		$pendakwah->name = $request->name;
		$pendakwah->priority = $request->priority;
		$pendakwah->description = $request->description;
		$pendakwah->image = $dir.$imageName;
		$pendakwah->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
		$pendakwah->save();

		return redirect('console/pendakwah')->with('notification', $this->flash_data('success', 'Berhasil', 'Pendakwah Berhasil Ditambahkan'));
	}

	public function show($id)
	{
        //
	}

	public function edit($id) {
		$pendakwah = Speaker::findOrFail($id);
		return view('console.speakers.edit', ['page_title' => 'Edit Data', 'active_menu' => 'speakers', 'pendakwah' => $pendakwah]);
	}

	public function update(Request $request, $id) {
		// dd($request->all());
		$rules = [
			'name' => 'required|unique:speakers,name,'.$id,
			'priority' => 'required',
			'is_active' => 'required',
			'description' => 'required',
		];
		if ($request->has('image') && $request->image != null) {
			$rules['image'] = 'file|image|max:1024';
		}

		$request->validate($rules);

		if ($request->has('image') && $request->image != null) {
			if ($request->image->isValid()) {
				$imageName = Str::slug($request->name, '-').'-'.time().'.'.$request->image->extension();
				$dir = '/images/pendakwah/';
				if (!file_exists(public_path($dir))) {
					mkdir(public_path($dir), 0777, true);
					chmod(public_path($dir), 0777);
				}
				$request->image->move(public_path($dir), $imageName);
			}
		}

		$pendakwah = Speaker::findOrFail($id);
		$pendakwah->name = $request->name;
		$pendakwah->priority = $request->priority;
		$pendakwah->description = $request->description;
		$pendakwah->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
		$pendakwah->updated_at = date('Y-m-d H:i:s');
		if ($request->has('image') && $request->image != null) {
			$pendakwah->image = $dir.$imageName;
		}
		$pendakwah->save();

		return redirect('console/pendakwah')->with('notification', $this->flash_data('success', 'Berhasil', 'Pendakwah Berhasil Diupdate'));
	}

	public function destroy($id) {
		$pendakwah = Speaker::findOrFail($id);
		if (file_exists(public_path($pendakwah->image))) {
			unlink(public_path($pendakwah->image));
		}
		$pendakwah->delete();

		return redirect('console/pendakwah')->with('notification', $this->flash_data('success', 'Berhasil', 'Pendakwah Berhasil Dihapus'));
	}

	public function ajax_approve_pendakwah(Request $request) {
		if ($request->ajax()) {
			$approved_by = $_POST['val'] == 1 ? auth()->user()->id : null;
			if (DB::table('speakers')->where('id', $_POST['pendakwah_id'])->update(["approved_by" => $approved_by])) {
				if ($_POST['val'] == 1) {
					return ['success'=>true, 'message'=> 'Pendakwah Approved'];
				}
				return ['success'=>false, 'message'=> 'Pendakwah Unapproved'];
			}
			return ['success'=>false, 'message'=> 'Pendakwah Unapproved'];
		}
	}
}