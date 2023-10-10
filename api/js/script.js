
        var Elem = document.getElementById('sys');
        function Horario(){
            var Hoje = new Date();
            var Horas = Hoje.getHours();
            if(Horas < 10){
                Horas = "0" + Horas;
            }
            var Minutos = Hoje.getMinutes();
            if(Minutos < 10){
                Minutos = '0'+Minutos;
            }
            var Segundos = Hoje.getSeconds();
            if(Segundos < 10){
                Segundos = "0"+Segundos;
            }
            //console.log(Hoje);
            var data = Hoje.getDate();
            data += '/' + (Hoje.getMonth() + 1);
            data += '/' + Hoje.getFullYear();
            Elem.innerHTML ='Data de Hoje: ' + data + ' - ' + Horas+":"+Minutos+":"+Segundos;
        }
        window.setInterval('Horario()',1000);

        window.setInterval(() => {
            location.reload(); 
         }, 1000 * 30);
