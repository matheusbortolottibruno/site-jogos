# PHP (Hypertext Preprocessor)
O PHP é:
- uma linguagem backend
- realiza conexão com banco de dados
- processado no servidor
- executa o processamento no servidor e devolve para o cliente apenas a resposta.
- Exemplo: 
    - Arquivo PHP: 2+2
    - Resposta para o cliente: 4
- todo arquivo PHP terá a extensão `.php`

## Aula 01
- Introdução ao PHP
- Infraestrutura necessária
- Onde colocar os nossos arquivos
- Delimitador
- Comentários
- Escrita na tela
- Variável

## Introdução ao PHP
- Documentação https://www.php.net/manual/pt_BR/
- Na web ele brilha, de todos os sites que existem, 77% é PHP https://benjamincrozat.com/php-is-dead
- Com PHP você pode criar projetos
    - Web
    - IoT
    - Desktop
    - Linha de comando
- PHP é uma linguagem interpretada

## Infraestrutura
- Servidor XAMPP (https://www.apachefriends.org/)
- Nossos site ficam em servidores web, um servidor web é responsável por exibir/servir páginas WEB.
![](xampp.PNG)

## Onde colocar os nossos arquivos
- Os arquivos PHP precisam ser executados à partir do servidor, como se você estivesse acessando pela internet.
- Para o XAMPP, o local aonde devemos colocar os arquivos é `c:\xampp\htdocs`. Exemplo: `c:\xampp\htdocs\loja\index.php`.
- Para executar arquivos PHP, precisamos requisitá-los à partir do navegador digitando `http://localhost`. Exemplo: `http://localhost/loja/index.php`

## Delimitador
- `<?php ?>`

## Comentário
- `//` comentário de uma linha
- `/* */` comentário de várias linhas

## Escrita na tela
- comandos: `echo` , `print` e `print_r`

## Variável
- Espaço reservado na memória que damos um nome para armazenar algum valor
- O PHP é case-sensitive, significa que o PHP diferencia maiúsculas de minúsculas, ou seja, Nome é diferente de nome
- O nome de uma variável deve ser significativo de acordo com seu valor. Exemplo: uma variável que vai armazenar o endereço pode-se chamar $endereco
- toda variável em PHP inicia com `$`
