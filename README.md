# Arquitetura
Este framework utiliza um padrão de arquitetura único, dado o nome de MVO.<br/>

## MVO
M = Model, V = View, O = Operator<br/>
A arquitetura MVO diferencia da famosa arquitetura MVC.<br/>
O operator do MVO é diferente do controller do MVC, enquanto a arquitetura MVC recebe a requisição por meio do controller, a arquitetura MVO gerencia a aplicação por meio de uma estrutura linear facilitando o entendimento e organização do projeto.<br/>

### Estrutura MVO
A requisição é recebida pela view e passada para o operator, o operator por sua vez, obtém os dados do model e depois os trata, após isso, o operator envia os dados tratados para a view.