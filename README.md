## Website Desafio (Upinside - Laravel Developer)

#### O desafio consiste em criar um website dinâmico utilizando o framework.

**Pacotes utilizados:**
- SEO -> [coffeecode/optimizer](https://packagist.org/packages/coffeecode/optimizer).
- Cropper ->  [coffeecode/cropper](https://packagist.org/packages/coffeecode/cropper).

**Serviço de disparo de e-mail:**
- Mailtrap -> [mailtrap.io](https://mailtrap.io/).

#### Sobre o curso e seus módulos

- (KNOWLEDGE) Ensina sobre todo o potêncial do framework com um ponto de partida otimizado para seus projetos.
- (BEHAVIOR) Cada particularidade do Laravel e a grande maioria dos recursos que ele nos oferece, além de seguir as melhores práticas.
- (DEVELOPMENT) Como não basta simplesmente aprender a usar o framework, nos envolve a criar projetos práticos.

#### Como utilizar este projeto
- Faça uma cópia do arquivo **.env.example**, posteriormente renomeie-o para somente **.env**; 
- Crie um banco de dados e parametrize o arquivo .env com o devido acesso ao BD;
- Execute o comando ```php artisan migrate``` depois ```php artisan db:seed```;
- Dentro de **storage/app/public/** crie uma pasta chamada **posts**, nessa pasta coloque ao menos 6 imagens (.jpg ou .png);
*Obs: coloque o nome dos arquivos seguindo este modelo: 1.jpg, 2.png, 3.jpg, etc*;
- Abra o banco de dados para este projeto, selecione a tabela **posts** na coluna **cover** coloque o diretório/arquivo para cada registro com sua respectiva imagem, exemplo: **/posts/1.jpg**

#### Licença do framework

O framework Laravel é *open-source* lincenciado por [MIT license](https://opensource.org/licenses/MIT).


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>