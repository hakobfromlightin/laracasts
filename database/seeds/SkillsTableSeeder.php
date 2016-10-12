<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'name' => 'PHP',
                'image' => 'images/php.jpg',
                'description' => 'While much of the development community is perfectly happy mocking PHP with the same tired insults, the reality is that the ecosystem has improved dramatically over the last half-decade. Today, PHP is a joy to use. Sure, it has its quirks, but so does every language. Level up your PHP chops with this Laracasts skill.',
                'completed' => false,
                'started_at' => Carbon::create(2013, 9, 19),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Laravel',
                'image' => 'images/laravel.jpg',
                'description' => 'Laravel is a PHP framework for constructing everything from small to enterprise-level applications. As you\'ll find, it\'s a joy to use, and just might make you enjoy writing PHP again. It\'s that good.',
                'completed' => false,
                'started_at' => Carbon::create(2013, 9, 19),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Testing',
                'image' => 'images/testing.jpg',
                'description' => 'Testing is one of those practices that sounds incredibly simple, yet, in practice, it can take years to master. If there is such thing as a short-cut, working your way through skill will be your best bet.',
                'completed' => false,
                'started_at' => Carbon::create(2013, 9, 19),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JavaScript',
                'image' => 'images/javascript.jpg',
                'description' => 'JavaScript: the language we love to hate. Luckily, though, the dark days of the early 2000s are long gone. Thanks to frameworks, like jQuery and Vue, and continued work on ECMAScript, the truth is that JavaScript isn\'t half-bad to use these days. It\'s almost - dare I say it - fun!',
                'completed' => false,
                'started_at' => Carbon::create(2013, 9, 19),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tooling',
                'image' => 'images/tooling.jpg',
                'description' => 'If you plan on spending a career writing software, then it makes sense to optimize your tooling and workflow processes, right? Whether using Sublime, or Git, and building up a server with Laravel Forge, tooling matters.',
                'completed' => false,
                'started_at' => Carbon::create(2013, 9, 19),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::statement("SET foreign_key_checks = 0");
        DB::table('skills')->truncate();
        DB::statement("SET foreign_key_checks = 1");

        foreach ($skills as $skill) {
            DB::table('skills')->insert($skill);
        }
    }
}
