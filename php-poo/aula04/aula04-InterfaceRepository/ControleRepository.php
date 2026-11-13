<?php
require_once __DIR__ . '/ControleInterface.php';
//Criando a classe ControleRepository
abstract class ControleRepository implements ControleInterface
{
    protected bool $status;
    protected int $volume;
    protected int $canal;

    public function ligar()
    {
        if ($this->status) {
            sleep(2);
            $this->status = false;
            return "Desligando...";
        } else {
            sleep(2);
            $this->status = true;
            return "Ligando...";
        }
    }
    public function aumentarVol()
    {
        if ($this->status && $this->volume < 100) {
            $this->volume += 1;
            return $this->volume . "\n";
        } else {
            return "TV desligada ou Voluma máximo!
";
        }
    }
    public function diminuirVol()
    {
        if ($this->status && $this->volume > 0) {
            $this->volume -= 1;
            return $this->volume . "\n";
        } else {
            return "TV desligada ou Mudo
";
        }
    }
    public function aumentarCanal()
    {
        if (!$this->status) {
            return "TV desligada\n";
        }

        $this->canal = $this->canal >= 500 ? 1 : $this->canal + 1;
        return $this->canal . "\n";
    }
    public function diminuirCanal()
    {
        if (!$this->status) {
            return "TV desligada\n";
        }

        $this->canal = $this->canal <= 1 ? 500 : $this->canal - 1;
        return $this->canal . "\n";
    }
    public function mutar()
    {
        $this->volume = 0;
        return "Mudo";
    }
    public function mostrarStatus()
    {
        return $this->status;
    }
    public function getStatus()
    {
        return "
Ligado?: " . ($this->status ? "Ligado" : "Desligado") . "
Volume: {$this->volume}
Canal: {$this->canal}
";
    }
}
