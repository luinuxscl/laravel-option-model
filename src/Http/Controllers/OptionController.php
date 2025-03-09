<?php

namespace Luinuxscl\OptionPackage\Http\Controllers;

use Illuminate\Http\Request;
use Luinuxscl\OptionPackage\Models\Option;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function index()
    {
        return response()->json(Option::all());
    }

    public function store(Request $request)
    {
        $option = Option::create($request->validate([
            'key' => 'required|string',
            'value' => 'nullable|string',
            'optionable_id' => 'required|integer',
            'optionable_type' => 'required|string',
        ]));

        return response()->json($option, 201);
    }

    public function destroy(Option $option)
    {
        $option->delete();
        return response()->json(null, 204);
    }
}
