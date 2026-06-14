<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // classe para definir relacionamentos

class Trip extends Model
{
    protected $fillable = [ // quais campos podem ser preenchidos ao criar uma nova viagem
        'origin',
        'destination',
        'departure_time',
        'arrival_time',
        'driver_id',   // id do motorista vinculado
        'vehicle_id'   // id do veículo vinculado
    ];

    public function driver(): BelongsTo // pertence a...
    {
        return $this->belongsTo(Driver::class);
    }
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}