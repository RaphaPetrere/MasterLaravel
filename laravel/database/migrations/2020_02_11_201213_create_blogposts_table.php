<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //as we used the command php artisan make:migration create_blogsposts_table, it created a migration with the Schema create on the up function
        //if we didn't do it, it'd be empty.

        Schema::create('blogposts', function (Blueprint $table) { //what is in '' is the table it'll work on and the second argument is a closure
            $table->bigIncrements('id'); //here is the collumn it'll add
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
        Schema::dropIfExists('blogposts');
    }
}
