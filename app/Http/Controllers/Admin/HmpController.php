<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HmpRequest;
use App\Models\Organizations;
use App\Models\Hmps;
use Illuminate\Http\Request;

class HmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Hmps::with(['forHmp'])->get();
        return view('pages.admin.hmp.index', [
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
        return view('pages.admin.hmp.create',[
            'organizations' => $organizations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HmpRequest $request)
    {
        $data = $request->all();

        Hmps::create($data);

        return redirect()->Route('hmp.index');
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
        $item = Hmps::findOrFail($id);
        $organizations = Organizations::all();
        return view('pages.admin.hmp.edit', [
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
    public function update(HmpRequest $request, $id)
    {
        $data = $request->all();

        $item = Hmps::findOrFail($id);
        $item->update($data);

        return redirect()->Route('hmp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hmps::findOrFail($id);
        $item->delete();

        return redirect()->Route('hmp.index');
    }
}
