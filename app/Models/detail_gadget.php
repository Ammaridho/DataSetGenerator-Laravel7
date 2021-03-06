<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_gadget extends Model
{
    protected $table = 'detail_gadget';

    public $timestamps = false;

    protected $fillable = ['id','data_penghuni_id','namaGadget','range'];    

    public function data_penghuni()
    {
        return $this->belongsTo(data_penghuni::class);
    }
}
