// src/app/ProductCard.tsx o src/components/ProductCard.tsx
import { Product } from './types';

const ProductCard: React.FC<{ product: Product }> = ({ product }) => {
    return (
        <div className="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
            <h2 className="text-xl font-semibold mb-2 text-gray-800">{product.name}</h2>
            <p className="text-gray-600 mb-4">{product.description}</p>
            <div className="flex justify-between text-sm text-gray-500">
                <p>Stock: {product.stock}</p>
                <p>Marca: {product.brand.name}</p>
            </div>
        </div>
    );
};

export default ProductCard;