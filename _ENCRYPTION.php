<?php
class ENCREYPTION{

        /**
     * Encode - Encrypt string
     * 
     * @param string $data - String to encode
     * @param string $key - Secret Hex_key(optional)
     * @param string $enc_method - 16 length encryption method algoridom(optional)
     * 
     * @return string Encrypted string
     */
    static function ENCODE(string $data, string $key = '7365637265745f6b6579', string $enc_method = 'AES-256-ctr'){
        
        $md5_key=md5($key,true);
        return base64_encode(openssl_encrypt($data, $enc_method, $key, 0, $md5_key));
    }



        /**
     * Decode - Decrypt encrypted string
     * 
     * @param string $data - String to encode
     * @param string $key - Secret Hex_key(optional)
     * @param string $enc_method - 16 length encryption method algoridom(optional)
     * 
     * @return string Decoded string
     */
    static function DECODE(string $data, string $key = '7365637265745f6b6579', string $enc_method = 'AES-256-ctr'){
        
        $md5_key=md5($key,true);
        return openssl_decrypt(base64_decode($data), $enc_method, $key, 0, $md5_key);
    }
}
?>