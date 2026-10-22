<?php

namespace App\Models;

/** Tag artikel (rilis 54), dibaca dari basis data yang sama dengan CMS. Hanya membaca. */
class Tag extends ReadOnlyModel
{
    protected $table = 'tags';
    public $timestamps = false;
}
