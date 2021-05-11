<?php namespace Sandbox\Address\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('sandbox_address_addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sandbox_address_addresses');
    }
}
