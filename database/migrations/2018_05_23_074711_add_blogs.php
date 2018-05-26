<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBlogs extends Migration
{
    public function up()
    {
        $id1 = DB::table('blogs')->insertGetId(
            ['title' => 'First Blog',
                'body' => 'This is the content of my first blog.',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')]
        );

        $id2 = DB::table('blogs')->insertGetId(
            ['title' => 'Second Blog',
                'body' => 'This is the content of my second blog.',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')]
        );

        $id3 = DB::table('blogs')->insertGetId(
            ['title' => 'Third Blog',
                'body' => 'This is the content of my third blog.',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')]
        );

        $id4 = DB::table('blogs')->insertGetId(
            ['title' => 'Fourth Blog',
                'body' => 'This is the content of my fourth blog.',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')]
        );
    }


    public function down()
    {

    }
}
