<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_visits', function (Blueprint $table) {
            $table->id();
            $table->string('path', 500);                  // /blog/mon-article
            $table->string('referrer_url', 1000)->nullable();
            $table->string('referrer_domain', 255)->nullable(); // google.com
            $table->string('source_type', 50)->default('direct'); // organic, social, referral, direct, paid
            $table->string('utm_source', 100)->nullable();
            $table->string('utm_medium', 100)->nullable();
            $table->string('utm_campaign', 150)->nullable();
            $table->string('utm_content', 150)->nullable();
            $table->string('utm_term', 150)->nullable();
            $table->string('country', 5)->nullable();      // FR, US, etc.
            $table->string('device', 20)->default('desktop'); // desktop, mobile, tablet
            $table->string('browser', 50)->nullable();
            $table->string('os', 50)->nullable();
            $table->string('session_hash', 64);             // unique visitor per day
            $table->boolean('is_conversion')->default(false); // clicked CTA
            $table->string('conversion_type', 50)->nullable(); // trial, demo, newsletter
            $table->timestamp('created_at')->useCurrent();

            // Indexes for dashboard queries
            $table->index('created_at');
            $table->index('path');
            $table->index('source_type');
            $table->index('referrer_domain');
            $table->index('session_hash');
            $table->index('country');
            $table->index('device');
            $table->index('is_conversion');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_visits');
    }
};
