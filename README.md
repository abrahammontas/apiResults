## Resumen

Este proyecto busca poner en práctica los conocimientos adquiridos en la materia (PHP - Back-end con Tecnologías de Libre Distribución).

Siendo esta práctica la segunda de dicha materia, pretende familiarizar al alumno con la especificación y el desarrollo de una API REST.

Partiendo de un proyecto creado y previamente editado por el profesor (Francisco Javier Gil Rubio), el cual pone en práctica un CRUD de usuarios __casi__ completo, al cual solo le hacia falta el codigo de implementación del *POST* y el *PUT*.

Debíamos poner en práctica lo siguiente:

   * Implementar los métodos POST y PUT de los usuarios
   * Crear los metodos GET, CGET, POST, UPDATE, DELETE y OPTION en los resultados
   * Crear los comentarios para la librería [Swagger](http://swagger.io)
   * Crear un archivo .md para la explicación del proyecto

## Referencia del API

#### Users
Implementación de los métodos que faltaban por desarrollar (POST y PUT).

```
{
  "id": 1,
  "username": "abrahammontas",
  "email": "abrahammontas@gmail.com",
  "enabled": true,
  "token": "asjhzxigjagaslkgjq3456sjlgzlxcjg"
}
```

#### **- POST:**

Creación de un usuario mediante el método post. Tomando en cuenta sus parámetros requeridos:

```
{
  "username": "abrahammontas",
  "email": "abrahammontas@gmail.com",
  "password": "password",
}
```

###### Respuestas:

1- Código de mensaje **`201`**

- El usuario ha sido creado exitosamente.

2- Código de mensaje **`400`**

- Usuario o email ya existen en la base de datos.

3- Código de mensaje **`422`**

- No se puede procesar la operación, Username, email o password estan vacios.

#### **- PUT:**

Edición de un usuario mediante el método put. Tomando en cuenta que el usuario exista y que los parámetros únicos (username y email), si se editan, no existan en la base de datos:

```
{
  "username": "abrahammontas",
  "email": "abrahammontas@gmail.com",
  "password": "password",
}
```
###### Respuestas:

1- Código de mensaje **`200`**

- El usuario ha sido editado exitosamente.

2- Código de mensaje **`400`**

- Usuario o email ya existen en la base de datos.

3- Código de mensaje **`422`**

- No se puede procesar la operación, no existe un usuario con este ID en la base de datos.

#### Results


En base a la clase 'resultados' se realizó el CRUD completo.

```
   {
     "id": 1,
     "result": 100,
     "time": "2016-12-14 08:14:19",
     "user_id": 1
   }
```
#### **- CGET:**

1- Código de mensaje **`200`**

- Devuelve un arreglo de resultados.

2- Código de mensaje **`404`**

- No existen resultados definidos en la base de datos.

#### **- GET:**

1- Código de mensaje **`200`**

- Devuelve un resultados.

2- Código de mensaje **`404`**

- No existen este resultado definidos en la base de datos.

#### **- DELETE:**

1- Código de mensaje **`204`**

- Resultado borrado exitosamente.

2- Código de mensaje **`404`**

- No existen este resultado definidos en la base de datos.

#### **- OPTIONS:**

1- Devuelve los métodos soportados por dicho controlador 'OPTIONS, GET, POST, PUT, DELETE'

#### **- POST:**

Creación de un resultado mediante el método post. Tomando en cuenta sus parámetros requeridos:

```
{
  "result": 100,
  "user_id": 1,
}
```

###### Respuestas:

1- Código de mensaje **`201`**

- El resultado ha sido creado exitosamente.

2- Código de mensaje **`417`**

- Usuario no existe en la base de datos, por lo que no se le puede asignar a este nuevo resultado.

3- Código de mensaje **`422`**

- No se puede procesar la operación, user_id o results estan vacios.

#### **- PUT:**

Edición de un usuario mediante el método put. Tomando en cuenta que el usuario exista y que los parámetros únicos (username y email), si se editan, no existan en la base de datos:

```
{
  "result": 100,
  "user_id": 1,
}
```
###### Respuestas:

1- Código de mensaje **`200`**

- El resultado ha sido editado exitosamente.

2- Código de mensaje **`404`**

- El resultado no existen en la base de datos.

3- Código de mensaje **`422`**

- No se puede procesar la operación, no existe un usuario con este ID en la base de datos.

## Tests
#### Entity

   * ResultTest.php
   * UserTest.php

#### Functional

   * BaseTestCase.php
   * HomepageTest.php
   * UserApiTest.php


## Contributors

[Abraham Montas](http://github.com/abrahammontas)

## License

   * [Apache](https://www.apache.org/licenses/)
   * [Swagger](http://swagger.io/license/)
   * [PHPUNIT](https://github.com/sebastianbergmann/phpunit/blob/5.7/LICENSE)

