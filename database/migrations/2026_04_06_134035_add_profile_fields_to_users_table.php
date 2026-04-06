<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->date('date_of_birth')->nullable()->after('phone');
            $table->string('nationality')->nullable()->after('date_of_birth');
            $table->string('current_location')->nullable()->after('nationality');
            $table->string('city')->nullable()->after('current_location');
            $table->string('country')->nullable()->after('city');
            $table->string('postal_code')->nullable()->after('country');
            $table->string('visa_status')->nullable()->after('postal_code');
            $table->string('work_authorization')->nullable()->after('visa_status');
            $table->date('available_from')->nullable()->after('work_authorization');
            $table->string('headline')->nullable()->after('available_from');
            $table->text('bio')->nullable()->after('headline');
            $table->string('german_level')->nullable()->after('bio');
            $table->json('preferred_sectors')->nullable()->after('german_level');
            $table->json('preferred_cities')->nullable()->after('preferred_sectors');
            $table->json('skills')->nullable()->after('preferred_cities');
            $table->string('profile_photo')->nullable()->after('skills');
            $table->string('cv_path')->nullable()->after('profile_photo');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone', 'date_of_birth', 'nationality', 'current_location',
                'city', 'country', 'postal_code', 'visa_status', 'work_authorization',
                'available_from', 'headline', 'bio', 'german_level',
                'preferred_sectors', 'preferred_cities', 'skills',
                'profile_photo', 'cv_path',
            ]);
        });
    }
};
