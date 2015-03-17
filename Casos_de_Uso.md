| <a href='http://code.google.com/p/promotech'>Home</a> | <a href='http://code.google.com/p/promotech/wiki/Equipe'>Equipe</a> | | <a href='http://code.google.com/p/promotech/wiki/Descricao_do_Sistema'>Descrição do Sistema</a> | | **Casos de Uso** | |<a href='http://code.google.com/p/promotech/wiki/Diagramas'>Diagramas</a>| |<a href='http://code.google.com/p/promotech/wiki/Links'>Links</a>| |
|:------------------------------------------------------|:--------------------------------------------------------------------|:|:--------------------------------------------------------------------------------------------------|:|:-----------------|:|:------------------------------------------------------------------------|:|:----------------------------------------------------------------|:|




# Especificações dos Casos de Uso #
O sistema Promo Tech irá permitir aos seus usuários a execução e processamento das seguintes operações:


## UC01 - Efetuar Login ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário faça login no sistema
Pré-condição:
Pós-condição: um usuário estará logado no sistema


Fluxo de eventos principal

> O cliente informa os dados necessários para efetuar o login:
> > login.
> > senha;


> O sistema verifica se todos os campos foram preenchidos.
> O sistema autentica o usuário;
> O sistema redireciona o usuário para a home;



Fluxos secundários

> No passo 2, se algum dos campos não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o usuário não estiver cadastrado o sistema exibe uma mensagem informando que o login fornecido não esta cadastrado no sistema.



## UC02 - Alterar senha ##

Prioridade: Importante
Descrição do requisito funcional: O sistema deve permitir que o usuário possa trocar sua senha de acesso.
Pré-condição: o usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: um usuário estará logado no sistema


Fluxo de eventos principal

> O cliente informa a senha antiga e a nova senha duas vezes

> O sistema verifica se todos os campos foram preenchidos.
> O sistema verifica se as senhas novas são semelhantes
> A senha do usuário é trocada



Fluxos secundários

> No passo 2, se algum dos campos não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se as senhas não forem iguais o sistema exibe uma mensagem informando que as senhas são diferentes e o redireciona para o passo 1.

## UC03 - Manter Promotor ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa incluir, listar, visualizar, excluir e editar  novos promotores no sistema.
Pré-condição: o usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: um novo promotor será gerado.

**Cadastro**

Fluxo de eventos principal

> O cliente informa os dados necessários para o cadastro do promotor:

> Nome completo;
> CPF'';
> RG'';
> Foto;
> Categoria;
> Altura;
> Manequim;
> Peso;
> Número do calçado;
> Telefone Fixo'' e Celular;
> Email'';

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o promotor já foi cadastrado a partir de seu telefone                                           celular.
> O sistema salva o novo promotor no banco.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o promotor já se encontra cadastrado, o sistema exibe uma mensagem “Número de telefone celular cadastrado no –nome do Promotor que possui esse telefone-“ e redireciona o usuário para o passo 1.

**Lista**

Fluxo de eventos principal

> O usuário pode fornecer um filtro para buscar os promotores por nome ou categoria, se nada for fornecido no filtro o sistema executa a busca por todos os promotores;
> O sistema faz a busca de promotores no banco.
> O sistema lista os seguintes campos dos promotores encontrados:
> > Foto;
> > Nome;
> > Categoria;
> > Manequim;
> > Telefone celular;

Fluxos secundários


> No passo 2, se o sistema não encontrar nenhum promotor cadastrado ele exibe uma mensagem informando “Nenhum promotor foi encontrado”.

**Visualização**

Fluxo de eventos principal

> O usuário seleciona o promotor na listagem.
> O sistema lista os seguintes campos dos promotores encontrados:
> > Nome completo;
> > CPF;
> > RG;
> > Foto;
> > Categoria;
> > Altura;
> > Manequim;
> > Peso;
> > Número do calçado;
> > Telefone Fixo e Celular;
> > Email;

