<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkLogoToGenerals extends Migration
{
    public function up()
    {
        Schema::table('generals', function (Blueprint $table) {
            $table->string('dark_logo', 191)->nullable()->after('logo')->comment('logo version for dark backgrounds (storefront header/footer)');
        });
    }

    public function down()
    {
        Schema::table('generals', function (Blueprint $table) {
            $table->dropColumn('dark_logo');
        });
    }
}
