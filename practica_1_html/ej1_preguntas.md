# Ejercitación 1

## 1. ¿Qué es HTML, cuándo fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML (HyperText Markup Language) es el lenguaje de marcado estándar utilizado para crear y estructurar páginas web. Fue creado por Tim Berners-Lee en 1991 como una forma de compartir documentos científicos entre universidades a través de la red.

### Versiones principales de HTML:

- **HTML 1.0 (1991):** Primera versión, muy básica.
- **HTML 2.0 (1995):** Estandariza etiquetas comunes; es retrocompatible.
- **HTML 3.2 (1997):** Introduce estilos, scripts y soporte para tablas.
- **HTML 4.01 (1999):** Mejora accesibilidad y estructura; se divide en tres variantes (Strict, Transitional, Frameset).
- **XHTML 1.0 (2000):** Variante de HTML 4.01 con reglas más estrictas derivadas de XML.
- **HTML5 (2014):** Versión actual, incluye soporte multimedia nativo (audio, video), elementos semánticos, APIs y mejoras de accesibilidad.

---

## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

El W3C (World Wide Web Consortium) recomienda seguir estos principios básicos:

- **Accesibilidad:** Los documentos deben ser utilizables por personas con diversas capacidades, incluyendo aquellas con discapacidades.
- **Separación de contenido y presentación:** El contenido debe estar en HTML, y la presentación en CSS.
- **Uso correcto de la semántica:** Usar las etiquetas adecuadas para el tipo de contenido (por ejemplo, `<article>`, `<nav>`, `<header>`, etc.).
- **Estructura lógica:** El documento debe tener una jerarquía clara, usando títulos y secciones.
- **Compatibilidad:** Seguir los estándares para que las páginas funcionen en múltiples navegadores y dispositivos.

---

## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

- **Desaprobado (deprecated):** Un elemento o atributo está desaprobado cuando ya no se recomienda su uso, pero aún es compatible por razones de retrocompatibilidad. Podría eliminarse en futuras versiones. Ejemplo: `<font>`.

- **Obsoleto (obsolete):** Un elemento o atributo obsoleto ya no se admite y no debería usarse. Es posible que los navegadores lo ignoren completamente. Ejemplo: `<applet>`.

---

## 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

**DTD** (Document Type Definition) es una declaración que define la estructura y las reglas que debe seguir un documento HTML para ser considerado válido por un validador. Especifica qué elementos y atributos son permitidos.

HTML 4.01 contempla tres tipos de DTD:

1. **Strict DTD:** Solo permite el uso de elementos y atributos recomendados. No permite elementos de presentación (por ejemplo, `<font>`).
2. **Transitional DTD:** Permite elementos presentacionales por compatibilidad con versiones anteriores.
3. **Frameset DTD:** Se utiliza cuando el documento incluye marcos (`<frameset>`).

---

## 5. ¿Qué son los metadatos y cómo se especifican en HTML?

Los **metadatos** son información sobre el documento que no se muestra directamente al usuario, pero que los navegadores, motores de búsqueda y redes sociales pueden utilizar.

---

# Ejercitación 2

## 2.a) Comentario HTML

```html
<!-- Código controlado el día 12/08/2009 -->
```
- **Sección:** Puede colocarse en cualquier parte del documento HTML.
- **Efecto:** No tiene efecto, se usa para dejar notas o aclaraciones, no se muestra en el navegador.
- **Etiqueta:** `<!-- ... -->`.

## 2.b) Elemento `<div>`
```html
<div id="bloque1">Contenido del bloque1</div>
```
- **Sección:** `<body>`.
- **Efecto:** Crea un contenedor genérico (bloque) con texto.
- **Elementos/Atributos:**
	- **Etiquetas:** `<div>` (apertura) y `</div>` (cierre).
	- **Atributo:** `id="bloque1"`.
---