Fluxos secundários


> Se o usuário selecionar um promotor que não esteja cadastrado o sistema deve gerar uma mensagem “Nenhum promotor encontrado”.

**Exclusão**

Fluxo de eventos principal

> O usuário seleciona o promotor na listagem e seleciona a opção de excluir.
> O sistema deve excluir o promotor.
> O sistema gera uma mensagem informando “O promotor foi excluido com sucesso!”.


Fluxos secundários

> Se o usuário selecionar um promotor que não esteja cadastrado o sistema deve gerar uma mensagem “Nenhum promotor encontrado!”.

**Edição**

Fluxo de eventos principal

> O cliente informa os dados necessários para a edição do Promotor:

> Nome completo;
> CPF'';
> RG'';
> Foto;
> Categoria;
> Altura;
> Manequim;
> Peso;
> Número do calçado;
> Telefone Fixo'' e Celular;
> Email'';

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o Promotor já foi cadastrado a partir de seu telefone celular.
> O sistema atualiza os dados do promotor no banco.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o promotor já se encontra cadastrado, o sistema exibe uma mensagem “Numero de telefone celular cadastrado no –nome do Promotor que possui esse telefone-“ e redireciona o usuário para o passo 1.

## UC04 - Manter Coordenador ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa incluir, listar, visualizar, excluir e editar novos coordenadores no sistema.
Pré-condição: O usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: um novo coordenador será gerado.

**Cadastro**

Fluxo de eventos principal

> O cliente informa os dados necessários para o cadastro do Coordenador:

> Nome completo;
> CPF'';
> RG'';
> Foto'';
> Telefone Fixo'' e Celular;
> Email'';
> Anexo de curriculum'';

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o Coordenador já foi cadastrado a partir de seu telefone                                           celular.
> O sistema salva o novo coordenador no banco.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o coordenador já se encontrar cadastrado, o sistema exibe uma mensagem “Numero de telefone celular cadastrado no –nome do coordenador que possui esse telefone-“ e redireciona o usuário para o passo 1.

**Lista**

Fluxo de eventos principal

> O usuário pode fornecer um filtro para buscar os coordenadores por nome, se nada for fornecido no filtro o sistema executa a busca por todos os coordenadores;
> O sistema faz a busca de coordenadores no banco.
> O sistema lista os seguintes campos dos coordenadores encontrados:

> Foto;
> Nome;
> Telefone celular;
> Link do curriculum;

Fluxos secundários

> No passo 2, se o sistema não encontrar nenhum coordenador cadastrado ele exibe uma mensagem informando “Nenhum coordenador foi encontrado”.

**Visualização**

Fluxo de eventos principal

> O usuário seleciona o coordenador na listagem.
> O sistema lista os seguintes campos dos coordenadores encontrados:

> Nome completo;
> CPF;
> RG;
> Foto;
> Telefone Fixo e Celular;
> Email;
> Curriculum;

Fluxos secundários

> Se o usuário selecionar um coordenador que não esteja cadastrado o sistema deve gerar uma mensagem “Nenhum coordenador encontrado”.

**Exclusão**

Fluxo de eventos principal

> O usuário seleciona o coordenador na listagem e seleciona a opção de excluir.
> O sistema deve excluir o coordenador.
> O sistema gera uma mensagem informando “O coordenador foi excluído com sucesso!”.


Fluxos secundários

> Se o usuário selecionar um coordenador que não esteja cadastrado o sistema deve gerar uma mensagem “Nenhum coordenador encontrado!”.

**Edição**

Fluxo de eventos principal

> O cliente informa os dados necessários para a edição do coordenador:

> Nome completo;
> CPF'';
> RG'';
> Telefone Fixo e Celular;
> Email'';
> Anexo de curriculum'';

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o Coordenador já foi cadastrado a partir de seu telefone                                           celular.
> O sistema atualiza os dados do coordenador no banco.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o coordenador já se encontra cadastrado, o sistema exibe uma mensagem “Numero de telefone celular cadastrado no –nome do Coordenador que possui esse telefone-“ e redireciona o usuário para o passo 1.


