# byron.framework - Tutorial de uso

### 1. Configuração do GitLab:
1. Deve-se criar o projeto na pasta devida no gitlab (Portfólio/Wordpress).
2. Dar permissões para os devidos desenvolvedores.
3. Clonar o projeto na sua máquina.
4. Baixar os códigos desse framework e colar na pasta.
5. Atualizar se necessários o Wordpress e os plugins e dar um commit inicial na master.

### 2. Configuração do ambiente:
1. Fazer a configuração inicial do Wp-admin e definir um usuário e senha.
2. Ativar o plugin UpdraftPlus Backup, e realizar o backup do projeto.
3. Assim que realizado o Backup dar commit do banco.
4. Agora os outros desenvolvedores podem reproduzir o projeto restaurando o banco.

### 3. Plugins (descrição dos plugins já baixados no projeto):
**1. Advanced custom fields:** plugin para adicionar campos adicionais em páginas, post-type e afins.

**2. Redux framework:** framework para criar facilmente uma página administrativa para edição de conteúdo no Wordpress, recomendado utilizar para alterar informações que refletem em todo o projeto, como por exemplo, footer, header, menus ou ainda qualquer informações que achem relevantes separar em uma página específica para o cliente alterar.

**3. Under Construction:** plugin que gera uma página dizendo que o site está em construção, recomendo utilizar quando a hospedagem e o domínio já estão configurados.

**4. UpdraftPlus Backup:** plugin padrão para fazer backup do banco, plugins e afins. Configurar ele para não fazer backup do tema, pois o git já cuida disso.

**5. W3 Total Cache:** plugin para gerar cache das informações do site para melhorar a performance.

**6. WP Mail SMTP:** plugin para configurar o envio de email via protocolo SMTP.

**7. WPForms Lite:** plugin que cria formulários de contato.

**8. Yoast SEO:** plugin padrão para melhorar o SEO do site, realizar o setup completo dele, lembrando de colocar as palavras-chave, descrição do site e todas configuraçẽos que ele solicita.

### 4. Codando

No projeto já existem a maioria dos arquivos necessários no Wordpress, existe também na documentação do Wordpress a hierarquia de arquivos que ele utiliza no desenvolvimento de temas.

Já existe uma pequena explicação do que deve ser inserido em cada arquivo, se não for utilizar algum arquivo pode deletar, por exemplo, sidebar, search-form e outros.

No arquivo functions.php já existe algumas configurações que a maioria do projeto necessita. Foi inserido o materialize, fontawesome, jquery e o slick (plugin de carrossel).

Dentro da pasta assets contém os arquivos de css, javascript, fontes e imagens, favor manter a organização dos arquivos. Na pasta inc contém os arquivos do Redux, caso não use o plugin Redux eles podem ser deletados. Caso use, colocar no arquivo theme-customizer-redux-sections.php as seções e campos do redux. No arquivo theme-customizer-redux.php tem as configurações padrões do redux, alterar somente a variavel dev-mode para false quando colocar o projeto online.

```
67 // Set a different name for your global variable other than the opt_name
68 // Inserir: alterar valor para false quando enviar for hospedar
69 'dev_mode'             => false,
70 // Show the time the page took to load, etc
```