<?php

use App\Models\Employee;
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
        Schema::create('visa_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('visa_number');
            // $table->integer('user_id');
            // $table->foreign('user_id')->references('users')->uniqid();
            $table->foreignId('employee_id')->constrained()->uniqid(); //employees  col id
            // $table->foreignId('user_id')->constrained('admin','a_id');
            // $table->foreignIdFor(Employee::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_cards');
    }
};
