# Expressões Regulares com PHP

Praticando Expressões Regulares com PHP.

#### Âncoras
- **\b** - Word Boundary
- **^** - Início do Alvo
- **$** - Fim do Alvo
#### Quantifier
- **{n,m}** - No Mínimo **N**, no Máximo **M** Vezes
- **?** - Zero ou Uma Vez
- **+** - Uma ou Mais Vezes
- **\*** - Zero um Mais Vezes
#### Classes de char - []
- **[A-Z] e\ou [a-z]** - Letras de A até Z
- **[123]** - 1,2 ou 3
- **\d** - Todos os Dígitos **[0-9]**
- **\s** - Espaços em Branco **[ \t\r\n\f]**
- **\w** - Wordchar **[A-Za-z0-9]**
#### Grupos
- **(\w+)** - Grupo de word chars
- **(\w+)?** - Grupo Opcional
- **(?:\w+)** - Non-capturing Group
#### Atalhos
- **\W** (W maiúsculo) Tudo que não é um word char **[^\w]**
- **\D** (D maiúsculo) Tudo que não é um dígito **[^\d]**
