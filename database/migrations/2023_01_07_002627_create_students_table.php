<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code')->nullable()->unique();
            $table->unsignedBigInteger('document')->unique();

            $table->unsignedBigInteger('document_type')->references('code')->on("document_types")->onDelete('restrict')->onUpdate('cascade');

            $table->string('name', 100);
            $table->string('last_name', 100)->nullable();
            $table->date('birthdate')->nullable();
            $table->unsignedTinyInteger('age')->nullable();
            $table->string('email', 100)->nullable()->unique();
            $table->string('phone', 50)->nullable();

            $table->unsignedBigInteger('parent_code')->nullable();
            $table->foreign('parent_code')->references('code')->on('parents')->onDelete('restrict')->onUpdate('cascade');

            $table->unsignedTinyInteger("status")->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
