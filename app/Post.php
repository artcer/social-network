<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Post
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 *
 * @property BelongsTo $user
 *
 * @package App
 */
class Post extends Model
{
    /**
     * Sets post relationship with user
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