## 2.c) Elemento `<img>`
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />
```
- **Sección:** `<body>`.
- **Efecto:** Muestra una imagen.
- **Etiqueta:**  `<img />` .
- **Atributos:**
	- **`src=""`:** URL de la imagen, obligatorio.
	- **`alt="lugar imagen"`:** Texto alternativo, obligatorio para accesibilidad.
	- **`id="im1", name="im1"`:** identificadores.
	- **`width="32", height="32"`:** dimensiones en píxeles.
	- **`longdesc="detalles.htm"`:** descripción larga.

---
## 2.d) Metadatos  `<meta>`
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```
- **Sección:** `<head>`.
- **Efecto:** La primera línea indica palabras clave para buscadores, la segunda indica la fecha de expiración del contenido.
- **Atributos:**
	- **`name="keywords", content="casa, compra..."`**
	- **`http-equiv="expires", content="16-Sep-2019..."`:** Para el cache.
	- **`lang="es"`:** idioma del contenido.

---
## 2.e) Enlace `<a>`
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>
```
- **Sección:** `<body>`.
- **Efecto:** Crea un hipervínculo a otro documento.
- **Etiquetas:** `<div>` (apertura) y `</div>` (cierre).
- **Atributos:**
	- **`href="http://..."`** : URL destino, obligatorio.
	- **`type="text/html"`:** tipo de recurso.
	- **`hreflang="es"`:** idioma del recurso vinculado.
	- **`charset="utf-8"`:** codificación del recurso.
	- **`rel="help"`:** relación con el documento actual.

---
## 2.f) Tabla `<table>`
```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
<caption align="top"> Título </caption>
	<tr>
		<th scope="col">&nbsp;</th>
		<th scope="col">A</th>
		<th scope="col">B</th>
		<th scope="col">C</th>
	</tr>
	<tr>
		<th scope="row">1º</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
	</tr>
	<tr>
		<th scope="row">2º</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
	</tr>
</table>
```
- **Sección:** `<body>`.
- **Efecto:** Crea una tabla.
- **Elementos/Atributos:**
	- **Etiquetas:**
		- **`<table>, </table>`**: Contenedor de la tabla.
		- **`<caption>, </caption>`**: Título de la tabla.
		- **`<tr>, </tr>`**: Filas.
		- **`<th>, </th>`**: Celdas de cabecera.
		- **`<td>, </td>`**: Celdas de datos.
	- **Atributos:**
		- **`width="200"`**: Ancho de la tabla en píxeles, obsoleto en HTML5.
		- **`summary="..."`**: Descripción para accesibilidad, obsoleto en HTML5.
		- **`align="top"`**: Alineación del título, obsoleto en HTML5.
		- **`scope="col"`**: Indica si la cabecera es para columna/fila.
		- **`&nbsp;`**: Espacio en blanco.


# Ejercitación 3
## 3.a)
```html
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
```
Enlace a Google que se abre en la misma pestaña.

```html
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
```
Enlace a Google que se abre en una nueva pestaña.

```html
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
```
Enlace con metadatos avanzados.

```html
<a href="#">Click aquí para ir a Google</a>
```
Enlace que no navega.

```html
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>
```
Enlace interno que desplaza a la sección con `id="arriba"`.

## 3.b)
```html
<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p>
```
Imagen y enlace como elementos separados.

```html
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p>
```
Imagen es clickeable (enlace envuelve solo la imagen).

```html
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p>
```
Imagen y texto son clickeables (enlace envuelve ambos).

```html
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>
```
Imagen y texto son enlaces independientes (redundante).

## 3.c)
```html
<ul>
	<li>xxx</li>
	<li>yyy</li>
	<li>zzz</li>
</ul>
```
Lista no ordenada (viñetas).

```html
<ol>
	<li>xxx</li>
	<li>yyy</li>
	<li>zzz</li>
</ol>
```
Lista ordenada (números).

```html
<ol>
  <li>xxx</li>
</ol>
<ol>
  <li value="2">yyy</li>
</ol>
<ol>
  <li value="3">zzz</li>
</ol>
```
Se simula continuidad manual entre listas ordenadas.

```html
<blockquote>
  <p>1. xxx<br />2. yyy<br />3. zzz</p>
</blockquote>
```
Simula una lista numerada, pero no es una lista real. Tiene formato de cita.

## 3.d)
```html
<table border="1" width="300">
  <tr>
    <th>Columna 1</th>
    <th>Columna 2</th>
  </tr>
  <tr>
    <td>Celda 1</td>
    <td>Celda 2</td>
  </tr>
