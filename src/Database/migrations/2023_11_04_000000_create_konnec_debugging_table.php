<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('konnec_debugging_messages', function (Blueprint $table) {
            $table->id();

            $table->string('type', 20)->index();
            $table->unsignedMediumInteger('level')->index();
            $table->string('level_name', 10);

            $table->string('message', 200);
            $table->text('context')->nullable();
            $table->text('context')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konnec_debugging_messages');
    }
};
