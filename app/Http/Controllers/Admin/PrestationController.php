<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PrestationRequest;
use App\Models\Prestations;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Prestations::all();


        return view('pages.admin.prestation.index', [
            'items' => $items
        ]);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.prestation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrestationRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_lengkap);



        $data['sertifikat']= $request->file('sertifikat')->store(
            'assets/pdf','public'
        );
        $data['dokumentasi_acara']= $request->file('dokumentasi_acara')->store(
            'assets/img','public'
        );



       
        Prestations::create($data);

        return redirect()->Route('prestation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Prestations::findOrFail($id);

        return view('pages.admin.prestation.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrestationRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_lengkap);

        $data['sertifikat']= $request->file('sertifikat')->store(
            'assets/pdf','public'
        );

        $data['dokumentasi_acara']= $request->file('dokumentasi_acara')->store(
            'assets/img','public'
        );


        $item = Prestations::findOrFail($id);
        
        $item->update($data);

        return redirect()->Route('prestation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Prestations::findOrFail($id);
        $item->delete();

        return redirect()->Route('prestation.index');
    }
}
