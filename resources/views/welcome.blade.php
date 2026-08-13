<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Jardín de Tulipanes</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,500&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --fondo:#FDF4F0;
    --rosa-suave:#F7C6D9;
    --rosa-fuerte:#E85D8A;
    --rojo:#D6304A;
    --amarillo:#F7C548;
    --morado:#9B5DE5;
    --verde:#4C9A6B;
    --verde-osc:#2E6B48;
    --texto:#3B2E35;
    --texto-suave:#7A6570;
  }
  *{box-sizing:border-box; margin:0; padding:0;}
  html{scroll-behavior:smooth;}
  body{
    font-family:'Nunito', sans-serif;
    background:var(--fondo);
    color:var(--texto);
  }
  h1,h2,h3{ font-family:'Playfair Display', serif; }

  /* ===== NAV ===== */
  nav{
    position:sticky; top:0; z-index:10;
    display:flex; justify-content:space-between; align-items:center;
    padding:20px 6vw;
    background:rgba(253,244,240,0.85);
    backdrop-filter:blur(6px);
    border-bottom:1px solid #f0d9de;
  }
  nav .logo{
    font-family:'Playfair Display', serif;
    font-weight:700;
    font-size:1.3rem;
    color:var(--rosa-fuerte);
  }
  nav ul{
    list-style:none;
    display:flex;
    gap:28px;
  }
  nav a{
    text-decoration:none;
    color:var(--texto);
    font-size:.92rem;
    font-weight:600;
    transition:color .2s;
  }
  nav a:hover{ color:var(--rosa-fuerte); }

  /* ===== HERO ===== */
  .hero{
    display:grid;
    grid-template-columns:1.1fr 0.9fr;
    align-items:center;
    gap:40px;
    padding:80px 6vw;
    max-width:1200px;
    margin:0 auto;
  }
  .hero-text .kicker{
    color:var(--verde-osc);
    text-transform:uppercase;
    letter-spacing:.2em;
    font-size:.75rem;
    font-weight:700;
    margin-bottom:16px;
    display:inline-block;
  }
  .hero-text h1{
    font-size:clamp(2.6rem, 5vw, 4.2rem);
    line-height:1.05;
    color:var(--texto);
  }
  .hero-text h1 em{
    color:var(--rojo);
    font-style:italic;
  }
  .hero-text p{
    margin-top:22px;
    max-width:440px;
    color:var(--texto-suave);
    font-size:1.05rem;
  }
  .hero-visual{
    display:flex;
    justify-content:center;
  }
  .bouquet{ width:100%; max-width:380px; }

  /* ===== FRANJA DE COLORES ===== */
  .franja{
    display:flex;
    height:14px;
  }
  .franja div{ flex:1; }

  /* ===== SECCIONES ===== */
  section{
    max-width:1000px;
    margin:0 auto;
    padding:100px 6vw;
  }
  .kicker{
    text-transform:uppercase;
    letter-spacing:.18em;
    font-size:.72rem;
    font-weight:700;
    color:var(--rosa-fuerte);
  }
  section h2{
    font-size:clamp(1.8rem, 3.5vw, 2.6rem);
    margin:12px 0 18px;
  }
  section > p.lead{
    color:var(--texto-suave);
    max-width:600px;
    margin-bottom:40px;
    font-size:1.05rem;
  }

  /* ===== TIMELINE ORIGEN ===== */
  .timeline{
    display:grid;
    gap:28px;
  }
  .timeline .item{
    display:grid;
    grid-template-columns:90px 1fr;
    gap:20px;
    align-items:start;
  }
  .timeline .year{
    font-family:'Playfair Display', serif;
    font-weight:700;
    font-size:1.2rem;
    color:var(--morado);
  }
  .timeline .item p{ color:var(--texto-suave); }
  .timeline .item h3{ font-size:1.1rem; margin-bottom:4px; }

  /* ===== COLORES / GRID ===== */
  .colores{ background:linear-gradient(180deg, #fff 0%, var(--fondo) 100%); }
  .grid-colores{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(210px, 1fr));
    gap:20px;
  }
  .chip{
    border-radius:20px;
    padding:28px 22px;
    background:#fff;
    box-shadow:0 12px 28px rgba(150,80,100,.08);
    position:relative;
    overflow:hidden;
  }
  .chip::before{
    content:"";
    position:absolute;
    top:0; left:0; right:0;
    height:8px;
    background:var(--c);
  }
  .chip h3{ font-size:1.05rem; margin:14px 0 6px; color:var(--texto); }
  .chip p{ font-size:.9rem; color:var(--texto-suave); }
  .chip .flor{ width:38px; height:38px; }

  .chip.rojo{ --c:var(--rojo); }
  .chip.amarillo{ --c:var(--amarillo); }
  .chip.rosa{ --c:var(--rosa-fuerte); }
  .chip.morado{ --c:var(--morado); }
  .chip.blanco{ --c:#e8dfe2; }

  /* ===== CUIDADOS ===== */
  .cuidados{
    background:var(--verde-osc);
    color:#fff;
    border-radius:28px;
    max-width:1000px;
    margin:0 auto 100px;
    padding:70px 6vw;
  }
  .cuidados h2{ color:#fff; }
  .cuidados .kicker{ color:var(--amarillo); }
  .cuidados p.lead{ color:#d7e8dd; }
  .pasos{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(200px,1fr));
    gap:26px;
    margin-top:20px;
  }
  .pasos .paso{
    background:rgba(255,255,255,0.08);
    border-radius:16px;
    padding:22px;
  }
  .pasos .num{
    font-family:'Playfair Display', serif;
    font-size:1.6rem;
    color:var(--amarillo);
    margin-bottom:8px;
  }
  .pasos p{ font-size:.92rem; color:#e4efe7; }

  footer{
    text-align:center;
    padding:50px 24px 60px;
    color:var(--texto-suave);
    font-size:.85rem;
  }
  footer span{ color:var(--rosa-fuerte); }

  @media (max-width:760px){
    .hero{ grid-template-columns:1fr; text-align:center; }
    .hero-text p{ margin-left:auto; margin-right:auto; }
    nav ul{ display:none; }
  }
</style>
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