<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FichaTecnica extends Model
{
    use HasFactory;

    protected $fillable =[
        'cedula',
        'nom_propietario',
        'telefono',
        'nom_propiedad',
        'barrio',
        'direccion',
        'valor',
        'administracion',
        'tipo_inmuebles_id',
        'tipo_transaccions_id',
        'alcobas',
        'closet',
        'baño',
        'estrato',
        'area',
        'piso',
        'calentadors_id',
        'vestier',
        'cocina',
        'balcon',
        'sala_comedor',
        'patio',
        'zona_ropa',
        'estudio_estar',
        'red_gas',
        'cuarto_util',
        'ascensor',
        'parqueadero',
        'parqueadero_visitantes',
        'juegos_infantiles',
        'salon_social',
        'propiedad_horizontal',
        'citofono',
        'unidad',
        'tipo_porteria',
        'shut_basura',
        'jacuzzi',
        'gimnasio',
        'turco',
        'biblioteca',
        'circuito_cerrado',



        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tipo_transaccion(): BelongsTo{
        return $this->belongsTo(TipoTransaccion::class, 'tipo_transaccions_id');
    }

    public function tipo_inmueble(): BelongsTo{
        return $this->belongsTo(TipoInmueble::class, 'tipo_inmuebles_id');
    }

    public function calentador(): BelongsTo{
        return $this->belongsTo(Calentador::class, 'calentador_id');
    }

    


}
