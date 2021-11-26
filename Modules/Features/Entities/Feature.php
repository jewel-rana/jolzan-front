<?php

namespace Modules\Features\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Media\Entities\Media;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'title', 'description', 'external_link'];

    public function medias(): BelongsToMany
    {
        return $this->belongsToMany(Media::class)->latest();
    }
}
