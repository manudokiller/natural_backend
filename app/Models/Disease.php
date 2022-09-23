<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disease extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'disease_id',
  ];

  /**
   * Get the disease associated with the Disease
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function disease(): HasOne
  {
    return $this->hasOne(Disease::class);
  }

  /**
   * Get all of the mixtures for the Disease
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function mixtures(): HasMany
  {
    return $this->hasMany(Mixture::class);
  }

  /**
   * The products that belong to the Disease
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function products(): BelongsToMany
  {
    return $this->belongsToMany(Product::class);
  }

}
