<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }

    public function hitung(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $operator = $request->input('operator');
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                $hasil = $angka2 != 0 ? $angka1 / $angka2 : 'Tidak dapat dibagi 0';
                break;
            default:
                $hasil = 'Operator tidak valid';
        }

        return view('kalkulator', compact('hasil'));
    }
}
