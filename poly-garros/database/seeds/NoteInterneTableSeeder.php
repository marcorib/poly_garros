<?php

use Illuminate\Database\Seeder;

class NoteInterneTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('note_interne')->delete();
        
        \DB::table('note_interne')->insert(array (
            0 => 
            array (
                'id' => 12,
                'note_interne_emetteur' => 'Benji',
                'note_interne_recepteur' => 'Son con de scrum',
                'note_interne_commentaire' => 'A toi de jouer, t\'as 30 min !!!!!',
                'created_at' => '2018-12-11 11:00:37',
                'updated_at' => '2018-12-11 11:00:37',
            ),
        ));
        
        
    }
}