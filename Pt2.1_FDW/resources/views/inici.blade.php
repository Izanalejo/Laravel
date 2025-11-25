@extends('layouts.app')
@section('titol', 'Inici')
@section('contingut')
    <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;">¡Bienvenidos a Ritmo y Movimiento!</h1><hr>
    
    <!-- EXERCICI 6 — Enllaç amb route() -->
    <div style="text-align: center; margin: 20px 0;">
        <a href="{{ route('contacte.pagina') }}" class="btn btn-primary" style="background-color: #056d71ec; border: none; padding: 10px 30px; font-size: 18px;">
            Contacta amb nosaltres
        </a>
    </div>
    
    <h2 style="color: whitesmoke;  text-shadow: 2px 2px 5px #056d71ec;" class="mb-4">Sobre nuestra escuela</h2>
    <section class="container py-5" style="background-color: #056d71ec; color: whitesmoke; border-radius: 10px; height: 400px; padding: 40px;">
        <p style="text-align: center;  line-height: 2;">
            En <strong>Ritmo y Movimiento</strong> creemos que el baile es mucho más que movimientos: es expresión, creatividad y una forma de conectar con uno mismo y con los demás. 
            Nuestra escuela ofrece un ambiente cálido y profesional donde cada alumno, desde principiantes hasta avanzados, puede desarrollar sus habilidades en distintos estilos de baile.
        </p>
        <p style="text-align: center; line-height: 2;">
            En Ritmo y Movimiento creemos que el baile es mucho más que simples movimientos: es una forma de expresión personal, un lenguaje que permite comunicar emociones y sentimientos, y una manera única de conectar con uno mismo y con los demás. Cada paso que damos en la pista de baile es una oportunidad para desarrollar confianza, creatividad y disciplina, transformando el aprendizaje en una experiencia gratificante y divertida. Nuestra escuela ha sido diseñada pensando en ofrecer un ambiente cálido, cercano y profesional, donde cada alumno, sin importar su nivel, desde principiantes curiosos hasta bailarines avanzados, pueda explorar y perfeccionar sus habilidades en una gran variedad de estilos.
        </p>
    </section>
@endsection