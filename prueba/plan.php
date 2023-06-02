<!DOCTYPE html>
<html>
<head>
  <title>BYTE - Planes de Suscripción</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: rgb(38, 37, 37);
      color: white;
      margin: 0;
      padding: 0;
    }
    
    h1 {
      text-align: center;
      padding: 20px;
      color: rgb(178, 117, 235);
    }
    
    .container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
    }
    
    .plan {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .plan .name {
      font-size: 24px;
    }
    
    .plan .price {
      font-size: 36px;
      color: rgb(178, 117, 235);
    }
    
    .plan .features {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    .plan .features li {
      margin-bottom: 10px;
      list-style-type: none;
      
    }
  </style>
</head>
<body>
  <h1>BYTE - Planes de Suscripción</h1>
  <div class="container">
    <div class="plan">
      <div class="name">Plan Básico</div>
      <div class="price">$9.99/mes</div>
    </div>
    <ul class="features">
      <li>Acceso a la biblioteca completa de canciones</li>
      <li>Calidad de audio estándar</li>
      <li>Anuncios en la plataforma</li>
    </ul><br>
    
    <div class="plan">
      <div class="name">Plan Premium</div>
      <div class="price">$14.99/mes</div>
    </div>
    <ul class="features">
      <li>Acceso a la biblioteca completa de canciones</li>
      <li>Calidad de audio premium</li>
      <li>Sin anuncios en la plataforma</li>
      <li>Reproducción sin conexión</li>
    </ul><br>
    
    <div class="plan">
      <div class="name">Plan Familiar</div>
      <div class="price">$24.99/mes</div>
    </div>
    <ul class="features">
      <li>Acceso compartido para hasta 6 miembros de la familia</li>
      <li>Calidad de audio premium</li>
      <li>Sin anuncios en la plataforma</li>
      <li>Reproducción sin conexión</li>
    </ul>
  </div>
</body>
</html>
