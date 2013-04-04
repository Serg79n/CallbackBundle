<?php

namespace Wifinder\CallbackBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class MailingAddressRepository extends EntityRepository{
    public function retriveMailingAddress(){
        $query = $this->_em->createQueryBuilder()
            ->select("c")
            ->from("CallbackBundle:MailingAddress", "c");

        return $query;
    }
}