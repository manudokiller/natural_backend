<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'url',
  ];

  /**
   * Get all of the icons for the Image
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function icons(): HasMany
  {
    return $this->hasMany(Icon::class);
  }

  /**
   * The products that belong to the Image
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function products(): BelongsToMany
  {
    return $this->belongsToMany(Product::class);
  }
}
