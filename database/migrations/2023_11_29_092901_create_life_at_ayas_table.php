<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLifeAtAyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('life_at_ayas', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->longText('life_at_aya_title');
            $table->longText('life_at_aya_desc');
            $table->longText('life_at_aya_video');

            $table->longText('work_life_balance_title');
            $table->longText('work_life_balance_desc');
            $table->longText('work_life_balance_img');
            $table->LongText('work_life_balance_desc1');

            $table->longText('health_wellness_title');
            $table->longText('health_wellness_desc');
            $table->longText('health_wellness_img');
            $table->longText('healthy_body_title');
            $table->longText('healthy_body_desc');
            $table->longText('healthy_mind_title');
            $table->longText('healthy_mind_desc');
            $table->longText('healthy_workplace_title');
            $table->longText('healthy_workplace_desc');
            $table->longText('health_wellness_desc1');


            $table->longText('financial_wellbeing_title');
            $table->longText('financial_wellbeing_desc');
            $table->longText('financial_wellbeing_img');
            $table->longText('financial_wellbeing_desc1');

            $table->longText('family_support_title');
            $table->longText('family_support_desc');
            $table->longText('family_support_img');
            $table->longText('family_support_desc1');

            $table->longText('reward_title');
            $table->longText('reward_desc');
            $table->longText('reward_img');
            $table->longText('monetary_rewards_title');
            $table->longText('monetary_rewards_desc');
            $table->longText('non_monetary_rewards_title');
            $table->longText('non_monetary_rewards_desc');

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
        Schema::dropIfExists('life_at_ayas');
    }
}
