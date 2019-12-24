# solid
- Single responsability, Open/close principle, Liskov substitution, Interface segregation e Dependency inversion

## Open/Close
- Aberto para expansão
- Fechado para alteração
> ex.: ao invés de criar multiplos métodos de tag, criar multiplas classes com o mesmo método para renderizar a tag. Dessa forma a classe principal (Html) não é alterada para esse comportamento

### Detalhes
- Comumente usado com interfaces ou classes abstratas ao inves do `__call`
    - Padrão strategy (interfaces)
    - Padrão template method (classes abstratas)

## Single Responsability
- Um objeto nunca deve ter mais de um fim ou propósito
> ex.: o objeto html é encarregado de chamar a função correta para elaboração da tag, enquanto que as classes de tag (A, Img e Ul) sabem montar a string

## Dependency Inversion
- Módulos de alto nível não deveriam depender de módulos de baixo nível. Ambos deveriam depender de abstrações (classe abstrata ou interface).
    - Abstrações não deveriam depender de detalhes. Detelhes devem depender de abstrações.
