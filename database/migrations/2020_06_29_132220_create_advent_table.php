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
            $table->integer('iduser');
            $table->boolean('visible')->default(0)->comment('видимость');
            $table->date('date_delete')->comment('кода удалить');
            $table->string('topic_name',150)->default("Пусто");
            $table->text('description',150)->default("Пусто");
            $table->string('name')->comment('имя пользователя');
            $table->string('phone')->default('Пусто')->comment('телефон');
            $table->string('e_mail')->default('Пусто');
            $table->integer('type_advent')->default(0)->comment('тип обьявления');
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
