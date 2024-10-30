import Link from 'next/link';

const Navbar = () => {
    return (
        <nav className="bg-black text-white py-4 shadow-md">
            <div className="container mx-auto flex justify-between items-center">
                <div className="text-lg font-bold">
                    <a href="/" className="hover:text-gray-400 transition-colors">Mi Tienda</a>
                </div>
                <div className="space-x-4">
                <Link href="/products" className="hover:text-gray-400 transition-colors">Productos</Link>
                    <Link href="/about" className="hover:text-gray-400 transition-colors">Acerca de</Link>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;