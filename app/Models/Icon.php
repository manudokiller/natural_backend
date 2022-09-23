<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Icon extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'description',
    'image_id',
  ];

  /**
   * The products that belong to the Icon
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function products(): BelongsToMany
  {
    return $this->belongsToMany(Product::class);
  }

  /**
   * Get the image that owns the Icon
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function image(): BelongsTo
  {
      return $this->belongsTo(Image::class);
  }
}
