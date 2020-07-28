<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->bigInteger('phone')->nullable()->after('email_verified_at');
           $table->string('gender')->nullable()->after('phone');
           $table->string('image_profile')->nullable()->after('gender');
           $table->integer('active')->nullable()->after('type_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('image_profile');
            $table->dropColumn('active');
        });
    }
}
