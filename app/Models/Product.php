<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name_spanish',
    'name_scientific',
    'name_english',
    'family_scientific',
    'description',
    'enhance',
    'product_type_id',
  ];

  /**
   * The icons that belong to the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function icons(): BelongsToMany
  {
    return $this->belongsToMany(Icon::class);
  }

  /**
   * The images that belong to the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function images(): BelongsToMany
  {
    return $this->belongsToMany(Image::class);
  }

  /**
   * Get the product_type that owns the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function product_type(): BelongsTo
  {
    return $this->belongsTo(ProductType::class);
  }

  /**
   * The mixtures that belong to the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function mixtures(): BelongsToMany
  {
    return $this->belongsToMany(Mixture::class);
  }

  /**
   * Get all of the main_mixtures for the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function main_mixtures(): HasMany
  {
    return $this->hasMany(Mixture::class);
  }

  /**
   * The diseases that belong to the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function diseases(): BelongsToMany
  {
    return $this->belongsToMany(Disease::class);
  }
}
