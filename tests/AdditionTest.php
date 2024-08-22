<?php 
declare(strict_types=1);
require "vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use App\Calcul\Addition;
use App\Math\Addition as MathAddition;
use App\Model\ModelMeteo;
use App\system\Conf;

final class AdditionTest extends TestCase
{

    public function testCalculAdditionAddSame() : void{
        $ad = new Addition();
        $somme = $ad->add([6,4]);
        $this->assertSame(10,$somme,"test Addition::add");
    }

    public function testCalculAdditionAddNotSame(): void{
        $ad = new Addition();
        $somme = $ad->add([6,4]);
        $this->assertNotSame(9,$somme,"test Addition::add");
    }

    public function testMathAdditionAddEquals() : void{
        $ad = new MathAddition();
        $somme = $ad->add(6,4);
        $this->assertEquals(10,$somme,"test Addition::add");
    }
    public function testMathAdditionAddNotEquals() : void{
        $ad = new MathAddition();
        $somme = $ad->add(6,4);
        $this->assertNotEquals(9,$somme,"test Addition::add");
    }
    public function testModelModelMeteoCityInfo() : void{
        $model = new ModelMeteo();
        $data = $model->selectMeteo('Paris');
        $this->assertArrayHasKey('city_info',$data);
    }
    public function testModelModelMeteoFalse() : void{
        $model = new ModelMeteo();
        $url = Conf::$url;
        Conf::$url = "https://aaaa.com";
        $data = $model->selectMeteo('Parretgherzis');
        Conf::$url = $url;
        $this->assertFalse($data);
    }
    /**
     * Summary of ModelModelMeteoErrors
     * 
     * @return void
     */
    public function testModelModelMeteoErrors() : void{
        $model = new ModelMeteo();
        $data = $model->selectMeteo('Parretgherzis');
        $this->assertArrayHasKey('errors',$data);
    }
}