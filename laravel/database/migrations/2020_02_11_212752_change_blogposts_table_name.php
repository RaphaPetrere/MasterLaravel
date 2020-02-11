<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBlogpostsTableName extends Migration
{
    //here we used the  php artisan make:migration change_blogposts_table_name --table=blogposts for it to know which table r we using
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('blogposts', 'blog_posts'); //it uses a $from $to parameter
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('blog_posts', 'blogposts'); //it uses a $from $to parameter
    }
}
