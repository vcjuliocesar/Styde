<?php
use Styde\Model;

class ArrayAccessTest extends PHPUnit\Framework\TestCase {
    
    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
            'name' => 'Julio Cesar',
            'email' => 'vcjuliocesar@outlook.com',
            'website' => 'vcjulio.com',
        ]);

        $this->assertSame('Julio Cesar',$user['name']);

        $this->assertSame('vcjuliocesar@outlook.com',$user['email']);

        $this->assertSame('vcjulio.com',$user['website']);
    }     
}

class UserTest extends Model implements ArrayAccess {
    // isset - empty
    public function offsetExists($offset)
    {
        
    }
    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }
    public function offsetSet($offset, $value)
    {
        
    }
    // unset
    public function offsetUnset($offset)
    {
        
    }
}