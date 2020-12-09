<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('tlp');
            $table->string('alamat');
            $table->enum('admin', ['Superadmin', '', 'AdminAccount', 'AdminInfo', 'AdminProduksi',]);
            $table->string('file');
            $table->string('password');
            $table->enum('status', ['Aktif', 'Nonaktif']);
            $table->rememberToken();
            $table->string('email_verified_at')->nullable();
            $table->string('verification_code', 100);
            $table->integer('is_verified')->nullable();
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
        Schema::dropIfExists('admin');
    }
}
