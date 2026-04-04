<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('page_visits', function (Blueprint $table) {
            $table->string('country')->nullable()->after('user_agent');
            $table->string('city')->nullable()->after('country');
            $table->string('device')->nullable()->after('city');
            $table->string('browser')->nullable()->after('device');
            $table->string('os')->nullable()->after('browser');
            $table->string('referer')->nullable()->after('os');
        });
    }

    public function down(): void
    {
        Schema::table('page_visits', function (Blueprint $table) {
            $table->dropColumn(['country', 'city', 'device', 'browser', 'os', 'referer']);
        });
    }
};
