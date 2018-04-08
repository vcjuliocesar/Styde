<?php
use Styde\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {
    
    protected function newModel(array $attributes = [])
    {
        return new class($attributes) extends Model { };
    } 
    
    public function test_offset_get()
    {
        $user = $this->newModel([
            'name' => 'Julio Cesar',
            'email' => 'vcjuliocesar@outlook.com',
            'website' => 'vcjulio.com',
        ]);

        $this->assertSame('Julio Cesar',$user['name']);

        $this->assertSame('vcjuliocesar@outlook.com',$user['email']);

        $this->assertSame('vcjulio.com',$user['website']);
    }
    
    public function test_offset_exists()
    {
        $user = $this->newModel([
            'name' => 'Julio Cesar',
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

        /** @test **/
        function it_set_and_get_values_with_array_access()
        {
            $user = $this->newModel();
            $user['name'] = 'Julio Cesar';
            $this->assertSame('Julio Cesar', $user['name']);
        }
        /** @test **/
        function it_can_set_and_unset_properties_with_array_access()
        {
            $user = $this->newModel();
            $user['name'] = 'Julio Cesar';
            $this->assertTrue(isset($user['name']));
            unset($user['name']);        
            $this->assertFalse(isset($user['name']));
        }
}
