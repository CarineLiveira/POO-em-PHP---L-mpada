<?Php

class Lampada {

    private $interruptor;
    private $potencia;
    private $dimmer;

    public function __construct($interruptor, $potencia, $dimmer){
        $this->interruptor = $interruptor;
        $this->potencia = $potencia;
        $this->dimmer = $dimmer;
   
    }

    

    public function setInterruptor($interruptor){
        $this->interruptor=$interruptor;
    }
    

    public function getInterruptor(){
        if($this->interruptor != true){
            $this->interruptor = 0;
        }
        return $this->interruptor;
        

    }

    public function statusLampada(){
        if($this->interruptor = true){
            $this->interruptor = false;
            echo "Desligar";
        }else{
            $this->interruptor = true;
            echo "Lampada ligada!";
        }
    }

    public function setPotencia($potencia){
         $this->potencia = $potencia;
    }

    public function getPotencia(){
       return $this->potencia;
    }

    public function setDimmer($dimmer){
        $this->dimmer = $dimmer; 
    }

    public function getDimmer(){
        return $this->dimmer;
    }

    
  
}

$lampadaUm = new Lampada(true, 23, 24);

echo $lampadaUm->getInterruptor();
echo "<br>";
echo $lampadaUm-> getPotencia();
echo "<br>";
echo $lampadaUm->statusLampada();


?>