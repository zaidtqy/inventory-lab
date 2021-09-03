<?php

namespace App\Http\Controllers;

use App\Models\Psilanjut_inventory;
use App\Http\Requests\Psilanjut_inventoryRequest;

use Illuminate\Http\Request;

class Psilanjut_inventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Psilanjut_inventory::all();

        return view('pages.psilanjut_inventories.index')->with([
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
        return view('pages.psilanjut_inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Psilanjut_inventoryRequest $request)
    {
        $data = $request->all();

        Psilanjut_inventory::create($data);
        return redirect()->route('psilanjut_inventories.index');
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
        $item = Psilanjut_inventory::findOrFail($id);

        return view('pages.psilanjut_inventories.edit')->with([
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
    public function update(Psilanjut_inventoryRequest $request, $id)
    {
        $data = $request->all();

        $item = Psilanjut_inventory::findOrFail($id);
        $item->update($data);
        
        return redirect()->route('psilanjut_inventories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Psilanjut_inventory::findOrFail($id);
        $item->delete();

        return redirect()->route('psilanjut_inventories.index');
    }
}
