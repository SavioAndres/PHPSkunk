A página de configuração está em app/config.php

# Arquitetura MVO
Este framework utiliza um padrão de arquitetura único, dado o nome de MVO.<br/>

## Estrutura MVO
M = Model, V = View, O = Operator<br/>
A arquitetura MVO diferencia da famosa arquitetura MVC.<br/>
O operator do MVO é diferente do controller do MVC, enquanto a arquitetura MVC recebe a requisição por meio do controller, a arquitetura MVO gerencia a aplicação por meio de uma estrutura linear facilitando o entendimento e organização do projeto.<br/>
<br/>
A requisição é recebida pela view e passada para o operator, o operator por sua vez, obtém os dados do model e depois os trata, após isso, o operator envia os dados tratados para a view.

# Organização do projeto
## Model
Da mesma forma da arquitetura MVC, o model obtém os dados do banco de dados.<br/>
Dentro da pasta model tem a pasta database, ela se encarrega de fazer a conexão com o banco de dados por meio do arquivo connect.php, além disso, a pasta database também contém um arquivo crud.php, esse arquivo facilita as operações com o banco de dados.

## View
O view é organizado em: assets, pages e templates.<br/>
O assets guarda os arquivos css e javascript separados.<br/>
Pages é a pasta onde ficará todo html do projeto, é a parte do responsável por disposnibilizar o conteúdo diferencial de cada página do sistema.<br/>
Templates é respondável por disponibilizar todos os layout das páginas.

## Operator
O operator não maniputa HTML, Javascript, tão menos CSS. Ele é formado por class PHP, é nele que após o view fazer uma requisição será possível chamar o model, obter os dados, para escrever no operator toda lógica do sistema.