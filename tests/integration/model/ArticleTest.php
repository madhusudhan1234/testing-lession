<?php

use App\Article;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticeTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_fetches_trending_articles()
    {
        factory(Article::class, 2)->create();
        factory(Article::class)->create(['reads' => 10]);
        $mostpopular = factory(Article::class)->create(['reads' => 20]);

        $articles = Article::trending();

        $this->assertEquals($mostpopular->id, $articles->first()->id);
        $this->assertCount(3, $articles);
    }
}
