# diagrama Controle interface e repository

```mermaid
classDiagram

ControleInterface <|.. ControleRepository
ControleRepository <|-- Controle

class ControleInterface{
    <<interface>>
    + ligar()
    + aumentarVol()
    + diminuirVol()
    + aumentarCanal()
    + diminuirCanal()
    + mutar()
    + mostrarStatus()
    + getStatus()
}

class ControleRepository{
    # status
    # volume
    # canal
}

class Controle{
}
```
