<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entities\ProductEntity
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $cost
 * @property int $weight
 * @property int $width
 * @property int $depth
 * @property int $height
 * @property int $count
 * @property string $color
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductEntity whereWidth($value)
 * @mixin \Eloquent
 */
class ProductEntity extends Model
{
    use HasFactory;

    protected $table = 'product_entities';
}
