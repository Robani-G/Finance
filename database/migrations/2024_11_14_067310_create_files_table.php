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
        Schema::create('Requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('Description')->nullable();
            $table->string('file_path')->nullable(); // Add a file_path column to store the uploaded file's path
            $table->string('Status')->nullable();
            $table->foreignUuid('Company_Id')->constrained('companies');
            $table->foreignUuid('Added_By')->constrained('users');
            $table->foreignUuid('Updated_By')->constrained('users');
            $table->foreignUuid('Approved_By')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
