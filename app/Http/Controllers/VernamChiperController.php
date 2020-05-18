<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VernamChiperController extends Controller
{
    public function index()
    {
        return view('vernam');
    }

    public function encrypt(Request $request)
    {
            $dataLen = strlen($request->plaintext);
            $keyLen = strlen($request->key);
            $output = $request->plaintext;

            for ($i = 0; $i < $dataLen; ++$i) {
                $output[$i] = $request->plaintext[$i] ^ $request->key[$i % $keyLen];
            }

            return $output;
    }

    // public function encrypt(Request $request)
    // {

    //     $str = strval($request->plaintext);
    //     $keyword = strval($request->key);
    //     $key = $this->generateKey($str, $keyword);
    //     $result = $this->tes($str,$key);
    //     return $result;
    // }

    // private function generateKey($str, $keyword)
    // {
    //     $index = strlen($str);

    //     for ($i=0; ; $i++) {
    //         if ($index == $i)
    //             $i = 0;
    //         if (strlen($keyword) == strlen($str))
    //             break;
    //         $keyword .=($keyword[$i]);
    //     }
    //     return $keyword;
    // }

    // public function _xor($text,$key){

    //     for($i=0; $i<strlen($text); $i++){
    //         $text[$i] = intval($text[$i])^intval($key[$i]);
    //     }
    //     return $text;
    // }

    // public function tes($str, $key)
    // {
    //     $len = strlen($str);
    //     $key = strval($key);
    //     $res = "";
    //     for ($i=0; $i < $len; $i++) {
    //         $xor = $this->_xor($this->strigToBinary($str[$i]),$this->strigToBinary($key[$i]));
    //         $tostring = $this->binaryToString($xor);
    //         $res.=$tostring;
    //     }

    //     return $res;
    // }

    // public function strigToBinary($string)
    // {
    //     $data = unpack('H*', $string);
    //     $binary = base_convert($data[1], 16, 2);

    //     return $binary;
    // }

    // public function binaryToString($binary)
    // {
    //     $binaries = explode(' ', $binary);

    //     $string = null;
    //     foreach ($binaries as $binary) {
    //         $string .= pack('H*', dechex(bindec($binary)));
    //     }

    //     return $string;
    // }


}
