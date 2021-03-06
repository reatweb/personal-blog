<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayar;

class AyarController extends Controller
{

    public function index()
    {
        $data['ayar']   = Ayar::where('id', 1)->first();
        return view('panel.ayar', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_adi'          => 'required',
            'site_aciklama'     => 'required',
            'ozel_soz'          => 'required',
            'mail'              => 'required|email'
        ]);
        Ayar::where('id', 1)->update($request->except(['_method', '_token']));
        return redirect('admin/')->withBasarili('Site bilgileri başarılı bir şekilde güncellendi!');
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
