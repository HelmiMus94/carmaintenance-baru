<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('summons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->date('summon_date');
            $table->string('location');
            $table->decimal('amount', 10, 2);
            $table->string('offence_type');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->string('paid_by')->nullable();
            $table->date('paid_date')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summons');
    }
};
