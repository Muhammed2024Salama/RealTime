<?php

use Illuminate\Support\Facades\Broadcast;
use App\Broadcasting\NewUserChannel;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

//Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//    return (int) $user->id === (int) $id;
//});

/**
 * PRIVATE CHANNEL AUTHERIZATION
 */
//Broadcast::channel('new_user_channel', function ($admin) {
//    return $admin->type == 'super_admin';
//}, ['guards' => ['admin']]);

/**
 * PRIVATE CHANNEL AUTHERIZATION (CHANNEL CLASS)
 */
//Broadcast::channel('new_user_channel', NewUserChannel::class, ['guards' => ['admin']]);


/**
 * Presence CHANNEL AUTHERIZATION
 */
Broadcast::channel('admin_room_channel', function ($admin) {
    return ['name' => $admin->name];
}, ['guards' => ['admin']]);
