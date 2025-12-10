
<!-- Animated Divider -->
<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif">

<!-- Header -->
<div align="center">
  <h1>📌 CRUD de Tareas – Laravel + API Externa</h1>
  <h3>Aplicación CRUD que consume una API externa usando Laravel + Bootstrap</h3>
</div>

<!-- Animated Divider -->
<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif">

<!-- About the Project -->
<div align="center">
  <h2>📘 Descripción del Proyecto</h2>
</div>

<p align="center">
  Este proyecto es una aplicación en <strong>Laravel</strong> que permite gestionar tareas mediante un 
  <strong>CRUD completo</strong>, consumiendo una <strong>API externa</strong> ubicada en otro repositorio.
  Todo el frontend está construido con <strong>Blade</strong> y estilizado con <strong>Bootstrap 5</strong>.
</p>

<p align="center">
  Para funcionar correctamente, el proyecto requiere montar también la API, la cual debe ejecutarse en otro puerto.
</p>

<!-- Tech Stack -->
<div align="center">
  <h2>🛠️ Tecnologías utilizadas</h2>
</div>

<p align="center">
  <img src="https://skillicons.dev/icons?i=php,laravel,bootstrap,mysql,git&perline=6" />
</p>

<ul>
  <li>PHP</li>
  <li>Laravel</li>
  <li>Bootstrap</li>
  <li>Guzzle</li>
  <li>Composer</li>
  <li>XAMPP / MySQL</li>
</ul>

<!-- Installation -->
<div align="center">
  <h2>⚙️ Instalación del Proyecto</h2>
</div>

<h3>📂 1. Clonar el repositorio</h3>

```bash
git clone https://github.com/jdiegu/api-cliente.git
cd api-cliente
```

<h3>📦 2. Instalar dependencias</h3>

```bash
composer install
```

<h3>⚙️ 3. Configure el archivo <code>.env</code></h3>

```bash
cp .env.example .env
```

Agregar la URL base de la API:

```env
URL_SERVER_API=http://localhost:8000/api/tareas
```

<h3>▶️ 4. Ejecutar el servidor</h3>

```bash
php artisan serve --port=8080
```

---

<!-- API Setup -->

<div align="center">
  <h2>🔌 Instalación de la API (Repositorio externo)</h2>
</div>

<p>La API debe instalarse y ejecutarse por separado. Requisitos:</p>

[API Tareas Laravel](https://github.com/jdiegu/api-laravel)

<ul>
  <li>PHP</li>
  <li>Composer</li>
  <li>XAMPP o MySQL/MariaDB</li>
</ul>

```bash
git clone https://github.com/jdiegu/api-laravel.git
cd api-tareas
composer install
cp .env.example .env
```

Configura la base de datos y luego:

```bash
php artisan migrate
php artisan serve --port=8080
```

---

<!-- Endpoints -->

<div align="center">
  <h2>📡 Endpoints que Consume el CRUD</h2>
</div>

<table>
  <tr>
    <th>Acción</th>
    <th>Método</th>
    <th>Endpoint</th>
  </tr>
  <tr>
    <td>Listar tareas</td>
    <td>GET</td>
    <td>/tareas</td>
  </tr>
  <tr>
    <td>Crear tarea</td>
    <td>POST</td>
    <td>/tareas</td>
  </tr>
  <tr>
    <td>Actualizar tarea</td>
    <td>PUT</td>
    <td>/tareas/{id}</td>
  </tr>
  <tr>
    <td>Eliminar tarea</td>
    <td>DELETE</td>
    <td>/tareas/{id}</td>
  </tr>
</table>

---

<!-- Recommendations -->

<div align="center">
  <h2>💡 Recomendaciones</h2>
</div>

<ul>
  <li>Ejecuta el <strong>Cliente</strong> y la <strong>API</strong> en <strong>puertos distintos</strong>:</li>
  <ul>
    <li>Cliente: <code>http://localhost:8080</code></li>
    <li>API: <code>http://localhost:8000</code></li>
  </ul>
  <li>Asegúrate de que la API esté levantada antes de usar el CRUD.</li>
  <li>Verifica las variables en los archivos <code>.env</code>.</li>
  <li>Activa Apache y MySQL si usas XAMPP.</li>
  <li>Ejecuta migraciones de la API correctamente.</li>

</ul>


---

<!-- Contact -->

<div align="center">
  <h2>📬 Contacto</h2>
</div>

<p align="center">
  <a href="https://github.com/jdiegu" target="_blank">
    <img src="https://skillicons.dev/icons?i=github" height="50" />
  </a>
  <br>
</p>

<!-- Footer Divider -->

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif">

<p align="center">
  <em>Proyecto desarrollado por <strong> Diego Morales</strong></em>
</p>


