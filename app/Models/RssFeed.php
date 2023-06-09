<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RssFeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'rsslink',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rss_feeds';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
