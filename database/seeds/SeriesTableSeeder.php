<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phpSeries = [
            [//1
                'name' => 'The PHP Practitioner',
                'image' => 'images/series/the-php-practitioner.jpg',
                'description' => 'We all start somewhere. When it comes to web development with PHP, well, your first stop is this series. Designed specifically and exclusively for beginners, here, you\'ll learn the fundamentals of PHP - all the way down to defining variables and arrays. If you feel somewhat unprepared for the content at Laracasts, this "PHP for beginners" series should be your next stop. New lessons are published every Thursday, so don\'t fall behind!',
                'times_watched' => 1,
                'times_coded' => 1,
                'level' => 'beginner',
                'archived' => false,
                'available' => true,
                'downloaded' => true,
                'watched' => true,
                'coded' => true,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 10, 2),
                'last_watched_at' => Carbon::create(2016, 10, 2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//2
                'name' => 'Object-Oriented Bootcamp',
                'image' => 'images/series/object-oriented-bootcamp.jpg',
                'description' => 'As wonderful as Laravel is, it does assume that you have a basic understanding of object-oriented programming. If you don\'t, that\'s okay, we all were there at one point; however, you need to buckle down and learn this stuff before continuing on to the various lessons on this site. Let me help!',
                'times_watched' => 1,
                'times_coded' => 0,
                'level' => 'beginner',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => true,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => null,
                'last_watched_at' => Carbon::create(2016, 10, 7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//3
                'name' => 'PHP 7 Up and Running',
                'image' => 'images/series/php-7-up-and-running.jpg',
                'description' => 'Slated for release in December, 2015, PHP 7 brings a wealth of new features, bug fixes, and performance improvements. If you\'re curious, come with me, as I demonstrate what\'s new!',
                'times_watched' => 1,
                'times_coded' => 0,
                'level' => 'intermediate',
                'archived' => false,
                'available' => true,
                'downloaded' => true,
                'watched' => true,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 10, 9),
                'last_watched_at' => Carbon::create(2016, 10, 9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//4
                'name' => 'Simple Rules for Simpler Code',
                'image' => 'images/series/simple-rules-for-simpler-code.jpg',
                'description' => 'If you\'ve ever heard a developer use the term, "object calisthenics," you might have assumed that they were referring to some hugely complex topic. Luckily, though, that\'s not the case. It simply refers to a series of coding exercises to promote better software.',
                'times_watched' => 1,
                'times_coded' => 0,
                'level' => 'intermediate',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => true,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 14, 9),
                'last_watched_at' => Carbon::create(2016, 14, 9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//5
                'name' => 'How to Build Command-Line Apps',
                'image' => 'images/series/how-to-build-command-line-apps.jpg',
                'description' => 'In this series, we\'ll learn how how to build command-line apps from scratch, using Symfony\'s excellent console component. In no time, you\'ll be whipping up executables to perform all sorts of tasks.',
                'times_watched' => 1,
                'times_coded' => 1,
                'level' => 'intermediate',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => true,
                'coded' => true,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 15, 9),
                'last_watched_at' => Carbon::create(2016, 15, 9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//6
                'name' => 'Code Katas in PHP',
                'image' => 'images/series/code-katas-in-php.jpg',
                'description' => 'If martial artists use kata as a method for exercise and practice, what might be the equivalent for coders, like us? Well, code katas are short, repeatable programming challenges, which are meant to exercise everything from your focus, to your workflow.',
                'times_watched' => 0,
                'times_coded' => 0,
                'level' => 'beginner',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => false,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 16, 9),
                'last_watched_at' => Carbon::create(2016, 16, 9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//7
                'name' => 'Laravel From Scratch',
                'image' => 'images/series/laravel-from-scratch.jpg',
                'description' => 'Each year, the Laracasts "Laravel From Scratch" series is refreshed to reflect the latest iteration of the framework. This is the 2016 edition, which uses version 5.2 of the framework. Are you hoping to level up your toolset? You\'ve come to the right place. This series will take you from installing Laravel, all the way up to mastering the essentials of the framework.',
                'times_watched' => 5,
                'times_coded' => 4,
                'level' => 'beginner',
                'archived' => false,
                'available' => true,
                'downloaded' => true,
                'watched' => true,
                'coded' => true,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2015, 20, 7),
                'last_watched_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//8
                'name' => 'Discover Symfony Components',
                'image' => 'images/series/discover-symfony-components.jpg',
                'description' => 'While it\'s sometimes fun to imagine Laravel and Symfony locked in battle, the reality is that Laravel leverages a number of excellent Symfony components. In this series, one by one, we\'ll review a variety of these very components.',
                'times_watched' => 0,
                'times_coded' => 0,
                'level' => 'intermediate',
                'archived' => false,
                'available' => true,
                'downloaded' => false,
                'watched' => false,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => null,
                'last_watched_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//9
                'name' => 'Advanced Eloquent',
                'image' => 'images/series/advanced-eloquent.jpg',
                'description' => 'Sure, you\'ve learned the essentials of using Eloquent in your applications, but do you really understand what\'s going on under the hood? Well, that\'s specifically what we\'re interested in for this series. How do all the bits and pieces fit together?',
                'times_watched' => 0,
                'times_coded' => 0,
                'level' => 'advanced',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => false,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 15, 12),
                'last_watched_at' => Carbon::create(2016, 15, 12),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//10
                'name' => 'Whip Monstrous Code Into Shape',
                'image' => 'images/series/whip-monstrous-code-into-shape.jpg',
                'description' => 'You did your best, but somehow that User object, over time, morphed into a monstrous God object. And your controllers started out nice and clean, but now... not so much. We\'ve all been there. In this series, we\'ll review a number of ideas for whipping convoluted code into shape.',
                'times_watched' => 0,
                'times_coded' => 0,
                'level' => 'advanced',
                'archived' => false,
                'available' => false,
                'downloaded' => false,
                'watched' => false,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => null,
                'last_watched_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//11
                'name' => 'Incremental APIs',
                'image' => 'images/series/incremental-apis.jpg',
                'description' => 'Often, pitfalls and traps are a good thing! They teach us about what to avoid the next time around. This is how best practices emerge. With that in mind, in this series, let\'s take an incremental approach to understanding API development with Laravel.',
                'times_watched' => 1,
                'times_coded' => 1,
                'level' => 'advanced',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => true,
                'coded' => true,
                'due_to' => null,
                'first_watched_at' => Carbon::create(2016, 21, 4),
                'last_watched_at' => Carbon::create(2016, 21, 4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//12
                'name' => 'Design Patterns in PHP',
                'image' => 'images/series/design-patterns-in-php.jpg',
                'description' => 'A design pattern is a common solution to a common problem. Nothing more, nothing less. And, while some of these approaches might seem foreign or overwhelming to you, the important thing to remember is that, as a developer, you are in charge. That means you decide when a pattern is appropriate, and when it\'s completely unnecessary. That\'s the key.',
                'times_watched' => 0,
                'times_coded' => 0,
                'level' => 'advanced',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => false,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => null,
                'last_watched_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [//13
                'name' => 'SOLID Principles in PHP',
                'image' => 'images/series/solid-principles-in-php.jpg',
                'description' => 'SOLID represents a series of guidelines that developers can use to, if done well, simplify and clarify their code. While certainly not laws, understanding these concepts will make you a better developer.',
                'times_watched' => 0,
                'times_coded' => 0,
                'level' => 'advanced',
                'archived' => false,
                'available' => false,
                'downloaded' => true,
                'watched' => false,
                'coded' => false,
                'due_to' => null,
                'first_watched_at' => null,
                'last_watched_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

/*----------------------PHP-------------------------------------------------------------------------------------------*/
        ];

        $connections = [
            [
                'number' => 1,
                'serie_id' => 1,
                'skill_id' => 1
            ],
            [
                'number' => 2,
                'serie_id' => 2,
                'skill_id' => 1
            ],
            [
                'number' => 3,
                'serie_id' => 3,
                'skill_id' => 1
            ],
            [
                'number' => 4,
                'serie_id' => 4,
                'skill_id' => 1
            ],
            [
                'number' => 5,
                'serie_id' => 5,
                'skill_id' => 1
            ],
            [
                'number' => 6,
                'serie_id' => 6,
                'skill_id' => 1
            ],
            [
                'number' => 7,
                'serie_id' => 7,
                'skill_id' => 1
            ],
            [
                'number' => 8,
                'serie_id' => 8,
                'skill_id' => 1
            ],
            [
                'number' => 9,
                'serie_id' => 9,
                'skill_id' => 1
            ],
            [
                'number' => 10,
                'serie_id' => 10,
                'skill_id' => 1
            ],
            [
                'number' => 11,
                'serie_id' => 11,
                'skill_id' => 1
            ],
            [
                'number' => 12,
                'serie_id' => 12,
                'skill_id' => 1
            ],
            [
                'number' => 13,
                'serie_id' => 13,
                'skill_id' => 1
            ],
            [
                'number' => 1,
                'serie_id' => 6,
                'skill_id' => 3
            ],
            [
                'number' => 1,
                'serie_id' => 7,
                'skill_id' => 2
            ],
            [
                'number' => 7,
                'serie_id' => 8,
                'skill_id' => 2
            ],
            [
                'number' => 8,
                'serie_id' => 9,
                'skill_id' => 2
            ],
            [
                'number' => 13,
                'serie_id' => 11,
                'skill_id' => 2
            ],
        ];

        DB::statement("SET foreign_key_checks = 0");
        DB::table('series')->truncate();
        DB::table('serie_skill')->truncate();
        DB::statement("SET foreign_key_checks = 1");

        foreach ($phpSeries as $serie) {
            DB::table('series')->insert($serie);
        }

        foreach ($connections as $connection){
            DB::table('serie_skill')->insert($connection);
        }
    }
}
