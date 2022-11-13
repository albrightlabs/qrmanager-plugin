<?php namespace Albrightlabs\QRManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateQRCodesTable Migration
 */
class CreateQRCodesTable extends Migration
{
    public function up()
    {
        Schema::table('albrightlabs_qrmanager_q_r_codes', function (Blueprint $table) {
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('type', 255)->nullable();
            $table->longText('data')->nullable();
        });
    }

    public function down()
    {
        Schema::table('albrightlabs_qrmanager_q_r_codes', function (Blueprint $table) {

        });
    }
}
