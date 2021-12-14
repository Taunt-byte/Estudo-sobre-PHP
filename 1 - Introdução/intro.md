# Anotações da primeria aula

Coloquei aqui tudo o que eu entendi sobre o PHP em minhas busca pelo mesmo na internet e em livros

## Como surgiu a linguagem PHP?

A linguagem PHP foi concebida durante o outono de 1994 por Rasmus Lerdorf. As primeiras versões
não foram disponibilizadas, tendo sido utilizadas em sua home-page apenas para que ele pudesse ter informações sobre as
visitas que estavam sendo feitas. A primeira versão utilizada por outras pessoas foi disponibilizada em 1995, e ficou
conhecida como “Personal Home Page Tools” (ferramentas para página pessoal). Era composta por um sistema bastante
simples que interpretava algumas macros e alguns utilitários que rodavam “por trás” das home-pages: um livro de visitas,
um contador e algumas outras coisas.
Em meados de 1995 o interpretador foi reescrito, e ganhou o nome de PHP/FI, o “FI” veio de um outro
pacote escrito por Rasmus que interpretava dados de formulários HTML (Form Interpreter). Ele combinou os scripts do
pacote Personal Home Page Tools com o FI e adicionou suporte a mSQL, nascendo assim o PHP/FI, que cresceu bastante,
e as pessoas passaram a contribuir com o projeto.
Estima-se que em 1996 PHP/FI estava sendo usado por cerca de 15.000 sites pelo mundo, e em meados
de 1997 esse número subiu para mais de 50.000. Nessa época houve uma mudança no desenvolvimento do PHP.

Atualmente o uso do PHP3 vem crescendo numa velocidade incrível, e já está sendo desenvolvida a
versão 4 do PHP.

## O que pode ser feito com PHP?

Basicamente, qualquer coisa que pode ser feita por algum programa CGI pode ser feita também com PHP,
como coletar dados de um formulário, gerar páginas dinamicamente ou enviar e receber cookies.
PHP também tem como uma das características mais importantes o suporte a um grande número de
bancos de dados, como dBase, Interbase, mSQL, mySQL, Oracle, Sybase, PostgreSQL e vários outros. Construir uma
página baseada em um banco de dados torna-se uma tarefa extremamente simples com PHP.
Além disso, PHP tem suporte a outros serviços através de protocolos como IMAP, SNMP, NNTP, POP3
e, logicamente, HTTP. Ainda é possível abrir sockets e interagir com outros protocolos.

## O que é PHP?

PHP é uma linguagem que permite criar sites WEB dinâmicos, possibilitando uma interação com o
usuário através de formulários, parâmetros da URL e links. A diferença de PHP com relação a linguagens semelhantes a
Javascript é que o código PHP é executado no servidor, sendo enviado para o cliente apenas html puro. Desta maneira é
possível interagir com bancos de dados e aplicações existentes no servidor, com a vantagem de não expor o código fonte
para o cliente. Isso pode ser útil quando o programa está lidando com senhas ou qualquer tipo de informação confidencial.
O que diferencia PHP de um script CGI escrito em C ou Perl é que o código PHP fica embutido no
próprio HTML, enquanto no outro caso é necessário que o script CGI gere todo o código HTML, ou leia de um outro
arquivo.

# Anotações sobre sintaxe

O tipo de tags mais utilizado é o terceiro, que consiste em uma “abreviação” do primeiro. Para utilizá-lo,
é necessário habilitar a opção short-tags na configuração do PHP. O último tipo serve para facilitar o uso por
programadores acostumados à sintaxe de ASP. Para utilizá-lo também é necessário habilitá-lo no PHP, através do arquivo
de configuração php.ini.

## Separador de instruções

Entre cada instrução em PHP é preciso utilizar o ponto-e-vírgula, assim como em C, Perl e outras
linguagens mais conhecidas. Na última instrução do bloco de script não é necessário o uso do ponto-e-vírgula, mas por
questões estéticas recomenda-se o uso sempre.

## Nomes de variáveis

Toda variável em PHP tem seu nome composto pelo caracter $ e uma string, que deve iniciar por uma
letra ou o caracter “_”. PHP é case sensitive, ou seja, as variáveis $vivas e $VIVAS são diferentes. Por isso é preciso ter
muito cuidado ao definir os nomes das variáveis. É bom evitar os nomes em maiúsculas, pois como veremos mais adiante,
o PHP já possui alguma variáveis pré-definidas cujos nomes são formados por letras maiúsculas.

## Comentários

Há dois tipos de comentários em código PHP:
Comentários de uma linha:
Marca como comentário até o final da linha ou até o final do bloco de código PHP – o que vier antes.
Pode ser delimitado pelo caracter “#” ou por duas barras ( // ).

## Exemplo:

 <code><? echo “teste”; #isto é um teste ?></code>

 <code><? echo “teste”; //este teste é similar ao anterior ?></code>

## Comentários de mais de uma linha:

Tem como delimitadores os caracteres “/*” para o início do bloco e “*/” para o final do comentário.
Se o delimitador de final de código PHP ( ?> ) estiver dentro de um comentário, não será reconhecido pelo
interpretador.
