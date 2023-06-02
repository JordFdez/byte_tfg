

function listadoAleatorio(){
    var ul = document.querySelector('#aleatorio');
    for (var i = ul.children.length; i >= 0; i--) {
        ul.appendChild(ul.children[Math.random() * i | 0]);
    }
  }



  function listadoAleatorio1(){
    var ul1 = document.querySelector('#aleatorio1');
    for (var i = ul1.children.length; i >= 0; i--) {
        ul1.appendChild(ul1.children[Math.random() * i | 0]);
    }
  }



  function listadoAleatorio2(){
    var ul2 = document.querySelector('#aleatorio2');
    for (var i = ul2.children.length; i >= 0; i--) {
        ul2.appendChild(ul2.children[Math.random() * i | 0]);
    }
  }
  setInterval('listadoAleatorio()', 58000);
  setInterval('listadoAleatorio1()', 20000);
  setInterval('listadoAleatorio2()', 31000);