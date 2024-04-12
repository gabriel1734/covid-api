# covid-api

## Exercício de Desenvolvimento

Este projeto consiste na construção de um sistema de interface web que permite aos usuários obter informações sobre os casos de mortes por Covid-19. Os dados são obtidos por meio da API-Covid-19 disponível no servidor da Kidopi. É possível obter dados do número de casos confirmados e mortes de vários países afetados pela COVID-19.

## API-Covid-19:

- **Método:** GET
- **URL(API-Covid-19):** [https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Brazil](https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Brazil)

**Retorno:**

```json
{"0":{"ProvinciaEstado":"Acre","Pais":"Brazil","Confirmados":149378,"Mortos":2027},"1":{"ProvinciaEstado":"Alagoas","Pais":"Brazil","Confirmados":320552,"Mortos":7118}}
```

## API-Países-Disponíveis:

- **Método:** GET
- **URL:** [https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1](https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1)

**Retorno:**

```json
{"0":"Afghanistan","1":"Albania","2":"Algeria","3":"Andorra","4":"Angola","5":"Antarctica"...}
```

## Observações:

1. Os nomes dos países estão em inglês.
2. Alguns países retornam apenas o valor total de casos confirmados e de mortes no país inteiro, sem os dados por estado.
3. A API-Covid-19 retorna os dados de todos os estados do país, você pode mudar o nome do país no final do link para o nome do país que deseja pegar os dados.
4. A API-Países-Disponíveis retorna o nome de todos os países disponíveis para obter os dados.

## Arquitetura MVC (Model-View-Controller)

O projeto utiliza o padrão de arquitetura MVC (Model-View-Controller) para organizar e separar as responsabilidades das diferentes partes da aplicação. Abaixo está uma breve descrição de cada componente do padrão MVC:

- **Model (Modelo):** Representa a estrutura de dados da aplicação e lida com a lógica de negócios. No contexto deste projeto, os modelos são responsáveis por acessar o banco de dados, recuperar e manipular os dados relacionados aos países e aos acessos à API-Covid-19.
  
  - > Encontrado em `Application/models`

- **View (Visualização):** É responsável pela apresentação dos dados aos usuários. As views neste projeto são arquivos HTML que exibem os dados da API-Covid-19 de forma formatada e amigável para o usuário final.
   - > Encontrado em `Application/views
 `
- **Controller (Controlador):** Atua como intermediário entre o modelo e a visualização. Controladores manipulam as solicitações do usuário, processam os dados recebidos do modelo e passam as informações relevantes para as views. Neste projeto, os controladores são responsáveis por rotear as solicitações do usuário para as ações apropriadas, como acessar dados da API-Covid-19, armazenar acessos no banco de dados e exibir as visualizações corretas.

  -  > Encontrado em `Application/controllers`

O uso do padrão MVC ajuda a separar as preocupações da aplicação, tornando-a mais organizada, modular e fácil de manter e escalar. Cada componente tem sua responsabilidade claramente definida, facilitando a colaboração entre membros da equipe e a compreensão do código. Isso também permite uma maior reutilização de código e uma melhor gerência de mudanças ao longo do ciclo de vida do projeto.

## Diretório "core"

O diretório "core" contém os componentes principais da aplicação, responsáveis por fornecer funcionalidades essenciais para o funcionamento do sistema. Abaixo estão os principais componentes encontrados neste diretório:

- **App.php:** Este arquivo contém a classe principal `App`, que é responsável por inicializar e controlar o fluxo da aplicação. Ele gerencia o roteamento das solicitações do usuário para os controladores apropriados, verifica se os arquivos e classes necessários estão presentes e trata casos de página não encontrada.

- **Controller.php:** O arquivo `Controller.php` define a classe base `Controller`, da qual todos os controladores da aplicação herdam. Ele fornece métodos úteis para carregar views, models e lidar com casos de página não encontrada.

- **Model.php:** O arquivo `Database.php` contém a classe base `Model`, que encapsula funcionalidades comuns relacionadas ao acesso ao banco de dados utilizando o `PDO`. Ele fornece métodos para realizar consultas SQL e inserir, atualizar e excluir registros, bem como outras operações relacionadas ao banco de dados.

Esses componentes centrais desempenham um papel fundamental na estrutura e no funcionamento da aplicação, fornecendo uma base sólida para o desenvolvimento de novas funcionalidades e a manutenção do código ao longo do tempo. Eles seguem os princípios do padrão de arquitetura MVC (Model-View-Controller) para garantir uma separação clara de preocupações e uma estrutura de código organizada e modular.

