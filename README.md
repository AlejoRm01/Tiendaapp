# Tiendaapp prueba tecnica 

Prueba tecnica realizada por Alejandro Rodriguez

### Consideraciones 

Como identificador unico se usa UUID, también se preparan algunos datos de prueba para llenar la base de datos y demostrar la concurrencia, se usa MySQL como motor de la base de datos.

Como dato a notar se aplica inversion de dependencias tanto para el backend como frontend.

El nombre de la base de datos por defecto es tienda y recordar ejecutar los seeds.

# Migraciones

php artisan migrate

# Seed

php artisan db:seed

# API

### Products 

GET /Api/products: Obtiene todos los productos. (index)

    {
            "id": "    
        "id": "840b07b0-e6a6-4f36-993a-9c5b6abf9048",
        "name": "Producto 4",
        "unit": "Unidad",
        "description": "Descripción del producto 4",
        "stock": 40,
        "created_at": "2024-10-30T17:53:52.000000Z",
        "updated_at": "2024-10-30T17:53:52.000000Z",
        "brand": {
            "id": "d92e41ec-a1b5-4e18-b673-8d80489eaca7",
            "name": "Marca 4"
        }
    }

POST /Api//products: Crea un nuevo producto. (store)

    {
        "name": "Producto 4",
        "unit": "Unidad",
        "description": "Descripción del producto 4",
        "stock": 50,
        "boarding_date": "2024-10-30 18:57:44",
        "brand_id": "869df13c-b47e-45b5-9eb2-f6914f9c8b40"
    }
GET /Api//products/{id}: Muestra un producto específico por ID. (show)

PUT /Api//products/{id}: Actualiza un producto por ID. (update)

    {
    "name": "Producto 4 Actualizado",
    "unit": "Unidad",
    "description": "Descripción actualizada del producto 4",
    "stock": 50,
    "boarding_date": "2024-10-30 18:57:44",
    "brand_id": "d92e41ec-a1b5-4e18-b673-8d80489eaca7"
    }

DELETE /Api//products/{id}: Elimina un producto por ID. (destroy)

### Brands

GET /Api//brands: Obtiene todas las marcas. (index)

    {
        "id": "18474e27-43a7-4e35-b7f2-4c7f31869c57",
        "name": "Marca 3",
        "created_at": "2024-10-30T17:53:52.000000Z",
        "updated_at": "2024-10
        -30T17:53:52.000000Z"
    }

POST /Api//brands: Crea una nueva marca. (store)

GET /Api//brands/{id}: Muestra una marca específica por ID. (show)

PUT /Api//brands/{id}: Actualiza una marca por ID. (update)

    {
    "name": "Marca 3 actualizada"
    }
    
DELETE /Api//brands/{id}: Elimina una marca por ID. (destroy)