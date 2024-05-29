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
        // Schema::create('tbladmin', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('AdminName');
        //     $table->string('UserName');
        //     $table->bigInteger('MobileNumber');
        //     $table->string('Address');
        //     $table->string('Email')->unique();
        //     $table->string('Password');
        //     $table->timestamp('AdminRegDate')->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        Schema::create('tbladmin', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Address');
            $table->bigInteger('MobileNumber');
            $table->timestamp('AdminRegDate')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('tbldesk', function (Blueprint $table) {
            $table->id();
            $table->string('deskNumber');
            $table->string('laptopChargerScoket');
            $table->char('isOccupied');
            $table->timestamp('postingDate');
        });

        Schema::create('tbldeskhistory', function (Blueprint $table) {
            $table->id();
            $table->integer('stduentId');
            $table->integer('deaskId');
            $table->mediumText('assignRemark')->collation('utf8mb4_general_ci');
            $table->timestamp('assignDate');
            $table->timestamp('unassignDate')->nullable();
            $table->mediumText('unassignedRemark')->collation('utf8mb4_general_ci');
        });
        
        Schema::create('tblstudents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('registrationNumber');
            $table->string('studentName');
            $table->bigInteger('studentContactNo');
            $table->string('studentEmailId');
            $table->string('studentQualification');
            $table->mediumText('studentAddress')->collation('utf8mb4_general_ci');
            $table->timestamp('regDate');
            $table->integer('isActive');
            $table->char('isDeskAssign');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
