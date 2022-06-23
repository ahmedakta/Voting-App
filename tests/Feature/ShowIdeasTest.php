<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_list_of_ideas_shows_on_main_page()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'Description Of My First Idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second Idea',
            'description' => 'Description Of My Second Idea',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

    public function test_single_idea_shows_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'Description Of My First Idea',
        ]);

        $response = $this->get(route('idea.show',$idea));

        $response->assertSuccessful();
        
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    public function test_ideas_pagination_works()
    {
        $idea = Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My first idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My Eleventh idea';
        $ideaEleven->save();

        $response = $this->get('/');
        
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('?page=2');

        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);

        

    }
    public function test_same_idea_title_different_slugs()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'Description Of My First Idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'Description Of My Second Idea',
        ]);


        $response = $this->get(route('idea.show',$ideaOne));
        
        $response->assertSuccessful();

        $this->assertTrue(request()->path() == 'ideas/my-first-idea');

        $response = $this->get(route('idea.show',$ideaTwo));
        
        $response->assertSuccessful();

        $this->assertTrue(request()->path() == 'ideas/my-first-idea-2');

        

    }
}
