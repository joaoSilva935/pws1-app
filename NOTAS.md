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

d4. O código de estado do '/eventos/3', mostra o terceiro evento da lista "Hackathon ISLA 24h" e com os detalhes do evento, o '/eventos/99', redireciona para uma página de erro 404 "404 - Página não encontrada (A página que estás à procura não existe.)" e o '/eventos/abc' para a mesma página do '/eventos/99'. O '/eventos/abc' não entra mesmo em função, porque tem que ser pelo id, que são números, em vez das letras. 

f1. se a rota /eventos/{id} não tivesse whereNumber('id') e estivesse escrita
antes de /eventos/proximos, o que acontecia ao abrir /eventos/proximos? Porquê?
--> Ao abrir '/eventos/proximos' com o whereNumber('id') faz com que rota segue pelo id dos próximos eventos que irão acontecer e se não estivesse em '/eventos/{id}' dava 404, porque sem o whereNumber('id') não mostrava.

desafioAutónomo. A rota '/eventos/tipo/{tipo}' não entra em conflito com o '/eventos/{id}', porque só segue pelo nome do tipo de evento (Mostra o evento, nome, data e vaga) e enquanto que o {id} só segue pelo número do evento e com todos os detalhes.