</table>
```
Usa `<th>` para cabeceras (mejor accesibilidad).

```html
<table border="1" width="300">
  <tr>
    <td><div align="center"><strong>Columna1</strong></div></td>
    <td><div align="center"><strong>Columna2</strong></div></td>
  </tr>
</table>
```
Usa `<th> y align="center"` (obsoleto en HTML5).

## 3.e)
```html
<table width="200">
  <caption>Título</caption>
  <tr>
    <td bgcolor="#dddddd">&nbsp;</td>
    <td bgcolor="#dddddd">&nbsp;</td>
  </tr>
</table>
```
Usa `<caption>` para título semántico.

```html
<table width="200">
  <tr>
    <td colspan="3"><div align="center">Título</div></td>
  </tr>
</table>
```
Simula título con `<colspan>` (menos accesible).

## 3.f)
```html
<table width="200">
	<tr>
		<td colspan="3"><div align="center">Título</div></td>
	</tr>
	<tr>
		<td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
		<td bgcolor="#dddddd">&nbsp </td>
		<td bgcolor="#dddddd">&nbsp </td>
	</tr>
	<tr>
		<td bgcolor="#dddddd">&nbsp </td>
		<td bgcolor="#dddddd">&nbsp </td>
	</tr>
</table>
```
Agrupa 3 columnas con el título. La primera celda ocupa dos filas hacia abajo.

```html
<table width="200">
	<tr>
		<td colspan="3"><div align="center">Título</div></td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#dddddd">&nbsp;</td>
		<td bgcolor="#dddddd">&nbsp </td>
		<td bgcolor="#dddddd">&nbsp </td>
	</tr>
	<tr>
		<td bgcolor="#dddddd">&nbsp </td>
		<td bgcolor="#dddddd">&nbsp </td>
	</tr>
</table>
```
Agrupa 2 columnas horizontalmente. Se combina colspan con celdas normales.

## 3.g)
```html
<table width="200" border="1">
	<tr>
		<td colspan="3"><div align="center">Título</div></td>
	</tr>
	<tr>
		<td colspan="2"rowspan="2">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="50%">&nbsp;</td>
	</tr>
</table>
```
Usa `colspan="2"` y `rowspan="2"` en la misma celda, que abarca dos filas y dos columnas.

```html
<table width="200" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2"><div align="center">Título</div></td>
	</tr>
	<tr>
		<td rowspan="2">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="50%">&nbsp;</td>
	</tr>
</table>
```
Incluye propiedades de espaciado `cellpadding="0"` y `cellspacing="0"` para controlar márgenes internos y externos.

## 3.h)
```html
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
  <fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu1" name="usu1" value="xxx"/><br />
    Clave: <input type="password" id="clave1" name="clave1" value="xxx"/>
  </fieldset>
  <input type="submit" id="boton1" name="boton1" value="Enviar"/>
</form>
```
Formulario que postea llamando a procesar.php.

```html
<form id="form2" name="form2" action="" method="get" target="_blank">
LOGIN<br />
<label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
<label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
<input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
```
Formulario que trae informacion, en este caso no trae por estar vacia la llamada.

```html
<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="post" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu3" name="usu3" /><br />
Clave: <input type="password" id="clave3" name="clave3" />
</fieldset>
<input type="reset" id="boton3" name="boton3" value=
"Enviar" />
</form>
```
Formulario que envia por correo con metodo post.

## 3.i)
```html
<label>Botón 1
<button type="button" name="boton1" id="boton1">
<img src="logo.jpg" alt="Botón con imagen " width="30" height="20" /><br />
<b>CLICK AQUÍ</b></button></label>
```
Permite contenido mixto (imagen + texto).

```html
<label>Botón 2
<input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```
Solo acepta texto.

## 3.j)
```html
<p><label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion" id="Y" value="Y" />Y</label></p>
```
Todos los botones tienen el mismo name, por lo tanto se comportan como una sola opción a elegir.

```html
<p><label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label></p>
```
Tienen nombres distintos, por lo tanto se pueden seleccionar ambos a la vez. No deseado.

## 3.k)
```html
<select name="lista">
<optgroup label="Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label="Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
```
Lista desplegable de seleccion unica.

```html
<select name="lista[]" multiple="multiple">
<optgroup label=" Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label=" Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
```
Lista desplegable de seleccion multiple.
