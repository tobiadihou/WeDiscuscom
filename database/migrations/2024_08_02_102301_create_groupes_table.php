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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("description");
            $table->foreignId("owner_id")->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('groupe_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('groupe_id')->constrained('groupes')->onDelete("cascade");
            $table->foreignId('user_id')->constrained('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_user');
        Schema::dropIfExists('groupes');
    }
};
