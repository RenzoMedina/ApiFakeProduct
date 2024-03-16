# API Fake Product
## Pruebas
Para poder realizar las pruebas, debes ejecutar el siguiente comando
``` bash
./builder_test.sh
```

## SQL
Dentro de la carpeta **_database_**, se encuentra un archivo **_db.sql_**, el debes importarla dentro del gestor de tu base de datos.
Luego ingresar al archivo **_.env_**, los campos:
```env
DB_NAME = "tu_name_db"
DB_USER = "tu_user"
DB_HOST = "tu_host"
DB_PASS = "tu_pass"
DB_TABLE= "products"
```
## URL API
Dentro del mismo archivo **_.env_** puedes agregar tu dominio y el nombre de tu API
```env
API_VERSION = "tudominio/api/v1/"
API_URL = "product"
```
## CRUD

### GET ALL
La obtención de datos de manera gobal 
>Request:
**GET**
ejemplo:
``` curl
http://localhost:8080/api/v1/product
```
respuesta:
```json
{
    "message": "Datos generales",
    "data": [
        {
            "id": 1,
            "name": "Mr. Eleazar Doyle",
            "price": 18,
            "quantity": 64,
            "description": "Repellendus totam possimus alias ut atque est aut. Cum doloremque error sit tempore.",
            "create_at": "2024-03-16 17:48:53",
            "update_at": null
        },
        {
            "id": 2,
            "name": "Mr. Eleazar Doyle",
            "price": 18,
            "quantity": 64,
            "description": "Repellendus totam possimus alias ut atque est aut. Cum doloremque error sit tempore.",
            "create_at": "2024-03-16 17:48:53",
            "update_at": null
        },
        {...}
    ],
    "status": 200
}
```
### GET ID
La obtención de datos de manera detalla por el id
>Request:
**GET**
ejemplo:
``` curl
http://localhost:8080/api/v1/product/1
```
respuesta:
```json
{
    "message": "Los datos con id 1 son:",
    "data": {
        "id": 1,
        "name": "Mr. Eleazar Doyle",
        "price": 18,
        "quantity": 64,
        "description": "Repellendus totam possimus alias ut atque est aut. Cum doloremque error sit tempore.",
        "create_at": "2024-03-16 17:48:53",
        "update_at": null
    },
    "status": 202
}
```
### CREATE
El ingreso de datos 
>Request:
**POST**
ejemplo:
``` curl
http://localhost:8080/api/v1/product/
```
envio:
```json
{
        "name": "Mr. Eleazar Doyle",
        "price": 18.56,
        "quantity": 64,
        "description": "Repellendus totam possimus alias ut atque est aut. Cum doloremque error sit tempore."
    }
```
respuesta:
``` json
{
    "message": "Datos han sido guardados correctamente",
    "data": {
        "name": "Mr. Eleazar Doyle",
        "price": 18.56,
        "quantity": 64,
        "description": "Repellendus totam possimus alias ut atque est aut. Cum doloremque error sit tempore."
    },
    "status": 201
}
```

### UPDATE
Para poder actualizar los datos es ingresar datos y el id dentro de la url
>Request:
**PUT**
ejemplo:
``` curl
http://localhost:8080/api/v1/product/1
```
envio:
```json
{
        "name": "Prof. Alene Wiegand",
        "price": 2919,
        "quantity": 51,
        "description": "Fugiat et quis rerum ut facilis omnis. Sed voluptatem in quia rem."
    }
```
respuesta:
``` json
{
    "message": "Datos han sido actualizados correctamente",
    "data": {
        "name": "Prof. Alene Wiegand",
        "price": 2919,
        "quantity": 51,
        "description": "Fugiat et quis rerum ut facilis omnis. Sed voluptatem in quia rem."
    },
    "status": 203
}
```
### DESTROY
Para poder algun datos enviamos el nummero de id en la url
>Request:
**DELETE**
ejemplo:
``` curl
http://localhost:8080/api/v1/product/1
```
respuesta:
``` json
   {
    "message": "Los datos eliminados son correctamente",
    "status": 204
    }
```
