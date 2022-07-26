<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('english_title')->unique();
            $table->string('bangla_title');
            $table->string('slug');
            $table->string('intro_video')->nullable();
            $table->integer('price');
            $table->string('bangla_price');
            $table->string('graduate_number');
            $table->string('total_lecture');
            $table->string('class_hour');
            $table->string('course_duration');
            $table->text('motiv_content')->nullable();
            $table->text('course_opportunity')->nullable();
            $table->text('curriculum_desc')->nullable();
            $table->text('course_reqirement')->nullable();
            $table->integer('coupon_status')->comment( '1 = for Accept, 2 = Not Accept');
            $table->integer('status')->comment( '1 = Active, 2 = Inactive');
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
