<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AudioTrackResource;
use App\Models\AudioTrack;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AudioTrackController extends Controller
{
    public function index(): JsonResponse
    {
        $data = AudioTrackResource::collection(AudioTrack::all());

        return response()->json($data);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'artist' => 'string|required|min:3|max:255',
            'title' => 'string|required|min:3|max:255',
            'release_year' => 'integer|required|min:1900|max:' . date('Y'),
        ]);

        $track = AudioTrack::create($request->input());

        return response()->json(new AudioTrackResource($track));
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $track = AudioTrack::findOrFail($id);

        $track->update($request->input());

        return response()->json(new AudioTrackResource($track));
    }

    public function destroy(string $id): JsonResponse
    {
        AudioTrack::where('id', $id)->delete();

        return response()->json([]);
    }
}
