<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorsTables extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            createDefaultTableFields($table);
        });

        Schema::create('author_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'author');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('author_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'author');
        });
    }

    public function down()
    {
        Schema::dropIfExists('author_revisions');
        Schema::dropIfExists('author_translations');
        Schema::dropIfExists('authors');
    }
}
