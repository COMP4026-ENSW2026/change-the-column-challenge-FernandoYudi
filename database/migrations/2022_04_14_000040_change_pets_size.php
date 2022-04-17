<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class changePetsSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            
            $affected = DB::table('pets')
            ->whereIn('size', ['large','L'])
            ->update(['size' => 'l']);

            $affected = DB::table('pets')
            ->whereIn('size', ['medium','M'])
            ->update(['size' => 'm']);

            $affected = DB::table('pets')
            ->whereIn('size', ['small', 'SM'])
            ->update(['size' => 'sm']);
        });
    }

      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
