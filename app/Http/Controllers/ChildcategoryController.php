<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChildcategoryRequest;
use App\Http\Requests\ChildcategoryUpdateRequest;
use App\Models\Childcategory;
use Illuminate\Support\Str;

class ChildcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategories = Childcategory::orderBy('subcategory_id')->get();
        return view('backend.childcategory.index', compact('childcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.childcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChildcategoryRequest $request)
    {
        Childcategory::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'subcategory_id'=>$request->subcategory_id
        ]);

        return back()->with('message', 'Childcategory created successfully');
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
        $childcategory = Childcategory::find($id);
        return view('backend.childcategory.edit', compact('childcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChildcategoryUpdateRequest $request, $id)
    {
        Childcategory::find($id)->update([
            'name'=>$request->name,
            'subcategory_id'=>$request->subcategory_id
        ]);

        return redirect()->route('childcategory.index')
        ->with('message', 'childcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Childcategory::find($id)->delete();

        return back()->with('message', 'Childcategory deleted successfully');
    }
}
