<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use DataTables;

class UserController extends Controller {
	public function index() {
		return view("console.users.index", ["page_title" => "Admin"]);
	}

	public function get_users(Request $request) {
		if ($request->ajax()) {
			$data = User::all();
			return Datatables::of($data)
			->addIndexColumn()
			->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
			->editColumn('updated_at', function($data) {return $data->updated_at != null ? date('d-m-Y H:i', strtotime($data->updated_at)) : "-";})
			->editColumn('approved_by', function($data) {
				if ($data->id !== auth()->user()->id) {
					$checked = $data->approved_by !== null ? 'checked' : '';
					return '<input type="checkbox" '.$checked.' class="check_approve" data-user_id="'.$data->id.'" />';
				}
			})
			->addColumn('action', function($data){
				if ($data->id !== auth()->user()->id) {
					return '<a href="'.url('console/users/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.users.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->name.' ?\')" action="'.route("console.users.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
				}
			})
			->escapeColumns([])
			->make(true);
		}
	}

	public function create() {
		return view('console.users.create', ['page_title' => 'Tambah Data', 'active_menu' => 'users']);
	}

	public function store(Request $request) {
		$request->validate([
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required',
			'phone' => 'required',
			'is_active' => 'required',
		]);

		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->phone = $request->phone;
		$user->is_admin = 1;
		$user->password = Hash::make($request->password);
		$user->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
		$user->save();

		return redirect('console/users')->with('notification', $this->flash_data('success', 'Berhasil', 'Admin Berhasil Ditambahkan'));
	}

	public function show($id)
	{
        //
	}

	public function edit($id) {
		$user = User::findOrFail($id);
		return view('console.users.edit', ['page_title' => 'Edit Data', 'active_menu' => 'users', 'user' => $user]);
	}

	public function update(Request $request, $id) {
		$request->validate([
			'name' => 'required',
			'email' => 'required|unique:users,email,'.$id,
			'phone' => 'required',
			'is_active' => 'required',
		]);

		$user = User::findOrFail($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->phone = $request->phone;
		if ($request->has('password') && $request->password != "") {
			$user->password = Hash::make($request->password);
		}
		$user->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
		$user->updated_at = date('Y-m-d H:i:s');
		$user->save();

		return redirect('console/users')->with('notification', $this->flash_data('success', 'Berhasil', 'Admin Berhasil Diupdate'));
	}

	public function destroy($id) {
		User::findOrFail($id)->delete();
		return redirect('console/users')->with('notification', $this->flash_data('success', 'Berhasil', 'Admin Berhasil Dihapus'));
	}

	public function ajax_approve_user(Request $request) {
		if ($request->ajax()) {
			$approved_by = $_POST['val'] == 1 ? auth()->user()->id : null;
			if (DB::table('users')->where('id', $_POST['user_id'])->update(["approved_by" => $approved_by])) {
				if ($_POST['val'] == 1) {
					return ['success'=>true, 'message'=> 'Admin Approved'];
				}
				return ['success'=>false, 'message'=> 'Admin Unapproved'];
			}
			return ['success'=>false, 'message'=> 'Admin Unapproved'];
		}
	}
}