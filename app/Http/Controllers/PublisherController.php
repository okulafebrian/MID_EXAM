<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublisherController extends Controller
{
    public function index()
    {
        return view('publishers.index', [
            'publishers' => Publisher::all(),
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('publishers.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
        ]);

        if ($request->has('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('image')->storeAs('public', $proofNameToStore);
        }

        Publisher::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $proofNameToStore
        ]);

        return redirect()->route('publishers.index');
    }
    
    public function show(Publisher $publisher)
    {
        return view('publishers.show', [
            'publisher' => $publisher,
            'categories' => Category::all()
        ]);
    }

    public function edit(Publisher $publisher)
    {
        return view('publishers.edit', [
            'publisher' => $publisher,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Publisher $publisher)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
        ]);

        if ($request->hasFile('image')) {
            if ($publisher->image != NULL)
                Storage::delete('public/' . $publisher->image);
            
            $extension = $request->file('image')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('image')->storeAs('public', $proofNameToStore);
        } else {
            $proofNameToStore = $publisher->image;
        }

        $publisher->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $proofNameToStore
        ]);

        return redirect()->route('publishers.show', $publisher);
    }

    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect()->route('publishers.index');
    }
}