## UC05 - Manter Produto ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa incluir, listar, visualizar, excluir e editar novas categorias de produtos no sistema.
Pré-condição: o usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: uma nova categoria de produto será gerado.

**Cadastro**

Fluxo de eventos principal

> O cliente informa os dados necessários para o cadastro da categoria do produto:

> Nome da categoria de produto;

> O sistema salva a nova categoria de produto no banco.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo
> No passo 3, se o coordenador já se encontrar cadastrado, o sistema exibe uma mensagem “Numero de telefone celular cadastrado no –nome do coordenador que possui esse telefone-“ e redireciona o usuário para o passo 1.

**Lista**

Fluxo de eventos principal

> O usuário pode fornecer um filtro para buscar as categorias de produtos  por nome. Se nada for fornecido no filtro, o sistema executa a busca por todas as categorias de produtos;
> O sistema faz a busca de categorias de produtos no banco.
> O sistema lista os seguintes campos das categorias de produtos encontrados:

> Nome;

Fluxos secundários

> No passo 2, se o sistema não encontrar nenhuma categoria de produto cadastrado ele exibe uma mensagem informando “Nenhuma categorias de produto foi encontrada”.

**Visualização**

Fluxo de eventos principal

> O usuário seleciona a categoria de produto na listagem.
> O sistema lista os seguintes campos da categoria de produto selecionada:

> Nome;



Fluxos secundários

> Se o usuário selecionar uma categoria de produto que não esteja cadastrada o sistema deve gerar uma mensagem “Nenhuma categoria de produto encontrada”.

**Exclusão**

Fluxo de eventos principal

> O usuário seleciona a categoria de produto na listagem e seleciona a opção de excluir.
> O sistema deve excluir a categoria de produto.
> O sistema gera uma mensagem informando “A categoria de produto foi excluída com sucesso!”.


Fluxos secundários

> Se o usuário selecionar uma categoria de produto que não esteja cadastrada o sistema deve gerar uma mensagem “Nenhuma categoria de produto encontrada!”.

**Edição**

Fluxo de eventos principal

> O cliente informa os dados necessários para a edição da Categoria de Produto:

> Nome da categoria de produto;.

> O sistema verifica se a categoria de produto já foi cadastrada.
> O sistema atualiza os dados do Produto no banco de dados.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos, uma mensagem será exibida pedindo para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se a categoria de produto já se encontra cadastrada, o sistema exibe uma mensagem “A Categoria de Produto NomeDaCategoria já foi cadastrada“ e redireciona o usuário para o passo 1.


## UC06 - Manter Fornecedor ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa incluir, listar, visualizar, excluir e editar novos fornecedores no sistema.
Pré-condição: o usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: um novo fornecedor será gerado.

**Cadastro**

Fluxo de eventos principal

> O cliente informa os dados necessários para o cadastro do fornecedor:

> Nome;
> Telefone Fixo e Celular'';
> Email'';
> Categorias de produtos;

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o fornecedor já foi cadastrado a partir de seu telefone fixo.
> O sistema salva o novo fornecedor no banco.
> O sistema associa as categorias de produtos ao fornecedor
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo
> No passo 3, se o fornecedor já se encontra cadastrado, o sistema exibe uma mensagem “Número de telefone já cadastrado no –nome do Fornecedor que possui esse telefone-“ e redireciona o usuário para o passo 1.


**Lista**

Fluxo de eventos principal

> O usuário pode fornecer um filtro para buscar os fornecedores por nome ou categoria Se nada for encontrado no filtro, o sistema executa a busca por todos os fornecedores;
> O sistema faz a busca dos fornecedores no banco de dados.
> O sistema lista os seguintes campos dos fornecedores encontrados:

