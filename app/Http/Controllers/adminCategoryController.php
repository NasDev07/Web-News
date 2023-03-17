<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;

class adminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $menuGori = 'active';
        return view('dashboard.categories.index', compact('menuGori', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuGori = 'active';
        return view('dashboard.categories.form_add', compact('menuGori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);

            // insert data
            Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);

            return redirect()->route('category.index')->with(['success' => 'berhasil diupdate']);
        } catch (Exception $e) {
            return redirect()->route('category.index')->with(['failed' => 'Ada kesalahan system']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menuGori = 'active';
        $edit = Category::findOrFail($id);
        return view('dashboard.categories.form_edit', compact('edit', 'menuGori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);
            $categories = Category::findOrFail($id);

            $categories->name = $request->name;
            $categories->slug = $request->slug;

            $categories->update();

            return redirect()->route('category.index')->with(['success' => 'berhasil diupdate']);
        } catch (Exception $e) {
            return redirect()->route('category.index')->with(['failed' => 'gagal diupdate. error: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::findOrFail($id);
        if ($categories) {
            $categories->delete();
            return redirect()->back()->with(['success' => ' berhasil dihapus']);
        } else {
            return redirect()->back()->with(['failed' => 'User not found']);
        }
    }
}
