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

# Desafio PL03
A rota '/eventos/tipo/{tipo}' não entra em conflito com o '/eventos/{id}', porque a primeira tem três segmentos ('eventos', 'tipo' e o valor de '{tipo}'), enquanto a segunda tem dois ('eventos' e o valor de '{id}'). Além disso, '{id}' só aceita números devido a 'whereNumber('id')'.

# Desafio PL04
A diferença entre o @push e o @stack é que o @push serve para injetar blocos de código, como scripts do JavaScript e de folhas de estilo do CSS e o @stack serve literalmente para criar um espaço reservado no layout principal onde as outras páginas ou componentes podem injetar código dinamicamente. Enquanto que o @section serve para definir um bloco de conteúdo dinâmico a ser injetado num layout principal e o @yield serve para criar simplesmente espaços reservados num layout principal onde o conteúdo específico de outras páginas será injetado. Em termos de uso, o @push usaria para injetar um bloco de código da minha folha de estilos e configurar as cores, fontes e classes, o @stack para criar um espaço reservado no layout principal da minha página, o @section para definir um bloco de conteúdo para a minha página do site e até definindo o título da página e o @yield para definir a estrutura base do site, com o nome da secção dentro dos parenteses do @yield nos locais que mudam de página para página.

e1. Ao mudar o título do evento 3, vi na lista dos eventos e o título na página de detalhes, o “<script>alert(“XSS”)</script>” juntamente com o título do evento e ficou nesta maneira e a razão de porque é que está assim escrito é que era para mostrar um alerta através de um script junto com o título do evento e ficou assim misturado, o script não deu.

e2. Ao mudar o {{ $evento[‘titulo’] }} para {!! $evento[‘titulo’] !!}, ficou tudo normal e ao clicar no título, redirecionou-me para a página de detalhes do evento.