> Nome;
> Telefone Fixo e Celular'';
> Email'';
> Categorias de produtos;

''Campos não obrigatórios.


Fluxos secundários

> No passo 2, se o sistema não encontrar nenhum fornecedor cadastrado ele exibe uma mensagem informando “Nenhum fornecedor foi encontrado”.

**Visualização**

Fluxo de eventos principal

> O usuário seleciona o fornecedor na listagem.
> O sistema lista os seguintes campos dos fornecedores encontrados:

> Nome;
> Telefone Fixo e Celular'';
> Email'';
> Categorias de produtos;

''Campos não obrigatórios.

Fluxos secundários

> Se o usuário selecionar um fornecedor que não esteja cadastrado, o sistema deve gerar uma mensagem “Nenhum fornecedor encontrado”.

**Exclusão**

Fluxo de eventos principal

> O usuário seleciona o fornecedor na listagem e seleciona a opção de excluir.
> O sistema deve excluir o fornecedor.
> O sistema gera uma mensagem informando “O fornecedor foi excluído com sucesso!”.


Fluxos secundários

> Se o usuário selecionar um fornecedor que não esteja cadastrado, o sistema deve gerar uma mensagem “Nenhum fornecedor encontrado!”.

**Edição**

Fluxo de eventos principal

> O cliente informa os dados necessários para a edição do Fornecedor:

> Nome;
> Telefone Fixo e Celular;
> Email;
> Categorias de produtos;

Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o fornecedor já foi cadastrado a partir de seu telefone                                           celular.
> O sistema atualiza os dados do promotor no banco de dados.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos, uma mensagem será exibida pedindo para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o fornecedor já se encontra cadastrado, o sistema exibe uma mensagem “Numero de telefone celular cadastrado no –nome do Fornecedor que possui esse telefone-“ e redireciona o usuário para o passo 1.

## UC07 - Definir Faixa de Valor ##


Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa definir faixas de valores para categorias de produtos associadas a seus fornecedores.
Pré-condição:

> O usuário deve estar conectado e autenticado no sistema (ter efetuado o login).

> O sistema deve ter ao menos uma categoria de produto cadastrada.
> O fornecedor deve ter ao menos uma categoria de produto associado.

Pós-condição: A categoria de produto do fornecedor terá uma faixa de valor..


Fluxo de eventos principal

> O usuário seleciona um fornecedor.
> O usuário seleciona uma categoria de produto.
> O usuário informa em que faixa de preço a categoria em questão se encontra:

> Muito Baixo
> Baixo
> Intermediário
> Alto
> Muito Alto



> O sistema atualiza os dados da categoria do produto no banco de dados;
> Uma mensagem de sucesso é exibida para o usuário.


Fluxos secundários

> No passo 1, se o usuário escolher mais de uma faixa de valor para uma categoria uma mensagem será exibida pedindo ao usuário que escolha apenas uma faixa.


## UC08 - Manter Cliente ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa incluir, listar, visualizar, excluir e editar novos clientes no sistema.
Pré-condição: o usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: um novo cliente será gerado.

**Cadastro**

Fluxo de eventos principal

> O cliente informa os dados necessários para o cadastro do cliente:

> Pessoa física ou Jurídica;
> Nome;
> Telefone Fixo e Celular'';
> CPF'' ou CNPJ'';
> Email'';
> Banco;
> Agencia;
> conta;

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos;
> O sistema verifica se o cliente ja foi cadastrado a partir de seu CPF ou CNPJ;;
> O sistema salva o novo cliente no banco;
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos exibe uma mensagem informando para que o usuário forneça o dado e o redireciona para o passo 1;
> No passo 3, se o fornecedor já se encontra cadastrado, o sistema exibe uma mensagem “CPF ou CNPJ já cadastrado no –nome do Cliente que possui esse telefone-“ e redireciona o usuário para o passo 1.

**Lista**

Fluxo de eventos principal

