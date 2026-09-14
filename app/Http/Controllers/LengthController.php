<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LengthController extends Controller
{
    protected $rates = [
        'meters' => 1,
        'kilometers' => 1000,
        'decimeters' => 0.1,
        'centimeters' => 0.01,
        'millimeters' => 0.001,
        'micrometers' => 0.000001,
        'nanometers' => 0.000000001,
        'miles' => 1609.344,
        'yards' => 0.9144,
        'feet' => 0.3048,
        'inches' => 0.0254,
        'light-years' => 9.46073e15,
        'astronomical-unit' => 149597870700,
    ];

    public function index()
    {
        return view('index'); 
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'number' => 'required|numeric',
            'from' => 'required|string',
            'to' => 'required|string',
        ]);

        
        return redirect()->route('length.show', [
            'from' => $request->from,
            'to' => $request->to,
            'amount' => $request->number
        ]);
    }

    public function show($from, $to, $amount = 1)
    {
        if (!array_key_exists($from, $this->rates) || !array_key_exists($to, $this->rates)) {
            abort(404);
        }

        if (!is_numeric($amount)) {
            abort(404); 
        }

        $amount = (float) $amount;

        $inMeters = $amount * $this->rates[$from];
        $result = $inMeters / $this->rates[$to];
        $conversionFactor = $this->rates[$from] / $this->rates[$to];
        $reverseFactor = $this->rates[$to] / $this->rates[$from];

        $canonicalUrl = "https://length.toolnized.com/{$from}/{$to}/{$amount}/";

        return view('length', compact(
            'from', 
            'to', 
            'amount', 
            'result', 
            'conversionFactor', 
            'reverseFactor',
            'canonicalUrl'
        ));
    }

    // NEW DYNAMIC GUIDE METHOD
    public function guide($from, $to)
    {
        if (!array_key_exists($from, $this->rates) || !array_key_exists($to, $this->rates)) {
            abort(404);
        }

        $conversionFactor = $this->rates[$from] / $this->rates[$to];

        return view('how-to-convert', compact('from', 'to', 'conversionFactor'));
    }
}