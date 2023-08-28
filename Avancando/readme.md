## Estrutura de dados Array.

- Agrupa vários valores;
- Também é chamado de vetor ou lista (isso depende da linguagem ou plataforma);
- Usa-se [ ] ou array() para declarar um novo array;
- Acessa um elemento usamos os [ ];
- Dentro dos [ ] vem a posição do elemento;
- Possui um índice que por padrão começa com 0 (zero);
- Para acessar todos os elementos podemos usar uma estrutura de repetição;
- Para saber quantos elementos um array tem existe a função count();

## Array associativos: estrutura de dados mais complexa usando e combinando arrays associativos.

- Um array associativo sempre define elementos composto por uma chave e um valor
  - A associação entre chave e valor é feito com =>
  - A chave funciona como um índice explicito (definido por nós)
  - O valor pode ser um valor primitivo ou outro array
  - A chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter
- Um array associativo também é chamado de mapa ou dicionário
- Podemos combinar um array simples e array associativo para definir estruturas mais complexas
- O laço foreach oferece uma forma mais expressiva de iteração
  - No foreach podemos acessar o índice e o valor do elemento da iteração
- Arrays podem crescer e podemos adicionar novos elementos
- Em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)
  - nesse caso o PHP automaticamente incrementa o índice

## Função:

- Uma função encapsula uma funcionalidade/um código;
- Uma função usa a palavra chave function, possui um nome, pode ter parâmetros, tem um corpo e pode ter um retorno;
- Para chamar uma função usamos o nome dela passando o valor dos parâmetros;
- Uma função pode especificar os tipos na declaração do parâmetro (a partir da versão 7), como também o tipo do retorno.

## Interpolacao e Require

- Como usar um array associativo dentro de uma string:

  - Para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]";
  - E alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}".

- Um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once:

  - include não dá erro (apenas avisa) se o arquivo não existe, require dá erro;
  - require_once garante que o arquivo será incluído apenas uma vez.

- Níveis de mensagens entre eles:

  - E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução;
  - E_ERROR, PHP dá erro e para a execução do programa.

## PHP na WEB! Aprendemos que:

- Precisamos de um servidor para programar na web
  - PHP já tem um servidor embutido
  - O comando para rodar o servidor é: php -S localhost:8080
- A web sempre funciona no modelo de comunicação requisição e resposta
  - O protocolo da web se chama HTTP (Hyper Text Transfer Protocol)
- As páginas web são construídas com a linguagem de marcação HTML, o navegador entende HTML
- Podemos misturar código PHP com código HTML
  - Assim podemos criar HTML dinamicamente
  - Para tal é preciso demarcar o código PHP, abrindo e fechando a tag PHP: <?php ... ?>
- Para imprimir algum valor podemos usar <?= $valor ?>
