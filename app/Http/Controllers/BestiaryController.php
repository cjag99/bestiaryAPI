<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bestiary;

class BestiaryController extends Controller
{
    public function index(Request $request)
    {
        $query = Bestiary::query();
        $allowedFilters = [
            'name',
            'species',
            'danger_level',
            'habitat',
            'is_hostile',
        ];

        foreach ($request->query() as $key => $value) {
            if (in_array($key, $allowedFilters)) {
                $query->where($key, $value);
            }
        }

        return $query->get();
    }

    public function show($id)
    {
        $creature = Bestiary::findOrFail($id);
        return response()->json($creature);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'species' => 'required|string',
            'danger_level' => 'required|integer|min:1|max:10',
            'habitat' => 'required|string',
            'traits' => 'required|array',
            'is_hostile' => 'required|boolean',
        ]);

        $creature = Bestiary::create($data);
        return response()->json($creature, 201);
    }

    public function update(Request $request, $id)
    {
        $creature = Bestiary::findOrFail($id);

        $data = $request->validate([
            'name' => 'sometimes|required|string',
            'species' => 'sometimes|required|string',
            'danger_level' => 'sometimes|required|integer|min:1|max:10',
            'habitat' => 'sometimes|required|string',
            'traits' => 'sometimes|required|array',
            'is_hostile' => 'sometimes|required|boolean',
        ]);

        $creature->update($data);
        return response()->json($creature);
    }

    public function destroy($id)
    {
        $creature = Bestiary::findOrFail($id);
        $creature->delete();
        return response()->json(null, 204);
    }
}
