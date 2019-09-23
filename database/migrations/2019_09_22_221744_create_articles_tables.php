<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTables extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            createDefaultTableFields($table, true, true, true);
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('article_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'article');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
        });

        Schema::create('article_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'article');
        });

        Schema::create('article_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'article');
        });
    }

    public function down()
    {
        Schema::dropIfExists('article_revisions');
        Schema::dropIfExists('article_translations');
        Schema::dropIfExists('article_slugs');
        Schema::dropIfExists('articles');
    }
}
