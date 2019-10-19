<?php

namespace AppBundle\Repository\Filter;

use AppBundle\Entity\Gebruiker;
use AppBundle\Entity\GezinInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Filter\SQLFilter;

class GezinFilter extends SQLFilter
{
    public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias)
    {
        if ($targetEntity instanceof GezinInterface && $this->hasParameter('gebruiker')) {
            /** @var Gebruiker $gebruiker */
            $gebruiker = $this->getParameter('gebruiker');

            $gezin = $gebruiker->getGezin();
            return $targetTableAlias . ".gezin_id = '".$gezin->getId()."'";
        }

        return '';
    }
}