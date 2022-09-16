<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCompanydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companydetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname');
            $table->string('companyaddress1');
            $table->string('companyaddress2')->nullable();
            $table->string('companycity');
            $table->string('companystate');
            $table->string('companypincode');
            $table->integer('companyphone');
            $table->integer('companymobile1');
            $table->integer('companymobile2')->nullable();
            $table->string('companyemail1')->unique();
            $table->string('companyemail2')->unique()->nullable();
            $table->string('companywebsite');
            $table->string('companygstin')->nullable();
            $table->string('companyiecno')->nullable();
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
        Schema::dropIfExists('companydetails');
    }
}
