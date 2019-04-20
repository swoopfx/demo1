<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @author otaba
 *        
 */
class UserProfile
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private  $id;
    
    private $fullname;
    
    private $user;
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
}

