<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // Foreign
            $table->foreignIdFor(User::class, 'author_id');

            // Contents
            $table->string('title', 50);
            $table->string('subtitle', 100)->nullable();
            $table->longText('content')->nullable();

            $table->text('cover')->nullable();

            $table->string('status', 10)->default('draft');

            // Search Engine Optimization
            $table->string('slug', 50)->unique();
            $table->string('focus_keyword')->nullable();
            $table->string('meta_description')->nullable()->comment('Recommended description between 155-160 characters.');

            // Timestamps
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
