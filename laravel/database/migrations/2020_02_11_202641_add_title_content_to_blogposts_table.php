<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleContentToBlogpostsTable extends Migration
{
    //This migration will add some collumns on Blogspots Table, without doing it on the phpMyAdmin, just by doing the migration
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogposts', function (Blueprint $table) {
            //this time we have a schema table to modify the table. Laravel picked up that we want to do something to blogposts table
            //U can also put the --table=blogposts sufix to identify to Laravel which table u want the Schema to work on
            $table->string('title');
            $table->text('content'); //Since content can be more than 255 char, we use the TEXT type
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogposts', function (Blueprint $table) {
            //We can do this kind of stuff 
            // $table->dropColumn('title');
            // $table->dropColumn('content');
            //OR
            $table->dropColumn(['title', 'content']); //since it receives an array

        });
    }
}
