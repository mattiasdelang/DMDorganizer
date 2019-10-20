<?php

namespace AppBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Extension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFunction('generateUid', [$this, 'generateUid']),
        ];
    }

    public function generateUid()
    {
        return Rams
    }
}