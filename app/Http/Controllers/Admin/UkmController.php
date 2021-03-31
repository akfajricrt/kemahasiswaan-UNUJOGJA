<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UkmRequest;
use App\Models\Organizations;
use App\Models\Ukms;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Ukms::with(['organization'])->get();
        return view('pages.admin.ukm.index', [
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
        $organizations = Organizations::all();
        return view('pages.admin.ukm.create',[
            'organizations' => $organizations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UkmRequest $request)
    {
        $data = $request->all();

        Ukms::create($data);

        return redirect()->Route('ukm.index');
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
        $item = Ukms::findOrFail($id);
        $organizations = Organizations::all();
        return view('pages.admin.ukm.edit', [
            'item' => $item,
            'organizations' => $organizations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UkmRequest $request, $id)
    {
        $data = $request->all();

        $item = Ukms::findOrFail($id);
        $item->update($data);

        return redirect()->Route('ukm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Ukms::findOrFail($id);
        $item->delete();

        return redirect()->Route('ukm.index');
    }
}
