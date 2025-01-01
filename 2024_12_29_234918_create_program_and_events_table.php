<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('program_and_events', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->date('event_date');
        $table->string('location');
        $table->string('form_link');
        $table->string('status');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('program_and_events');
}
};