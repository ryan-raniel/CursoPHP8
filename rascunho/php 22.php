<?php 
    $nome = 'tal';
    $sobrenome = "tal \u{1F596}";
    $apelido = "fulano";
    echo "$nome $sobrenome";

    echo "Estamos no ano de  " . date('Y');
    
    /* no caso de apas duas a sequência de escape  é contra barra aspas  \"conteúdo\" ou 
    \n = nova linha
    \t = Tabulação horizontal
    \\ = Barra invertida
    \$ = Sinal de cifrão
    \u{} = Codepoint Unicode
    No caso de aspas simpre só funciona \'conteúdo\'
    */

    echo "$nome \"$apelido\" $sobrenome";

    // sintaxe Heredoc

    $canal = "Curso em vídeo";
    $ano = date('Y');
    echo <<< TESTE
        olá galera do $canal!
                Tudo bem com vocês?
            Como está sendo esse fim de $ano?
        Abraços! \u{1F596}
    TESTE;

    // Sintaxe Nowdoc 

    $canal = "Curso em vídeo";
    $ano = date('Y');
    echo <<< 'TESTE'
        olá galera do $canal!
                Tudo bem com vocês?
            Como está sendo esse fim de $ano?
        Abraços! \u{1F596}
    TESTE;

?>