**Link do GitHub:** [https://github.com/seu-usuario/covid-api](https://github.com/seu-usuario/covid-api)


## Setup de Desenvolvimento

Siga estas instruções para configurar e executar o projeto em seu ambiente de desenvolvimento local.

### Pré-requisitos

Certifique-se de ter os seguintes softwares instalados em seu sistema:

- PHP7.4 ou superior
- MySQL (ou outro banco de dados compatível)
- Um servidor web (por exemplo, Apache)
- Um navegador web moderno

### Instalação

1. Clone o repositório do GitHub para o seu ambiente local:

    ```bash
    git clone https://github.com/seu-usuario/covid-api.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd covid-api
    ```

3. Importe o arquivo de banco de dados fornecido em (`Application/Database/database.sql`) para criar as tabelas necessárias no MySQL.

4. Configure as credenciais do banco de dados editando o arquivo `.ENV.example` na raiz do projeto:

    ```env
    [MySQL]
    DB_HOST     = "localhost"
    DB_DATABASE = "nome-do-banco-de-dados" 
    DB_USER     = "seu-usuario"
    DB_PASS     = "sua-senha"
    DB_PORT     = porta
    ```
    Substitua `"localhost"`, `"seu-usuario"`, `"sua-senha"`, `porta` e `"nome-do-banco-de-dados"` pelos valores correspondentes do seu ambiente.
    Em seguida renomeie o arquivo `.ENV.example` para `.ENV`.


### Executando o Projeto

1. Navegue até a pasta `/public` do projeto:

    ```bash
    cd public
    ```

2. Inicie o servidor embutido do PHP:

    ```bash
    php -S localhost:8000
    ```

3. Abra seu navegador web e navegue até:

    ```
    http://localhost:8000
    ```

4. A página inicial do projeto deve ser exibida. Agora você pode usar a interface web para acessar os dados da API-Covid-19, armazenar acessos ao banco de dados e explorar as funcionalidades do projeto.

### Observações

- Certifique-se de que o PHP esteja configurado corretamente em seu ambiente local para que o servidor embutido funcione corretamente.
- Se encontrar algum problema durante a configuração ou execução do projeto, consulte a documentação do PHP ou procure ajuda online.
- Este projeto foi desenvolvido e testado em um ambiente de desenvolvimento local. Algumas configurações podem ser necessárias para implantar em um ambiente de produção.

### Setup Apache

### 1. Configuração do Apache

1. **Crie um Virtual Host:**

   Edite o arquivo de configuração do Apache (`httpd.conf` ou um arquivo de configuração separado, dependendo da sua distribuição) para adicionar um novo virtual host para o seu projeto. Por exemplo:

   ```apache
   <VirtualHost *:80>
       ServerName seu-site.local
       DocumentRoot /caminho/para/o/projeto/public
       <Directory /caminho/para/o/projeto/public>
           Options Indexes FollowSymLinks MultiViews
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

   Certifique-se de substituir `seu-site.local` pelo nome de domínio que deseja usar e `/caminho/para/o/projeto/public` pelo caminho absoluto para a pasta `public` do seu projeto.

2. **Habilitar o módulo Rewrite:**

   Verifique se o módulo `mod_rewrite` está habilitado no Apache. Você pode habilitá-lo usando o comando:

   ```bash
   sudo a2enmod rewrite
   ```

   E então reinicie o Apache para aplicar as alterações:

   ```bash
   sudo systemctl restart apache2
   ```

### 2. Configuração do Banco de Dados

1. **Importe o Banco de Dados:**

   Use o cliente MySQL para importar o arquivo de banco de dados fornecido (`database.sql`). Você pode fazer isso com o comando:

   ```bash
   mysql -u seu-usuario -p nome-do-banco-de-dados < caminho/para/o/database.sql
   ```

   Substitua `seu-usuario` pelo seu usuário do MySQL e `nome-do-banco-de-dados` pelo nome do banco de dados em que deseja importar os dados.

### 3. Acesso ao Projeto

Após configurar o Apache e o banco de dados, você pode acessar o seu projeto digitando o nome do domínio definido no Virtual Host no navegador:

```
http://seu-site.local
```

Isso deve exibir a página inicial do seu projeto.

### Observações

- Certifique-se de que o Apache esteja configurado corretamente para processar arquivos PHP. Se necessário, instale o PHP e os módulos necessários para o Apache.
- Certifique-se de que as permissões de arquivo e pasta estejam configuradas corretamente para que o Apache possa acessar os arquivos do seu projeto.
- Consulte a documentação específica do Apache e da sua distribuição Linux para obter mais detalhes sobre a configuração do Apache. 