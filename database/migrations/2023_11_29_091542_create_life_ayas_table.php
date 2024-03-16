<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLifeAyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('life_ayas', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->longText('life_at_aya_title')->nullable();
            $table->longText('life_at_aya_desc')->nullable();
            $table->longText('life_at_aya_video')->nullable();

            $table->longText('work_life_balance_title')->nullable();
            $table->longText('work_life_balance_desc')->nullable();
            $table->longText('work_life_balance_img')->nullable();
            $table->LongText('work_life_balance_desc1')->nullable();

            $table->longText('health_wellness_title')->nullable();
            $table->longText('health_wellness_desc')->nullable();
            $table->longText('health_wellness_img')->nullable();
            $table->longText('healthy_body_title')->nullable();
            $table->longText('healthy_body_desc')->nullable();
            $table->longText('healthy_mind_title')->nullable();
            $table->longText('healthy_mind_desc')->nullable();
            $table->longText('healthy_workplace_title')->nullable();
            $table->longText('healthy_workplace_desc')->nullable();
            $table->longText('health_wellness_desc1')->nullable();


            $table->longText('financial_wellbeing_title')->nullable();
            $table->longText('financial_wellbeing_desc')->nullable();
            $table->longText('financial_wellbeing_img')->nullable();
            $table->longText('financial_wellbeing_desc1')->nullable();

            $table->longText('family_support_title')->nullable();
            $table->longText('family_support_desc')->nullable();
            $table->longText('family_support_img')->nullable();
            $table->longText('family_support_desc1')->nullable();

            $table->longText('reward_title')->nullable();
            $table->longText('reward_desc')->nullable();
            $table->longText('reward_img')->nullable();
            $table->longText('monetary_rewards_title')->nullable();
            $table->longText('monetary_rewards_desc')->nullable();
            $table->longText('non_monetary_rewards_title')->nullable();
            $table->longText('non_monetary_rewards_desc')->nullable();

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
        Schema::dropIfExists('life_ayas');
    }
}
