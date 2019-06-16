<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TABSymfonyRepository")
 */
class TABSymfony
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",length=45)
     */
    private $ex_campo1;

    /**
     * @var string
     * @ORM\Column(type="string",length=45)
     */
    private $ex_campo2;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TABSymfony
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getExCampo1(): string
    {
        return $this->ex_campo1;
    }

    /**
     * @param string $ex_campo1
     * @return TABSymfony
     */
    public function setExCampo1(string $ex_campo1): TABSymfony
    {
        $this->ex_campo1 = $ex_campo1;
        return $this;
    }

    /**
     * @return string
     */
    public function getExCampo2(): string
    {
        return $this->ex_campo2;
    }

    /**
     * @param string $ex_campo2
     * @return TABSymfony
     */
    public function setExCampo2(string $ex_campo2): TABSymfony
    {
        $this->ex_campo2 = $ex_campo2;
        return $this;
    }


}
