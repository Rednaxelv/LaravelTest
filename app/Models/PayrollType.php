<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollType extends Model
{
    use HasFactory;

    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }

}
