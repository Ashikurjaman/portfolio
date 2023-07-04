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
        Schema::create('_seoproperites', function (Blueprint $table) {
            $table->id();
            $table->enum('pageName', ['_home','_resume','_projects','_contact']);
            $table->string('title',100);
            $table->string('keyword',100);
            $table->string('description',500);
            $table->string('ogSiteName',100);
            $table->string('ogUrl',500);
            $table->string('ogTitle',500);
            $table->string('ogDescription',500);
            $table->string('ogImage',500);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_seoproperites');
    }
};
