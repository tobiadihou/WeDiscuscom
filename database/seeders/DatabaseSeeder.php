<?php

namespace Database\Seeders;

use App\Models\Groupe;
use App\Models\Message;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $john = User::factory()->create([
            "name" => "John Doe",
            "email" => "john@example.test",
            "password" => bcrypt("password"),
            "is_admin" => true,
        ]);

        $jane = User::factory()->create([
            "name" => "Jane Doe",
            "email" => "jane@example.test",
            "password" => bcrypt("password"),
        ]);

        $additionalUsers = User::factory(20)->create();

        // Création de groupes
        for($i = 0; $i < 5; $i++){
            $group = Groupe::factory()->create([
                "owner_id" => $john->id
            ]);

            // On prend entre 2 et 5 personnes
            $usersIds = User::inRandomOrder()->limit(rand(2, 5))->pluck("id")->toArray();
            // puis on les insère dans la table pivot group_user
            $group->users()->attach(array_unique([$john->id, ...$usersIds]));
        }

        // Créer des messages
        Message::factory(1000)->create();

       $messages = Message::wherenull('groupe_id')->orderBy('created_at')->get();
       $conversation = $messages->groupBy(function (Message $message)
       {
        return collect($message);
       });
        $this->command->info('seedage terminé avec succès');
    }
}
