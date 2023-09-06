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
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->decimal('budget', 10, 2)->nullable();
            $table->string('project_manager')->nullable();
            $table->text('team_members')->nullable();
            $table->text('tasks')->nullable();
            $table->text('milestones')->nullable();
            $table->text('documents')->nullable();
            $table->text('dependencies')->nullable();
            $table->string('priority')->nullable();
            $table->string('location')->nullable();
            $table->text('resources')->nullable();
            $table->string('client_contact')->nullable();
            $table->text('notes')->nullable();
            $table->text('tags')->nullable();
            $table->boolean('archived')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
