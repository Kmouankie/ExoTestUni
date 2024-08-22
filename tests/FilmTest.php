<?php

declare(strict_types=1);
require "vendor/autoload.php";
use App\Model\ModelFilm;
use PHPUnit\Framework\TestCase;

class FilmTest extends TestCase
{
    protected $ModelFilm;
    protected $pasTableau;
    protected $tableauVide = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->ModelFilm = new ModelFilm();
    }

    public function testgetTitresReturnsArray()
    {
        $titres = $this->ModelFilm->getTitres();
        $this->assertIsArray($titres, " L'objet n'est pas un tableau "); // (verifie si c'est bien un tableau)
        $this->assertNotEmpty($titres, " L'objet est vide "); // (verifie si le tableau n'est pas vide)

        // $this->assertNotEmpty($this->tableauVide, " L'objet est vide ");
        // 
    }

    public function testgetTitresErreurVolontaire1()
    {
        $titres = $this->ModelFilm->getTitres();
        $this->assertContains("test", $titres, "test n'existe pas dans le tableau");
    }

    public function testgetTitresErreurVolontaire2()
    {
        $titres = $this->ModelFilm->getTitres();
        $this->assertNotEmpty($this->tableauVide, " L'objet est vide ");
    }

    public function testgetTitresErreurVolontaire3()
    {
        $this->assertIsArray($this->pasTableau, " L'objet n'est pas un tableau ");
    }


}