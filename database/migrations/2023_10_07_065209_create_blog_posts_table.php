<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->unsigned(); // id категории
            $table->integer('user_id')->unsigned(); //id автора статьи

            $table->string('slug')->unique();
            $table->string('title');

            $table->text('excerpt')->nullable(); // Выдержка статей
            $table->text('content_raw'); // Контент markdown
            $table->text('content_html'); // Автосохранение статьи в html (readOnly)

            $table->boolean('is_published')->default(false); // опубликовано ли статья
            $table->timestamp('published_at')->nullable(); //Когда статья была опубликована

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users'); //связь Users, подключаемся с id таблицы User
            $table->foreign('category_id')->references('id')->on('blog_categories'); // подключаем id c blog_categories
            $table->index('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
