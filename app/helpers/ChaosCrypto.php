<?php

class ChaosCrypto {

    private static function keystream($len, $key) {
        $r = 3.99;
        $x = $key / 100;
        $stream = []; // mengubah nilai chaos menjadi angka byte  0-255

        for ($i = 0; $i < $len; $i++) {
            $x = $r * $x * (1 - $x);  // logistic map
            $stream[] = ((int) round($x * 1000)) % 256;

        }

        return $stream;
    }

    public static function encrypt($data, $key) {
        $data = str_split($data);
        $ks = self::keystream(count($data), $key);

        $out = '';
        foreach ($data as $i => $c) {
            $out .= chr(ord($c) ^ $ks[$i]);// xor dan hasil di base64 encode agar aman di simpan di database
        }
        return base64_encode($out);
    }

    public static function decrypt($data, $key) {
        $data = str_split(base64_decode($data));
        $ks = self::keystream(count($data), $key);

        $out = '';
        foreach ($data as $i => $c) {
            $out .= chr(ord($c) ^ $ks[$i]); // xor dan Menggunakan key yang sama (simetris)
        }
        return $out;
    }
}
