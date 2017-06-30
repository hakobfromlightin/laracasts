<?php

use App\Lesson;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LessonTest extends PHPUnit_Framework_TestCase
{
    protected $lesson;

    public function setUp()
    {
        $this->lesson = new Lesson([
            'name' => 'My Lesson',
            'image' => 'lesson.jpg'
        ]);
    }

    /** @test */
    public function a_lesson_has_a_name()
    {
        $this->assertEquals('My Lesson', $this->lesson->name);
    }

    /** @test */
    public function a_lesson_has_an_image()
    {
        $this->assertEquals('lesson.jpg', $this->lesson->image);
    }
}