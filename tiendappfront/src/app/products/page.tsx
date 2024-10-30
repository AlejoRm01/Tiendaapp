// src/app/page.tsx
import Navbar from '../components/navbar';
import ProductCard from './productCard';
import { Product } from '../types';


export default async function Home() {
    let products: Product[] = [];

    try {
        const res = await fetch("http://127.0.0.1:8000/api/products");

        if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
        }

        products = await res.json();
    } catch (error) {
        console.error("Error fetching products:", error);
    }

    return (
        <div>
            <Navbar />
            <div className="min-h-screen bg-gray-100 p-8 sm:p-20">
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {products.map(product => (
                        <ProductCard key={product.id} product={product} />
                    ))}
                </div>
            </div>
        </div>
    );
}