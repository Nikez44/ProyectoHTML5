<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>UnBlog</title>
    <link rel="stylesheet" href="styles/index.css"/>
</head>
<body>

    <?php include 'partials/_header.html' ?>

    <div id="content">
        <header id="index_header">
            <h1 id="index_title">Post Recientes</h1>

            <div id="search_input">
                <input type="text" placeholder="Buscar"/>
            </div>

            <div class='clear'></div>
        </header>

        <aside class="left">
            <section>
                <h2>Entradas</h2>

                <table>
                    <tr>
                        <td><a href="#">Enero 2014</a></td>
                    </tr>
                    <tr>
                        <td>Febrero 2014</td>
                    </tr>
                    <tr>
                        <td>Marzo 2014</td>
                    </tr>
                    <tr>
                        <td>Abril 2014</td>
                    </tr>
                    <tr>
                        <td>Mayo 2014</td>
                    </tr>
                    <tr>
                        <td>Junio 2014</td>
                    </tr>
                    <tr>
                        <td>Julio 2014</td>
                    </tr>
                    <tr>
                        <td>Agosto 2014</td>
                    </tr>
                    <tr>
                        <td>Septiembre 2014</td>
                    </tr>
                    <tr>
                        <td>Octubre 2014</td>
                    </tr>
                </table>
            </section>
        </aside>

        <section class="center">
            <article>
                <header id="header_article">
                    <div class="date">
                        <div class="entry-date">
                            <div class="number">23</div>
                            <div class="month">JAN</div>
                        </div>
                    </div>
                    <div id="bottomBlue">
                        <hgroup>
                            <h2 class="titleArticle">Lorem Ipsum</h2>
                            <h3>By Author</h3>
                        </hgroup>
                    </div>
                </header>
                <p>Ipsum lurum hurum turum ipsum lurum hurum turum ipsum lurum hurum turum ipsum
                    lurum hurum turum.</p>
                <p>Ipsum lurum hurum turum ipsum lurum hurum turum ipsum lurum hurum turum ipsum
                    lurum hurum turum.</p>
                <p>Ipsum lurum hurum turum ipsum lurum hurum turum ipsum lurum hurum turum ipsum
                    lurum hurum turum.</p>
            </article>

            <article>
                <h2>News Article</h2>
                <p>Ipsum lurum hurum turum ipsum lurum hurum turum ipsum lurum hurum turum ipsum
                    lurum hurum turum.</p>
                <p>Ipsum lurum hurum turum ipsum lurum hurum turum ipsum lurum hurum turum ipsum
                    lurum hurum turum.</p>
                <p>Ipsum lurum hurum turum ipsum lurum hurum turum ipsum lurum hurum turum ipsum
                    lurum hurum turum.</p>
            </article>
        </section>

        <aside class="right">
            <section>
                <h2>Noticias</h2>
            </section>
        </aside>
    </div>
    <div class='clear'></div>
   <?php include 'partials/_footer.html' ?>

</body>
</html>