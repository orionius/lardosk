<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advent', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->binary('visible')->comment('видимость');
            $table->timestamp('date_delete')->comment('кода удалить');
            $table->string('name')->comment('имя пользователя');
            $table->string('phone')->comment('телефон');
            $table->string('e_mail');
            $table->integer('type_advent')->comment('тип обьявления');
            $table->integer('priority')->default(100)->comment('Приоритет 0 главный');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advent');
    }
}
