<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        "account_id",
        "follow_id"
    ]

    /**
     * Get the account that owns the Follow
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    /**
     * Get the follow that owns the Follow
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function follow(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'follow_id', 'id');
    }
}