> O usuário pode fornecer um filtro para buscar os fornecedores por nome ou categoria Se nada for encontrado no filtro, o sistema executa a busca por todos os clientes;
> O sistema faz a busca dos clientes no banco de dados.
> O sistema lista os seguintes campos dos fornecedores encontrados:

> Nome;
> Telefone Fixo e Celular'';
> Email'';

''Campos não obrigatórios.


Fluxos secundários

> No passo 2, se o sistema não encontrar nenhum fornecedor cadastrado ele exibe uma mensagem informando “Nenhum fornecedor foi encontrado”.

**Visualização**

Fluxo de eventos principal

> O usuário seleciona o cliente na listagem.
> O sistema lista os seguintes campos dos fornecedores encontrados:

> Pessoa física ou Jurídica;
> Nome;
> CPF ou CNPJ
> Telefone Fixo e Celular'';
> Email'';
> Banco;
> Agencia;
> Conta

''Campos não obrigatórios.

Fluxos secundários

> Se o usuário selecionar um fornecedor que não esteja cadastrado, o sistema deve gerar uma mensagem “Nenhum fornecedor encontrado”.

**Exclusão**

Fluxo de eventos principal

> O usuário seleciona o cliente na listagem e seleciona a opção de excluir.
> O sistema deve excluir o cliente.
> O sistema gera uma mensagem informando “O cliente foi excluido com sucesso!”.


Fluxos secundários

> Se o usuário selecionar um cliente que não esteja cadastrado, o sistema deve gerar uma mensagem “Nenhum cliente encontrado!”.

**Edição**

Fluxo de eventos principal

> O cliente informa os dados necessários para a edição do Fornecedor:

> Pessoa física ou Jurídica;
> Nome;
> CPF ou CNPJ;
> Telefone Fixo e Celular'';
> Email'';
> Banco;
> Agência;
> Conta

''Campos não obrigatórios.

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema verifica se o cliente já foi cadastrado a partir de seu telefone                                           celular.
> O sistema atualiza os dados do cliente no banco de dados.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos, uma mensagem será exibida pedindo para que o usuário forneça o dado e o redireciona para o passo 1.
> No passo 3, se o cliente já se encontra cadastrado, o sistema exibe uma mensagem “Numero de CPF ou CNPJ cadastrado no –nome do Cliente que possui esse telefone-“ e redireciona o usuário para o passo 1.

## UC09 - Agendar Campanha Promocional ##

Prioridade: Essencial
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa agendar campanhas promocionais.
Pré-condição:

> O usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
> O sistema deve ter ao menos um promotor, um coordenador, um fornecedor e um cliente cadastrados.

Pós-condição: uma nova campanha promocional será agendada.

Fluxo de eventos principal

> O usuário informa os dados necessários para o agendamento da campanha:

> Nome;
> Local;
> Hora Inicio e hora fim'';
> Data inicio e data fim'';
> Cliente;
> Fornecedores;
> Categorias de produtos do fornecedor usadas'';
> Coordenadores;
> Promotores;
> Valor orçado;

''Campos não obrigatórios.

'**' Ambos tem que ser preenchidos**

> O sistema verifica se todos os campos foram preenchidos;
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos, uma mensagem será exibida pedindo para que o usuário forneça o dado e o redireciona para o passo 1.

## UC10 - Manter Campanha Promocional ##

Prioridade: Importante
Descrição do requisito funcional: O sistema deve permitir listar, visualizar, excluir e editar de todas as campanhas promocionais agendadas, a partir de um filtro ou não.
Pré-condições:

> O usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
> O sistema deve ter ao menos uma campanha agendada.

Pós-condição: O sistema irá listar as campanhas agendadas.


Fluxo de eventos principal

> O usuário pode fornecer um filtro para buscar a campanhas por nome, data, cliente.Se nada for fornecido no filtro o sistema executa a busca por todas as campanhas;
> O sistema faz a busca das campanhas no banco;
> O sistema lista os seguintes campos das campanhas agendadas:

