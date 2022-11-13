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
        Schema::create('albrightlabs_qrmanager_q_r_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('albrightlabs_qrmanager_q_r_codes');
    }
}
