<?php

use Illuminate\Database\Migrations\Migration;
        
        Schema::table('pets', function (Blueprint $table) {
            $table->id()->change();
            $table->string('name', 'LittleTeodoro')->change();
            $table->string('specie')->change();
            $table->string('color')->change();
            $table->string('size')->change();
            $table->timestamps();
        });
    
