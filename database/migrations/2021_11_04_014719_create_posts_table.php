<?php

use Brick\Math\BigInteger;
use Faker\ORM\Mandango\ColumnTypeGuesser;
use Faker\Provider\ar_JO\Text;
use Faker\Provider\ar_SA\Text as Ar_SAText;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\String_ as CastString_;
use PhpParser\Node\Scalar\String_;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // column:text
            // column:String
            // column:bigInteger
            // column:enum
            // column: timestamps
            $table->id();
            $table->string('publication')->nullable()->default('text');
            $table->enum('state', ['published', 'unpublished', 'in_review', 'received'])->nullable()->default('received');
            $table->text('publication_content')->nullable();
            $table->bigInteger('category_id')->nullable()->unsigned();
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
        Schema::dropIfExists('posts');
    }
}
