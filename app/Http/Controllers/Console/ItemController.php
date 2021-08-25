<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use DataTables;

class ItemController extends Controller {
    public function index() {
        return view("console.items.index",["page_title" => "Item"]);
    }

    public function get_items(Request $request) {
        if ($request->ajax()) {
            $data = Item::select(['id','name','images','lost_date','created_at'])->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('images', function($data) {return '<a href="'.asset(getItemImage($data->images)).'" target="_blank"><img src="'.asset(getItemImage($data->images)).'" width="80"/></a>';})
            ->editColumn('lost_date', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
            ->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
            // ->editColumn('approved', function($data) {
            //     $checked = $data->approved == 1 ? 'checked' : '';
            //     return '<input type="checkbox" '.$checked.' class="check_approve" data-item_id="'.$data->id.'" />';
            // })
            ->addColumn('action', function($data){
                return '<a href="'.url('console/items/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.items.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->name.' ?\')" action="'.route("console.items.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
            })
            ->escapeColumns([])
            ->make(true);
        }
    }

    public function create() {
        $provinces = DB::table('provinces')->get();
        $locations = DB::table('locations')->get();
        $item_types = DB::table('item_types')->get();
        return view('console.items.create', ['page_title' => 'Tambah Data', 'active_menu' => 'items', 'provinces' => $provinces, 'locations' => $locations, 'item_types' => $item_types]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            // 'model' => 'required',
            // 'tag' => 'required',
            'location_id' => 'required|numeric',
            'specific_location' => 'required',
            'province_id' => 'required|numeric',
            'regency_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'village_id' => 'required|numeric',
            'item_type_id' => 'required|numeric',
            'find_date' => 'required|date',
            'description' => 'required',
            'images' => 'required',
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $saved_images = [];
        $images_number = 1;
        foreach ($request->images as $image) {
            if ($image->isValid()) {
                $imageName = Str::slug($request->name, '-').'-'.time().'-'.$images_number++.'.'.$image->extension();
                $dir = '/images/items/';
                if (!file_exists(public_path($dir))) {
                    mkdir(public_path($dir), 0777, true);
                    chmod(public_path($dir), 0777);
                }
                $image->move(public_path($dir), $imageName);
                $saved_images[] = $dir.$imageName;
            }
        }

        $item = new Item;
        $item->user_id = auth()->guard('admin')->user()->id;
        $item->name = $request->name;
        $item->color = $request->color;
        $item->model = $request->model;
        $item->tag = $request->tag;
        $item->location_id = $request->location_id;
        $item->specific_location = $request->specific_location;
        $item->province_id = $request->province_id;
        $item->regency_id = $request->regency_id;
        $item->district_id = $request->district_id;
        $item->village_id = $request->village_id;
        $item->item_type_id = $request->item_type_id;
        $item->find_date = $request->find_date;
        $item->description = $request->description;
        $item->images = json_encode($saved_images);
        $item->save();

        return redirect('console/items')->with('notification', $this->flash_data('success', 'Berhasil', 'Item Berhasil Ditambahkan'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id) {
        $item = Item::findOrFail($id);
        $provinces = DB::table('provinces')->get();
        $regencies = DB::table('regencies')->where("province_id",$item->province_id)->get();
        $districts = DB::table('districts')->where("regency_id",$item->regency_id)->get();
        $villages = DB::table('villages')->where("district_id",$item->district_id)->get();
        $locations = DB::table('locations')->get();
        $item_types = DB::table('item_types')->get();
        return view('console.items.edit', ['page_title' => 'Edit Data', 'active_menu' => 'items', 'item' => $item, 'provinces' => $provinces, 'regencies' => $regencies, 'districts' => $districts, 'villages' => $villages, 'locations' => $locations, 'item_types' => $item_types]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|unique:items,name,'.$id,
            'color' => 'required',
            'location_id' => 'required|numeric',
            'specific_location' => 'required',
            'province_id' => 'required|numeric',
            'regency_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'village_id' => 'required|numeric',
            'item_type_id' => 'required|numeric',
            'find_date' => 'required|date',
            'description' => 'required',
        ]);

        $item = Item::findOrFail($id);
        if ($request->has('images') && count($request->images) > 0) {
            $saved_images = [];
            $images_number = 1;
            foreach ($request->images as $image) {
                if ($image->isValid()) {
                    $imageName = Str::slug($request->name, '-').'-'.time().'-'.$images_number++.'.'.$image->extension();
                    $dir = '/images/items/';
                    if (!file_exists(public_path($dir))) {
                        mkdir(public_path($dir), 0777, true);
                        chmod(public_path($dir), 0777);
                    }
                    // unlink(public_path($item->image));
                    $image->move(public_path($dir), $imageName);
                    $saved_images[] = $dir.$imageName;
                }
            }

            foreach (json_decode($item->images, true) as $image) {
                unlink(public_path($image));
            }
        }

        $item->user_id = auth()->guard('admin')->user()->id;
        $item->name = $request->name;
        $item->color = $request->color;
        $item->model = $request->model;
        $item->tag = $request->tag;
        $item->location_id = $request->location_id;
        $item->specific_location = $request->specific_location;
        $item->province_id = $request->province_id;
        $item->regency_id = $request->regency_id;
        $item->district_id = $request->district_id;
        $item->village_id = $request->village_id;
        $item->item_type_id = $request->item_type_id;
        $item->find_date = $request->find_date;
        $item->description = $request->description;
        if ($request->has('images') && count($request->images) > 0) {
            $item->images = json_encode($saved_images);
        }
        $item->updated_at = date('Y-m-d H:i:s');
        $item->save();
        return redirect('console/items')->with('notification', $this->flash_data('success', 'Berhasil', 'Item Berhasil Diupdate'));
    }

    public function destroy($id) {
        $item = Item::findOrFail($id);
        // if (pathinfo($item->image, PATHINFO_FILENAME) !== 'sample_item') {
        //     unlink(public_path($item->image));
        // }
        foreach (json_decode($item->images, true) as $img) {
            if (file_exists(public_path($img))) {
                unlink(public_path($img));
            }
        }
        $item->delete();
        return redirect('console/items')->with('notification', $this->flash_data('success', 'Berhasil', 'Item Berhasil Dihapus'));
    }

    public function get_regencies($province_id) {
        $regencies = DB::table('regencies')->select('id','name')->where("province_id", $province_id)->orderBy('name', 'asc')->get();
        $html = '<option value="">- Pilih Kota/Kabupaten -</option>';
        foreach ($regencies as $r) {
            $html .= '<option value="'.$r->id.'">'.$r->name.'</option>';
        }
        die($html);
    }

    public function get_districts($regency_id) {
        $districts = DB::table('districts')->select('id','name')->where("regency_id", $regency_id)->orderBy('name', 'asc')->get();
        $html = '<option value="">- Pilih Kecamatan -</option>';
        foreach ($districts as $d) {
            $html .= '<option value="'.$d->id.'">'.$d->name.'</option>';
        }
        die($html);
    }

    public function get_villages($district_id) {
        $villages = DB::table('villages')->select('id','name')->where("district_id", $district_id)->orderBy('name', 'asc')->get();
        $html = '<option value="">- Pilih Kelurahan -</option>';
        foreach ($villages as $v) {
            $html .= '<option value="'.$v->id.'">'.$v->name.'</option>';
        }
        die($html);
    }
}
