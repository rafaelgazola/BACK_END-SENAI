<?php 
require_once 'ControleInterface.php';

abstract class ControleRepoitory implements ControleInterface{
    #[Override]
    public function ligar()
    {
        if($this->status){
            $this->status = false;
            return "desligando... \n";
        }else{
            $this->status=true;
            return "ligando... \n";
            
        }
    }
    #[Override]
    public function aumentarVol()
    {
        if($this->status && $this->volume < 100){
            $this->volume+=1;
            return "volume: {$this->volume}\n";
        }else{
            return "TV desligada ou volume maximo\n";
        }
    }
    #[Override]
    public function diminuirVol()
    {
        if($this->status && $this->volume >0){
            $this->volume-=1;
            return "volume: {$this->volume}\n";
        }else{
            return "TV desligada ou volume minimo\n";
        }
    }

    #[Override]
    public function subirCanal()
    {
        if($this->status && $this->canal < 22){
            $this->canal+=1;
            return "canal: {$this->canal}\n";
        }
        elseif($this->status && $this->canal == 22)
        {
            $this->canal = 1;
            return "canal: {$this->canal}\n";
        }else{
            return "Tv desligada";
        }
    }
    #[Override]
    public function descerCanal()
    {
        if($this->status && $this->canal > 1){
            $this->canal-=1;
            return "canal: {$this->canal}\n";
        }
        elseif($this->status && $this->canal == 1)
        {
            $this->canal = 22;
            return "canal: {$this->canal}\n";
        }else{
            return "Tv desligada\n";
        }
    }
    #[Override]
    public function mutar()
    {
        if($this->status && $this->volume >0){
            $this->volume = 0;
            return "volume: {$this->volume}\n";
        }
    }

}

?>