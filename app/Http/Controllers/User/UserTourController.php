<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserTourController extends Controller
{
    public function index()
    {
        $tours = Tour::with(['hotel', 'vehicle', 'tourGuide', 'address'])
                ->where('endDay', '>', Carbon::now())
                ->get();
        return view('fe.tours.index', compact('tours'));
    }
    public function show($id)
    {
        $tour = Tour::with('address')->find($id);
        $tours = Tour::with(['hotel', 'vehicle', 'tourGuide', 'address'])
                ->where('endDay', '>', Carbon::now())
                ->get();

        if (!$tour) {
            abort(404);
        }

        return view('fe.tours.show', compact('tour','tours'));
    }

}
