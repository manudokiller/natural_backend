<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MixtureType extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
  ];

  /**
   * Get all of the mixtures for the MixtureType
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function mixtures(): HasMany
  {
    return $this->hasMany(Mixture::class);
  }
}
