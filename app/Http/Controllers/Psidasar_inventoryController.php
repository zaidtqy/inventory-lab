<?php

namespace App\Http\Controllers;

use App\Models\Psidasar_inventory;
use App\Http\Requests\Psidasar_inventoryRequest;

use Illuminate\Http\Request;

class Psidasar_inventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Psidasar_inventory::all();

        return view('pages.psidasar_inventories.index')->with([
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
        return view('pages.psidasar_inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Psidasar_inventoryRequest $request)
    {
        $data = $request->all();

        Psidasar_inventory::create($data);
        return redirect()->route('psidasar_inventories.index');
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
        $item = Psidasar_inventory::findOrFail($id);

        return view('pages.psidasar_inventories.edit')->with([
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
    public function update(Psidasar_inventoryRequest $request, $id)
    {
        $data = $request->all();

        $item = Psidasar_inventory::findOrFail($id);
        $item->update($data);
        
        return redirect()->route('psidasar_inventories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Psidasar_inventory::findOrFail($id);
        $item->delete();

        return redirect()->route('psidasar_inventories.index');
    }
}
