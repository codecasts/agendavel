<?php

namespace Agendavel;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table = 'numbers';

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
