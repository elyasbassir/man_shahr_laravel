<?php

namespace App\helper;

class helper
{
static public function create_hash($text){
    return sha1(md5($text));
}



}
