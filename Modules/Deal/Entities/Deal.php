<?php

namespace Modules\Deal\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Brand\Entities\Brand;
use Modules\Product\Entities\Product;

class Deal extends Model
{
    protected $fillable = ['brand_id', 'package_id', 'user_id', 'deal_type_id', 'name'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dealType(): BelongsTo
    {
        return $this->belongsTo(DealType::class);
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(DealAttribute::class);
    }
}
