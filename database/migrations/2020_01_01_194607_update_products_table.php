<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('default_kind_id')->nullable();
            $table->unsignedInteger('default_circulation_id')->nullable();
            $table->unsignedInteger('default_duration_id')->nullable();
            $table->unsignedInteger('default_size_id')->nullable();
            $table->unsignedInteger('default_quality_id')->nullable();
            $table->unsignedInteger('default_punch_id')->nullable();
            $table->unsignedInteger('default_stand_id')->nullable();
            $table->unsignedInteger('default_print_type_id')->nullable();
            $table->unsignedInteger('default_bounding_type_id')->nullable();
            $table->unsignedInteger('default_cover_type_id')->nullable();
            $table->boolean('is_customized')->default(0);
            $table->boolean('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
