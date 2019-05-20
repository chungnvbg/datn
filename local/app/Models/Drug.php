<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
   protected $table= 'drug';
   protected $primaryKey='drug_id';
   protected $quared=[];
}
