<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaesarChiperController extends Controller
{


    public function index()
    {
        return view('caesar');
    }

    public function encrypt(Request $request)
    {
        $result = "";
        $plaintext = $request->plaintext;
        $key = $request->key;

        $key = $key % 26;

        if ($key < 0) {
            $key += 26;
        }

        $index = 0;

        while($index < strlen($plaintext)) {
            $confert = strtoupper($plaintext{$index});

            if (($confert>= "A") && ($confert <= "Z")) {
                if ((ord($confert) + $key) > ord("Z")) {
                    $result .= chr(ord($confert) + $key - 26);
                } else {
                    $result  .= chr(ord($confert) + $key);
                }
            } else {
                $result .= " ";
            }
            $index++;
        }
        return response()->json($result);
    }




}
