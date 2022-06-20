<?php
use App\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters= config('db.characters');
        foreach($characters as $character){
            $new_character = new Character();
            $new_character->common_name = $character['common_name'];
            $new_character->alterego = $character['alterego'];
            $new_character->thumb = $character['thumb'];
            $new_character->powers = $character['powers'];
            $new_character->first_appareance = $character['first_appareance'];
            $new_character->bio = $character['bio'];
            $new_character->save();

          
        }
    }
}
