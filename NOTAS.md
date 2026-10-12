1. Em que ficheiro estão as rotas da aplicação web?

As rotas da aplicação estão em 'routes/web.php'

2. Em que pasta estão as views? Como se chama a view da página de boas-vindas?

'resources/views'

'welcome.blade.php'

3. Em que ficheiro está o nome da base de dados? Porque é que esse ficheiro não vai para o GitHub?

'.env'

O '.env' nunca vai para o GitHub: já no .gitignore. Tem a APP_KEY e as credenciais da base de dados.

b2. Sem 'e()', /ola/<h1>Ana mostra "Ana" como título: o navegador interpreta o HTML. Um atacante pode enviar uma ligação com JavaScript (XSS). Com 'e()' aparece o texto "<h1>Ana".

b5. /dobro/abc devolve 404: a restrição whereNumber faz com que a rota não corresponda.