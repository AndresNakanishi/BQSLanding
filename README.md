# BQSLanding

Landing page para la Pretemporada 2018.

## PHP - Estructura

index.php: Centraliza las vistas y maneja el formulario. También almacena algunas variables.

views/head.view.php: Tiene todo el HTML del HEAD de la Web.

views/body.view.php: Tiene el contenido de la Web. (Incluye el Modal).

views/footer.view.php: Tiene el footer de la Web.

### HTML

Para el manejo de clases dentro del mismo HTML se utiliza la metodología BEM (Bloque-Elemento-Modificador), con la respectiva marca.

### CSS

PostCSS: Gulp, Nested, Import, CSSWring, CSSNext, MQPacker y BrowserSync. Todos compatibles con CSS.

Librerías de NPM: gulp-postcss, postcss-nested, postcss-import, csswring, postcss-cssnext, css-mqpacker, browser-sync.

### Breakdown CSS 

* [Gulp](https://gulpjs.com/) - Automatizador de tareas en Javascript.
* [Nested](https://github.com/postcss/postcss-nested) - Dependencia para manejar anidamiento en PostCSS.
* [Import](https://github.com/postcss/postcss-import) - Dependencia para importar varios CSS desde PostCSS.
* [CSSNext](http://cssnext.io/features/) - Dependencia que permite utilizar sintaxis moderna en CSS, como por ejemplo, incluir variables.
* [MQPacker](https://github.com/hail2u/node-css-mqpacker) - Dependencia para combinar los media queries en el fichero final.
* [BrowserSync](https://www.browsersync.io/) - Dependencia para similar a Express.

## Autores

* **Andrés Nakanishi**
