<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyaCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aya_cultures', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->longText('culture_desc');

            $table->longText('our_value_title');
            $table->longText('our_value_desc');

            $table->longText('card_title_1');
            $table->longText('card_title_1_desc');
            $table->longText('card_title_1_img');
            $table->longText('card_title_2');
            $table->longText('card_title_2_desc');
            $table->longText('card_title_2_img');
            $table->longText('card_title_3');
            $table->longText('card_title_3_desc');
            $table->longText('card_title_3_img');

            $table->longText('governance_title');
            $table->longText('governance_desc');
            $table->longText('governance_img');

            $table->longText('equal_title');
            $table->longText('equal_desc');
            $table->longText('equal_img');
            $table->longText('equal_desc1');
            $table->longText('leadership_title');
            $table->longText('leadership_desc');

            $table->longText('bonded_title');
            $table->longText('bonded_desc');
            $table->longText('bonded_img');

            $table->longText('continual_title');
            $table->longText('continual_desc');
            $table->longText('continual_img');
            
            $table->integer('updated_by');
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
        Schema::dropIfExists('aya_cultures');
    }
}
