<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle');
            $table->string('jobtype');
            $table->text('jobdecription');
            $table->text('jobskillrequirement');
            $table->text('jobqualification');
            $table->text('jobsalary');
            $table->string('location');
            $table->string('companyname');
            $table->string('companyemail')->nullable();
            $table->string('companylogo');
            $table->string('tags');
            $table->integer('cat_id');
            $table->integer('author_id');
            $table->timestamp('expires_at');
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
        Schema::dropIfExists('jobs');
    }
};
