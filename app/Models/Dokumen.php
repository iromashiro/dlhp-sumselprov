<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SelfReferenceTrait;

class Dokumen extends Model
{
    use HasFactory;
    use SelfReferenceTrait;
}
