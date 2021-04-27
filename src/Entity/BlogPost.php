<?php


namespace App\Entity;


class BlogPost
{
    private $currentPlace = ['draft'];

    /**
     * @return string[]
     */
    public function getCurrentPlace(): array
    {
        return $this->currentPlace;
    }

    /**
     * @param string[] $currentPlace
     */
    public function setCurrentPlace(array $currentPlace): void
    {
        $this->currentPlace = $currentPlace;
    }


}