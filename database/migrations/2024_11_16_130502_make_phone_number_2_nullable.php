<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakePhoneNumber2Nullable extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone_number_two')->nullable()->change();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone_number_two')->nullable(false)->change();
    });
}

}
