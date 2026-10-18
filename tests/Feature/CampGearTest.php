<?php

namespace Tests\Feature;

use App\Models\CampGear;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CampGearTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }
    /**
     * Test the root URL redirects or loads the catalog.
     */
    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('TRAILFORM');
        $response->assertSee('Perlengkapan Outdoor Tangguh, Siap Disewa.');
    }

    /**
     * Test the catalog index page loads and shows products.
     */
    public function test_catalog_index_shows_products(): void
    {
        $response = $this->get('/camp-gears');
        $response->assertStatus(200);
        $response->assertSee('Alpine Dome Tent 4P');
        $response->assertSee('Expedition Pack 50L');
        $response->assertSee('Trail Sleeping Bag');
        $response->assertSee('Summit Folding Chair');
        $response->assertSee('Ultralight Cooking Set');
        $response->assertSee('Compact Camping Table');
        $response->assertSee('Daftar 10 Perlengkapan Camping');
        $response->assertSee('85.000');
    }

    /**
     * Test the gear detail page loads with correct product data.
     */
    public function test_gear_detail_page_loads_product(): void
    {
        $gear = CampGear::first();
        $this->assertNotNull($gear, 'A camp gear should exist from seeding.');

        $response = $this->get('/camp-gears/' . $gear->id);
        $response->assertStatus(200);
        $response->assertSee($gear->name);
        $response->assertSee($gear->category);
        $response->assertSee(number_format($gear->rent_price, 0, ',', '.'));
        $response->assertSee((string) $gear->stock);
    }

    /**
     * Test a non-existent gear ID returns 404 Not Found.
     */
    public function test_non_existent_gear_returns_404(): void
    {
        $response = $this->get('/camp-gears/999999');
        $response->assertStatus(404);
    }
}
