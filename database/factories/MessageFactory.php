<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::pluck('id')->toArray();
        $isGoupeMessage = fake()->boolean(50);
        $receverId= null;
        $groupId =null;
        $sendId = fake()->randomElement($userId);
        if($isGoupeMessage){
            $groupIds = Groupe::pluck('id')->toArray();
            if (empty($groupIds)) {
                throw new \Exception("aucun groupe trouvé dans la base de donnée");
            }
            $groupId = fake()->randomElement($groupIds);
            $group = Groupe::find($groupId);
            $sendId = fake()->randomElement($group->users->pluck("id")->toArray());
        }else{
            $receverId = fake()->randomElement(array_diff($userId,[$sendId]));
        }
        $conversationID = null;
        if(!$isGoupeMessage){
            $conversationID= Conversation::firstOrCreate(
            [
                'user_id' =>min($sendId,$receverId),
                'user_id2' =>max($sendId,$receverId)
            ],[
                'last_message_id'=>null,
            ]);
        }
        return [
        'message'=>fake()->realText(),
        'sender_id'=>$sendId,
        'receiver_id'=>$receverId,
        'goupe_id'=>$groupId,
        'conversation_id'=>$conversationID,
        ];
    }
}
