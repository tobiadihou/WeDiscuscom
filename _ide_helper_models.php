<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $user_id2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $last_message_id
 * @property-read \App\Models\User $user1
 * @property-read \App\Models\User $user2
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation whereLastMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conversation whereUserId2($value)
 */
	class Conversation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $owner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $last_message_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messsages
 * @property-read int|null $messsages_count
 * @property-read \App\Models\User $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\GroupeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereLastMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Groupe whereUpdatedAt($value)
 */
	class Groupe extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $message
 * @property int $sender_id
 * @property int|null $receiver_id
 * @property int|null $goupe_id
 * @property int|null $conversation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MessageAttachement> $attachement
 * @property-read int|null $attachement_count
 * @property-read \App\Models\Groupe|null $groupe
 * @property-read \App\Models\User|null $recever
 * @property-read \App\Models\User $sender
 * @method static \Database\Factories\MessageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereConversationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereGoupeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $message_id
 * @property string $name
 * @property string $path
 * @property string $nime
 * @property int $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement query()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereNime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageAttachement whereUpdatedAt($value)
 */
	class MessageAttachement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $avatar
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property int $is_admin
 * @property string|null $blocked_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Groupe> $groupes
 * @property-read int|null $groupes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBlockedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

