<?php

namespace App\Http\Controllers;

use App\Models\Psimenengah_inventory;
use App\Http\Requests\Psimenengah_inventoryRequest;

use Illuminate\Http\Request;

class Psimenengah_inventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Psimenengah_inventory::all();

        return view('pages.psimenengah_inventories.index')->with([
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
        return view('pages.psimenengah_inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Psimenengah_inventoryRequest $request)
    {
        $data = $request->all();

        Psimenengah_inventory::create($data);
        return redirect()->route('psimenengah_inventories.index');
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
        $item = Psimenengah_inventory::findOrFail($id);

        return view('pages.psimenengah_inventories.edit')->with([
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
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Psimenengah_inventory::findOrFail($id);
        $item->update($data);
        
        return redirect()->route('psimenengah_inventories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Psimenengah_inventory::findOrFail($id);
        $item->delete();

        return redirect()->route('psimenengah_inventories.index');
    }
}
