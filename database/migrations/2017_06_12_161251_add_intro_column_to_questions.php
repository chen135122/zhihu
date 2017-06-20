<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIntroColumnToQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->integer('comments_count')->default(0);
            $table->integer('follows_count')->default(1);
            $table->integer('answers_count')->default(0);
            $table->string('close_comment',8)->default('F');
            $table->string('is_hidden',8)->default('F');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('comments_count');
            $table->dropColumn('follows_count');
            $table->dropColumn('answers_count');
            $table->dropColumn('close_comment');
            $table->dropColumn('is_hidden');

        });
    }
}
