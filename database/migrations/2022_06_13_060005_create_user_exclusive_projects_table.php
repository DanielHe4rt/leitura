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
     * 'user_id',
    'delivery_at',
    'name',
    'short_description',
    'short_type',
    'description'
     * @return void
     */
    public function up()
    {
        Schema::create('user_exclusive_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('short_description');
            $table->string('short_type');
            $table->text('description')->nullable();
            $table->timestamp('delivery_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_exclusive_projects');
    }
};
