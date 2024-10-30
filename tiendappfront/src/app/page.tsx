import Image from "next/image";

interface Product {
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

const Navbar = () => {
    return (
        <nav className="bg-black text-white py-4 shadow-md">
            <div className="container mx-auto flex justify-between items-center">
                <div className="text-lg font-bold">
                    <a href="/" className="hover:text-gray-400 transition-colors">Tiendapp</a>
                </div>
                <div className="space-x-4">
                    
                    <a href="/products" className="hover:text-gray-400 transition-colors">Productos</a>
                    <a href="/contact" className="hover:text-gray-400 transition-colors">Autor</a>
                </div>
            </div>
        </nav>
    );
};

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
                        <div key={product.id} className="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
                            <h2 className="text-xl font-semibold mb-2 text-gray-800">{product.name}</h2>
                            <p className="text-gray-600 mb-4">{product.description}</p>
                            <div className="flex justify-between text-sm text-gray-500">
                                <p>Stock: {product.stock}</p>
                                <p>Marca: {product.brand.name}</p>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
}