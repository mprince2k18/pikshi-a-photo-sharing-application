<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Post;
use App\Comment;
use App\Loved;
use App\Shared;
use App\Notification;
use Faker\Generator as Faker;
use Faker\Provider\Image;
use Faker\Provider\Base;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'role' => 'Admin',
        'profile_bio' => Str::title('a nice title uses the correct case'),
        'photo' => 'https://cdn0.iconfinder.com/data/icons/professional-avatar-5/48/manager_male_avatar_men_character_professions-512.png',
        'cover' => 'http://wpkixx.com/html/pitnik/images/resources/profile-image.jpg',
        'slug' => Str::slug($faker->name),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => Str::title('a nice title uses the correct case'),
        'photo' => 'https://dummyimage.com/600x480/000/fff',
        // 'photo' => $faker->imageUrl($width = 640, $height = 480),
        'size' => '40KB',
        'resulation' => '640x480',
        'post_link' => 'http://127.0.0.1:8000/homepage',
        'user_id' => '1',
        'slug' => Str::slug($faker->name),
        'synopsis' => Str::title('a nice title uses the correct case,a nice title uses the correct case'),
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'post_id' => $faker->numberBetween($min = 1, $max = 19),
        'comment' => $faker->paragraph,
    ];
});

$factory->define(Loved::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'post_id' => $faker->numberBetween($min = 1, $max = 19),
    ];
});

$factory->define(Shared::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'post_id' => $faker->numberBetween($min = 1, $max = 19),
        'shared_to' => 'facebook',
    ];
});

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'post_id' => $faker->numberBetween($min = 1, $max = 19),
        'action' => 'Commented',
        'is_read' => false,
        'url' => 'http://127.0.0.1:8000/post/1/jace-yost',
    ];
});
