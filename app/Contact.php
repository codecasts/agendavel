<?php

namespace Agendavel;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['name', 'comments'];

    public function numbers()
    {
        return $this->hasMany(Number::class, 'contact_id');
    }
}
