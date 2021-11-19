<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->float('coefficients_salary', 8, 2)->nullable()->comment("Hệ số lương");
            $table->float('position_coefficient', 8, 2)->nullable()->comment("Hệ số chức vụ");
            $table->integer('basic_salary')->nullable()->comment("Lương cơ bản");
            $table->integer('salary')->nullable()->comment("Lương");
            $table->integer('bonus')->nullable()->comment("Tiền thưởng");
            $table->integer('social_insurance')->nullable()->comment("Bảo hiểm xã hội");
            $table->integer('health_insurance')->nullable()->comment("Bảo hiểm y tế");
            $table->integer('personal_income_tax')->nullable()->comment("Thuế thu nhập cá nhân");
            $table->string('department')->nullable()->comment("Phòng ban");
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
