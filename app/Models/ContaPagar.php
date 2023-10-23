<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContaPagar extends Model
{
    protected $table = 'contas_pagar';

    protected $fillable = [
        'titulo',
        'descricao',
        'emissao',
        'vencimento',
        'pagamento',
        'valor',
        'excluido'
    ];

    protected $casts = [
        'emissao' => 'date',
        'vencimento' => 'date',
        'pagamento' => 'date',
    ];

    protected $appends = ['valor_formatado'];

    public function getValorFormatadoAttribute()
    {
        return 'R$ ' . number_format($this->attributes['valor'], 2, ',', '.');
    }
}
