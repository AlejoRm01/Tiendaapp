// src/app/about/about.tsx
import Navbar from '../components/navbar';

const About = () => {
    return (
        <div>
            <Navbar />
            <div className="min-h-screen bg-gray-100 p-8 sm:p-20 flex items-center justify-center">
                <div className="bg-white rounded-lg shadow-lg p-8 text-center">
                    <h1 className="text-2xl font-bold mb-4 text-black">Prueba técnica para Tiendapp</h1>
                    <p className="text-lg mb-2 text-black">Realizado por</p>
                    <p className="text-lg mb-2 text-black">Alejandro Rodríguez</p>
                    <p className="text-lg mb-2 text-black">Medellín</p>
                    <p className="text-lg text-black">30 de octubre de 2024</p>
                </div>
            </div>
        </div>
    );
};

export default About;