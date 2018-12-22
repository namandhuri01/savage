<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facebook_user_id')->unsigned();
            $table->string('grouplink');
            $table->timestamps();

            $table->foreign('facebook_user_id','fk_fbgroup_facebook_user_idx')
                    ->references('id')->on('facebook_users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_groups');
    }
}
