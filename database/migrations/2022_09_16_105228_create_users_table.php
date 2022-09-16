<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usercode');
            $table->string('userfirstname');
            $table->string('usermiddlename')->nullable();
            $table->string('userlastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('useremail1')->unique()->nullable();
            $table->integer('userphone');
            $table->integer('usermobile1');
            $table->integer('usermobile2')->nullable();
            $table->string('useraddress1');
            $table->string('useraddress2')->nullable();
            $table->string('usercity');
            $table->string('userstate');
            $table->string('usercountry');
            $table->string('userpincode');
            $table->integer('userrole');
            $table->tinyInteger('userstatus')->default(1);
            $table->tinyInteger('deleted_status')->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
