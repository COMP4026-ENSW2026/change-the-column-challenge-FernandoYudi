<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class changePets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            // $affected = DB::table('pets')
            // ->where('id', 1)
            // ->update(
            //     ['name'=> 'Neve', 'specie' => 
            //     'Macaco', 'color' => 'White', 'size' => 'xl']
            // );
            // $affected = DB::table('pets')
            // ->where('id', 3)
            // ->update(
            //     ['name'=> 'teodoroIII', 'specie' => 
            //     'Macaco', 'color' => 'White', 'size' => 'xl']
            // );
            // $affected = DB::table('pets')
            // ->where('id', 4)
            // ->update(
            //     ['name'=> 'teoria', 'specie' => 
            //     'Macacos3', 'color' => 'Whiteblack', 'size' => 'xl']
            // );
            // Types

            $affected = DB::table('pets')
            ->whereIn('specie', ['dog', 'cachorro'])
            ->update(['specie' => 'Cachorro']);

            $affected = DB::table('pets')
            ->where('specie', 'pikachu')
            ->orWhere('specie', 'bulbasauro')
            ->orWhere('specie', 'squirtle')
            ->update(['specie' => 'Pokemon']);

            $affected = DB::table('pets')
            ->whereIn('specie', ['mamba', 'cobra', 'manba-negra'])
            ->update(['specie' => 'Cobra']);

            $affected = DB::table('pets')
            ->where('specie', 'bunny')
            ->update(['specie' => 'Coelho']);

            $affected = DB::table('pets')
            ->where('specie', 'gato')
            ->update(['specie' => 'Gato']);

            $affected = DB::table('pets')
            ->whereIn('specie', ['periquito', 'papagaio'])
            ->update(['specie' => 'Aves']);

            $affected = DB::table('pets')
            ->where('specie', 'zebra')
            ->update(['specie' => 'Zebra']);

            $affected = DB::table('pets')
            ->where('specie', 'camaleão')
            ->update(['specie' => 'Camaleão']);

            $affected = DB::table('pets')
            ->whereIn('specie', ['dragão de komodo', 'dragao de komodo'])
            ->update(['specie' => 'Dragão de Komodo']);

            $affected = DB::table('pets')
            ->where('specie', 'camelo')
            ->update(['specie' => 'Camelo']);

            $affected = DB::table('pets')
            ->where('specie', 'cavalo')
            ->update(['specie' => 'Cavalo']);
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
