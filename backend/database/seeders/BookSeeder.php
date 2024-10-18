<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'La sombra del viento',
            'author' => 'Carlos Ruiz Zafón',
            'description' => 'Un joven descubre un misterioso libro en un cementerio de libros olvidados y desentraña una trama llena de intriga y misterio.',
        ]);
        
        Book::create([
            'title' => 'El juego del ángel',
            'author' => 'Carlos Ruiz Zafón',
            'description' => 'Una precuela de "La sombra del viento" que sigue a un escritor que encuentra inspiración en un misterioso editor con oscuros secretos.',
        ]);
        
        Book::create([
            'title' => 'La ciudad de las bestias',
            'author' => 'Isabel Allende',
            'description' => 'Un joven y su abuela aventurera viajan al Amazonas para enfrentarse a criaturas míticas y descubrir verdades ocultas.',
        ]);
        
        Book::create([
            'title' => 'La casa de los espíritus',
            'author' => 'Isabel Allende',
            'description' => 'Una saga familiar que mezcla la historia política de Chile con el realismo mágico, narrando la vida de varias generaciones.',
        ]);
        
        Book::create([
            'title' => 'Los pilares de la Tierra',
            'author' => 'Ken Follett',
            'description' => 'Una épica historia medieval que gira en torno a la construcción de una catedral en la Inglaterra del siglo XII.',
        ]);
        
        Book::create([
            'title' => 'Un mundo sin fin',
            'author' => 'Ken Follett',
            'description' => 'Secuela de "Los pilares de la Tierra", situada en la misma ciudad siglos después, donde nuevos desafíos y conspiraciones surgen.',
        ]);
        
        Book::create([
            'title' => 'El nombre del viento',
            'author' => 'Patrick Rothfuss',
            'description' => 'La historia de Kvothe, un legendario músico y aventurero, narrada por él mismo mientras revela secretos de su vida.',
        ]);
        
        Book::create([
            'title' => 'El temor de un hombre sabio',
            'author' => 'Patrick Rothfuss',
            'description' => 'La segunda parte de la crónica de Kvothe, donde sus hazañas y aventuras se intensifican en su búsqueda de la verdad.',
        ]);
        
        Book::create([
            'title' => 'La sombra sobre Innsmouth',
            'author' => 'H.P. Lovecraft',
            'description' => 'Un relato clásico de terror donde un hombre descubre los oscuros secretos de un extraño y decadente pueblo costero.',
        ]);
        
        Book::create([
            'title' => 'Cazadores de sombras: Ciudad de hueso',
            'author' => 'Cassandra Clare',
            'description' => 'Una joven descubre un mundo secreto de cazadores de demonios, donde el peligro y el misterio acechan a cada paso.',
        ]);        
    }
}
