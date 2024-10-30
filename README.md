"# Tiendaapp" 

# MIGRATIONS

php artisan migrate

# SEED

php artisan db:seed

# API

### Products 

GET /products: Obtiene todos los productos. (index)

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

POST /products: Crea un nuevo producto. (store)

GET /products/{id}: Muestra un producto específico por ID. (show)

PUT /products/{id}: Actualiza un producto por ID. (update)

    {
    "name": "Producto 4 Actualizado",
    "unit": "Unidad",
    "description": "Descripción actualizada del producto 4",
    "stock": 50,
    "brand_id": "d92e41ec-a1b5-4e18-b673-8d80489eaca7"
    }

DELETE /products/{id}: Elimina un producto por ID. (destroy)

### Brands

GET /brands: Obtiene todas las marcas. (index)

    {
        "id": "18474e27-43a7-4e35-b7f2-4c7f31869c57",
        "name": "Marca 3",
        "created_at": "2024-10-30T17:53:52.000000Z",
        "updated_at": "2024-10
        -30T17:53:52.000000Z"
    }

POST /brands: Crea una nueva marca. (store)

GET /brands/{id}: Muestra una marca específica por ID. (show)

PUT /brands/{id}: Actualiza una marca por ID. (update)

    {
    "name": "Marca 3 actualizada"
    }
    
DELETE /brands/{id}: Elimina una marca por ID. (destroy)