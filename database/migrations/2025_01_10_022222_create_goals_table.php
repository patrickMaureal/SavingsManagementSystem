<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('goals', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
			$table->string('name');
			$table->decimal('target_amount', 10, 2);
			$table->decimal('current_amount', 10, 2);
			$table->date('start_date');
			$table->date('end_date');
			$table->enum('status', [ 'active', 'completed', 'archived'])->default('active');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('goals');
	}
};
