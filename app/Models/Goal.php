<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goal extends Model
{
  use HasUuids, SoftDeletes, HasFactory;

	protected $fillable = ['name', 'user_id', 'target_amount', 'start_date', 'end_date'];	

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
