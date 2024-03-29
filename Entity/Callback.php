<?php

//src/Wifinder/CallbackBundle/Entity/Callback.php

namespace Wifinder\CallbackBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="callback")
 * @ORM\Entity(repositoryClass="Wifinder\CallbackBundle\Entity\Repository\CallbackRepository")
 */
class Callback {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=225, nullable=true)
     */
    protected $first_name;
    
    /**
     * @ORM\Column(type="string", length=225, nullable=true)
     */
    protected $middle_name;
    
    /**
     * @ORM\Column(type="string", length=225, nullable=true)
     */
    protected $last_name;
    
    /**
     * @ORM\Column(type="string", length=225)
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string", length=225)
     */
    protected $phone;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $callback_text;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_received = true;
    
    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;

    protected $action;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Callback
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set middle_name
     *
     * @param string $middleName
     * @return Callback
     */
    public function setMiddleName($middleName)
    {
        $this->middle_name = $middleName;
    
        return $this;
    }

    /**
     * Get middle_name
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Callback
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Callback
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Callback
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set callback_text
     *
     * @param string $callbackText
     * @return Callback
     */
    public function setCallbackText($callbackText)
    {
        $this->callback_text = $callbackText;
    
        return $this;
    }

    /**
     * Get callback_text
     *
     * @return string 
     */
    public function getCallbackText()
    {
        return $this->callback_text;
    }

    /**
     * Set is_received
     *
     * @param boolean $isReceived
     * @return Callback
     */
    public function setIsReceived($isReceived)
    {
        $this->is_received = $isReceived;
    
        return $this;
    }

    /**
     * Get is_received
     *
     * @return boolean 
     */
    public function getIsReceived()
    {
        return $this->is_received;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Callback
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
    
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }
    
    public function getAction()
    {
        return $this->action;
    }
}