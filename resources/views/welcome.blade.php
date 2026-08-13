<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Jardín de Tulipanes</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,500&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

<nav>
  <div class="logo">Tulipa</div>
  <ul>
    <li><a href="#origen">Origen</a></li>
    <li><a href="#colores">Colores</a></li>
    <li><a href="#cuidados">Cuidados</a></li>
  </ul>
</nav>

<div class="hero">
  <div class="hero-text">
    <span class="kicker">Tulipa · Primavera</span>
    <h1>La flor que <em>pinta</em> los campos</h1>
    <p>Bulbos silenciosos que esperan bajo la tierra todo el invierno, para abrirse en primavera con los colores más vivos del jardín.</p>
  </div>
  <div class="hero-visual">
    <svg class="bouquet" viewBox="0 0 300 320" xmlns="http://www.w3.org/2000/svg">
      <g>
        <rect x="145" y="150" width="6" height="150" fill="#4C9A6B"/>
        <path d="M148 60 C110 80 110 130 148 145 C186 130 186 80 148 60 Z" fill="#D6304A"/>
      </g>
      <g transform="translate(-55,20)">
        <rect x="145" y="150" width="6" height="140" fill="#4C9A6B"/>
        <path d="M148 70 C112 90 112 135 148 148 C184 135 184 90 148 70 Z" fill="#F7C548"/>
      </g>
      <g transform="translate(55,25)">
        <rect x="145" y="150" width="6" height="135" fill="#4C9A6B"/>
        <path d="M148 75 C114 93 114 135 148 148 C182 135 182 93 148 75 Z" fill="#E85D8A"/>
      </g>
      <g transform="translate(-100,55)">
        <rect x="145" y="150" width="6" height="120" fill="#4C9A6B"/>
        <path d="M148 90 C118 106 118 140 148 152 C178 140 178 106 148 90 Z" fill="#9B5DE5"/>
      </g>
      <g transform="translate(100,60)">
        <rect x="145" y="150" width="6" height="115" fill="#4C9A6B"/>
        <path d="M148 95 C120 110 120 142 148 153 C176 142 176 110 148 95 Z" fill="#D6304A"/>
      </g>
    </svg>
  </div>
</div>

<div class="franja">
  <div style="background:#D6304A"></div>
  <div style="background:#F7C548"></div>
  <div style="background:#E85D8A"></div>
  <div style="background:#9B5DE5"></div>
  <div style="background:#4C9A6B"></div>
</div>

<section id="origen">
  <span class="kicker">Historia</span>
  <h2>De Asia Central a los canales de Holanda</h2>
  <p class="lead">El recorrido del tulipán es tan colorido como sus pétalos: viajó miles de kilómetros antes de convertirse en símbolo nacional de un país entero.</p>

  <div class="timeline">
    <div class="item">
      <div class="year">Siglo X</div>
      <div>
        <h3>Las estepas de Asia Central</h3>
        <p>El tulipán silvestre crecía entre las montañas de la actual Kazajistán y Turquía, resistiendo climas extremos.</p>
      </div>
    </div>
    <div class="item">
      <div class="year">Siglo XVI</div>
      <div>
        <h3>El imperio otomano</h3>
        <p>Se convirtió en símbolo de estatus en los jardines de los sultanes, y dio nombre a toda una época.</p>
      </div>
    </div>
    <div class="item">
      <div class="year">1630s</div>
      <div>
        <h3>La "tulipomanía" holandesa</h3>
        <p>Un solo bulbo llegó a costar más que una casa en Ámsterdam, en una de las primeras burbujas económicas de la historia.</p>
      </div>
    </div>
    <div class="item">
      <div class="year">Hoy</div>
      <div>
        <h3>Campos infinitos</h3>
        <p>Países Bajos produce miles de millones de bulbos al año, pintando el paisaje cada abril.</p>
      </div>
    </div>
  </div>
</section>

<section id="colores" class="colores">
  <span class="kicker">Lenguaje de las flores</span>
  <h2>Un color, un mensaje</h2>
  <p class="lead">Regalar tulipanes es elegir con cuidado el tono correcto, porque cada uno cuenta algo distinto.</p>

  <div class="grid-colores">
    <div class="chip rojo">
      <svg class="flor" viewBox="0 0 40 40"><path d="M20 4 C8 12 8 26 20 30 C32 26 32 12 20 4 Z" fill="#D6304A"/></svg>
      <h3>Rojo</h3>
      <p>Amor verdadero y pasión.</p>
    </div>
    <div class="chip amarillo">
      <svg class="flor" viewBox="0 0 40 40"><path d="M20 4 C8 12 8 26 20 30 C32 26 32 12 20 4 Z" fill="#F7C548"/></svg>
      <h3>Amarillo</h3>
      <p>Alegría y nuevos comienzos.</p>
    </div>
    <div class="chip rosa">
      <svg class="flor" viewBox="0 0 40 40"><path d="M20 4 C8 12 8 26 20 30 C32 26 32 12 20 4 Z" fill="#E85D8A"/></svg>
      <h3>Rosa</h3>
      <p>Cariño y buenos deseos.</p>
    </div>
    <div class="chip morado">
      <svg class="flor" viewBox="0 0 40 40"><path d="M20 4 C8 12 8 26 20 30 C32 26 32 12 20 4 Z" fill="#9B5DE5"/></svg>
      <h3>Morado</h3>
      <p>Realeza y admiración.</p>
    </div>
    <div class="chip blanco">
      <svg class="flor" viewBox="0 0 40 40"><path d="M20 4 C8 12 8 26 20 30 C32 26 32 12 20 4 Z" fill="#fff" stroke="#ddd" stroke-width="1.5"/></svg>
      <h3>Blanco</h3>
      <p>Perdón y un nuevo comienzo.</p>
    </div>
  </div>
</section>

<section id="cuidados" class="cuidados">
  <span class="kicker">Guía práctica</span>
  <h2>Cómo cuidar tus tulipanes</h2>
  <p class="lead">Ya sea en un jarrón o en tu jardín, estos cuidados básicos los mantienen frescos por más tiempo.</p>

  <div class="pasos">
    <div class="paso">
      <div class="num">01</div>
      <p>Corta el tallo en diagonal antes de ponerlos en agua fresca.</p>
    </div>
    <div class="paso">
      <div class="num">02</div>
      <p>Cambia el agua del jarrón cada dos días para evitar bacterias.</p>
    </div>
    <div class="paso">
      <div class="num">03</div>
      <p>Mantenlos lejos del sol directo y de fruteros: el etileno los marchita rápido.</p>
    </div>
    <div class="paso">
      <div class="num">04</div>
      <p>Si están en tierra, planta los bulbos en otoño para que florezcan en primavera.</p>
    </div>
  </div>
</section>

<footer>
  Diseñado con cariño <span>♥</span> para los amantes de los tulipanes.
</footer>

</body>
</html>