> Nome;
> Cliente;
> Local;
> Data inicio e fim;

Fluxos secundários

> No passo 2, se o sistema não encontrar nenhuma campanha agendada, ele exibe uma mensagem informando “Nenhuma campanha foi encontrada”.


**Visualização**

Fluxo de eventos principal

> O usuário seleciona a campanha na listagem.
> O sistema lista os seguintes campos da campanha encontrada:

> Nome;
> Local;
> Hora Inicio e hora fim;
> Data inicio e data fim;
> Cliente;
> Fornecedores;
> Categorias de produtos do fornecedor que serão usados;
> Coordenadores;
> Promotores
> Valor orçado;
> Valor usado;

Fluxos secundários

> Se o usuário selecionar uma campanha promocional que não exista, o sistema deve gerar uma mensagem “Nenhuma campanha encontrada”.

**Exclusão**

Fluxo de eventos principal

> O usuário seleciona a campanha na listagem e seleciona a opção de excluir.
> O sistema deve excluir a campanha.
> O sistema gera uma mensagem informando “A campanha foi excluída com sucesso!”.


Fluxos secundários

> Se o usuário selecionar uma camapanha que não esteja cadastrada, o sistema deve gerar uma mensagem “Nenhuma campanha encontrada!”.

**Edição**

Fluxo de eventos principal

> O cliente informa os dados necessários para a edição da campanha:

> Nome;
> Local;
> Hora Inicio e hora fim'';
> Data inicio e data fim'**';
> Cliente;
> Fornecedor;
> Categorias de produtos do fornecedor que serão usados'****';
> Coordenadores;
> Promotores
> Valor orçado;
> Valor usado;**

''Campos não obrigatórios.

'**' Ambos tem que ser preenchidos**

> O sistema verifica se todos os campos obrigatórios foram preenchidos.
> O sistema atualiza os dados da campanha no banco de dados.
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 2, se algum dos campos obrigatórios não estiverem preenchidos, uma mensagem será exibida pedindo para que o usuário forneça o dado e o redireciona para o passo 1.

## UC11 - Agendar Compromisso ##

Prioridade: Desejável
Descrição do requisito funcional: O sistema deve permitir que o usuário administrador possa agendar tarefas na agenda.
Pré-condição: O usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: uma tarefa será agendada.


Fluxo de eventos principal

> O cliente informa os dados necessários para o agendamento da tarefa:

> Título da tarefa;
> Descrição;;
> Data;
> Hora

> O sistema salva a nova tarefa no banco de dados;
> O sistema verifica se já existe uma tarefa agendada para o mesmo horário;
> O sistema exibe uma mensagem de sucesso para o usuário.



Fluxos secundários

> No passo 3, se a tarefa já está agendada o sistema exibe uma mensagem e redireciona o usuário para o passo 1.

## UC12 - Enviar Lembrete por E-mail ##
Prioridade: Desejável
Descrição do requisito funcional: O sistema deve enviar um email para o usuário informando sobre a proximidade do evento ou da campanha.
Pré-condição: O usuário deve estar conectado e autenticado no sistema (ter efetuado o login).
Pós-condição: um email será enviado.


Fluxo de eventos principal

> Uma vez por semana, nas segundas-feiras, o sistema irá verificar a proximidade dos eventos da agenda ou da campanha, caso o evento esteja para acontecer dentro da semana em vigor, o sistema irá enviar um email informando do acontecimento dos eventos.



Fluxos secundários

> Antes do passo 1 o sistema verifica se algum lembrete já foi enviado naquele dia, se sim, ele não executa o passo.

## UC13 - Gerar Relatórios ##
Prioridade: Desejável
Descrição do requisito funcional: O sistema deve gerar relatórios que facilitem a tomada de decissões e possibilitem uma melhor visão do próprio negócio

Fluxo de eventos principal
> Cliente deve