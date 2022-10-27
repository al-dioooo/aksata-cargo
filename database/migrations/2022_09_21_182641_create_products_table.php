<?php

use App\Models\Category;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Foreigns
            $table->foreignIdFor(User::class, 'created_by');
            $table->foreignIdFor(Category::class, 'category_id');

            // Contents
            $table->string('name', 50);
            $table->string('description')->nullable();

            $table->text('photo_path')->nullable();

            $table->string('status', 10)->default('draft');

            // Search Engine Optimization
            $table->string('slug', 50)->unique();

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
        Schema::dropIfExists('products');
    }
};
