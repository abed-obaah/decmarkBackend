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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('referrer_id', 36)->nullable()->index();
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->longText('profile_img')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('email', 50)->unique();
            $table->string('tag');
            $table->string('phone', 20)->unique()->nullable();
            $table->string('state', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('address', 100)->nullable();
            $table->point('coordinate')->nullable();
            $table->json('place')->nullable();
            $table->string('home_description', 100)->nullable();
            $table->string('cac', 45)->nullable()->unique();
            $table->string('pin')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('user_suspended')->default(0);
            $table->rememberToken();
            $table->string('fb_id')->unique()->index();
            $table->text('fcm_tokens')->nullable();

            // // For artisan
            // $table->tinyInteger('artisan')->default(0);
            // $table->tinyInteger('artisan_suspended')->default(0);
            // $table->string('artisan_type', 45)->nullable();
            // $table->string('artisan_bio', 45)->nullable();
            // $table->string('artisan_status', 45)->nullable();
            // $table->point('artisan_coordinate')->nullable();
            // $table->json('artisan_place')->nullable();
            // $table->tinyInteger('artisan_verified')->default(0);

            // // For business
            // $table->tinyInteger('business')->default(0);
            // $table->string('business_name', 255)->nullable();
            // $table->string('rep_name', 255)->nullable();
            // $table->string('rep_position', 45)->nullable();

            // // For rider
            // $table->tinyInteger('rider')->default(0);
            // $table->string('rider_bio', 45)->nullable();
            // $table->enum('rider_vehicle', ['car', 'bike', 'tricycle', 'lorry'])->nullable();
            // $table->string('rider_status', 45)->nullable();
            // $table->json('rider_image')->nullable();
            // $table->string('rider_charge_per_km', 45)->nullable();
            // $table->point('rider_coordinate')->nullable();
            // $table->json('rider_place')->nullable();

            // $table->timestamp('email_verified_at')->nullable();
            // $table->timestamp('phone_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
