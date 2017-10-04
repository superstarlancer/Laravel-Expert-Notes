<?php

namespace Bjuppa\LaravelBlog\Tests\Feature;

use Bjuppa\LaravelBlog\Contracts\BlogEntry;
use Bjuppa\LaravelBlog\Tests\IntegrationTest;

class DatabaseTest extends IntegrationTest
{
    public function setUp()
    {
        parent::setUp();
        $this->loadRegisteredMigrations();
        $this->seedDefaultBlogEntry();
    }

    public function test_default_entry_is_seeded()
    {
        $entry = \Bjuppa\LaravelBlog\Eloquent\BlogEntry::first();

        $this->assertEquals('default', $entry->blog);
    }

}
