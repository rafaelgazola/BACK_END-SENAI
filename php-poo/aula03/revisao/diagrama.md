### sempre começe prototipando

# Diagrama Clientes Fisicos e Juridicos

```mermaid
classDiagram
cliente <|-- clientePF
cliente <|-- clientePJ

class cliente{
    # nome
    # telefone
    # email

    #getDados()
}

class clientePF{
    - cpf
    # getDados()

}

class clientePJ{
    - cnpj
    #getDados()
}