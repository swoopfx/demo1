<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;
use CsnUser\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="loan")
 * @author otaba
 *        
 */
class Loan
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private  $id;
    
    /**
     * ManyToOne(targetEntity="CsnUser\Entity\User")
     * 
     * @var User;
     */
    private $user;
    
    /**
     * @ORM\Column(name="amount", type="string", nullable=true)
     * @var string
     */
    private $amount;
    
    private $status;
    
    /**
     * this also doubles as un approved date
     * @var Datetime
     */
    private $approvedDate;
    
    private $createdOn;
    
    private $updatedOn;
    
    
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
}

