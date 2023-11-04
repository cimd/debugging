<?php

namespace Konnec\Debugging\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;
use Konnec\VueEloquentApi\Traits\EloquentApi;

class Message extends Model
{
    use EloquentApi;
    use MassPrunable;

    protected $table = 'konnec_debugging_messages';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->subHours(24));
    }
}
