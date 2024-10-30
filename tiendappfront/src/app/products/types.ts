// src/app/types.ts o src/types/types.ts
export interface Product {
    id: string;
    name: string;
    unit: string;
    description: string;
    stock: number;
    created_at: string;
    updated_at: string;
    brand: {
        id: string;
        name: string;
    };
}