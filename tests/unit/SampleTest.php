<?php

use PHPUnit\Framework\TestCase;
use App\Models\Collection;

class SampleTest extends TestCase
{

    public function setUp(){
        $this->emptyCollection = new Collection();

        $this->oneCollection =  new Collection();
        $this->oneCollection->add('one');

        $this->manyCollection =  new Collection();
        $this->oneCollection->add('three');

        Parent::setUp();
    }

    public function testTrueAssertsToTrue(){
        $this->assertTrue( true );
    }

    public function testIsEmpty(){
        $collection = new Collection();

        $this->assertTrue($collection->isEmpty());

        $collection->add('frank');

        // $this->assertTrue($collection->isEmpty());

    }


    public function testAdd(){
        $collection = new Collection();

        $this->assertSame(0, $collection->size() );
    }


    public function testContains(){
        $this->assertTrue(true);

    }

    public function testSize(){
        $collection = new Collection();

        $this->assertSame( 0, $collection->size() );

        $collection->add(1);

    }


}