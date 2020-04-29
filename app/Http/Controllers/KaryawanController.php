<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KaryawanController extends Controller
{
    public function create(Request $request) {
        $Karyawan = Karyawan::create(array_merge($request->all(),['_id'=>Str::random(20)]));
        $res['status'] = 201;
        $res['message'] = 'Created';
        $res['result'] = $Karyawan;
        return response($res);
    }

    public function showOne($id) {
        $Karyawan = Karyawan::findOrFail($id);
        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['result'] = $Karyawan;
        return response($res);
    }

    public function showAll() {
        $Karyawan = Karyawan::all();
        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['results'] = $Karyawan;
        return response($res);
    }

    public function update(Request $request, $id) {
        $Karyawan = Karyawan::findOrFail($id);
        $Karyawan->update($request->all());
        $res['status'] = 200;
        $res['message'] = 'Updated';
        $res['result'] = $Karyawan;
        return response($res);
    }

    public function delete($id) {
        $Karyawan = Karyawan::findOrFail($id);
        $Karyawan->delete();
        $res['status'] = 200;
        $res['message'] = 'Deleted';
        return response($res);
    }
}
