<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mixture extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'procedures',
    'disease_id',
    'product_id',
    'mixture_type_id',
  ];

  /**
   * The products that belong to the Mixture
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function products(): BelongsToMany
  {
    return $this->belongsToMany(Product::class);
  }

  /**
   * Get the product that owns the Mixture
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function product(): BelongsTo
  {
    return $this->belongsTo(Product::class);
  }

  /**
   * Get the disease that owns the Mixture
   *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function disease(): BelongsTo
  {
    return $this->belongsTo(Disease::class);
  }

  /**
   * Get the mixture_type that owns the Mixture
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function mixture_type(): BelongsTo
  {
    return $this->belongsTo(MixtureType::class);
  }
}
