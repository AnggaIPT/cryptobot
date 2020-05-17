<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VigenereChiperController extends Controller
{
    public function index()
    {
        return view('vigenere');
    }

    public function encrypt(Request $request)
    {
        $str = $request->plaintext;
        $keyword = $request->key;

        $key = $this->generateKey($str, $keyword);
        $cipherResult = $this->cipherText($str, $key);

        return response()->json($cipherResult);
    }

   
    private function generateKey($str, $keyword)
    {
        $index = strlen($str);

        for ($i=0; ; $i++) {
            if ($index == $i)
                $i = 0;
            if (strlen($keyword) == strlen($str))
                break;
            $keyword .=($keyword[$i]);
        }
        return $keyword;
    }
    public function Mod($a, $b)
    {
        return ($a % $b + $b) % $b;
    }
    private function cipherText($str, $key)
    {
        $cipherText = "";
        $nonAlphaCharCount = 0;

        for ($i=0; $i < strlen($str); $i++) {
           if (ctype_alnum($str[$i])) {
                //Untuk membandingkan Kapital
                $strIsUpper = ctype_upper($str[$i]);
                $offset = ord($strIsUpper ? 'A' : 'a');
                $keyIndex = ($i - $nonAlphaCharCount) % strlen($key);
                $kI = ord($strIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
                // untukdcrypt
                $kI = -$kI;
                $modResult = chr(($this->Mod(((ord($str[$i]) + $kI) - $offset), 26)) + $offset);
               
                $cipherText.=$modResult;
           } else {
               $cipherText.=$str[$i];
               ++$nonAlphaCharCount;
           }
           
        }

        return $cipherText;
    }

}
