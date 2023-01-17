function calcular(){
  
  let cep_destino = parseFloat(document.getElementById('cep-destino').value);
    
  if(cep_destino >= 01000000 && cep_destino <= 58999999){
    
    document.querySelector('#transp_correios').innerText = 'Correios';
    document.querySelector('#valor_correios').innerText = 'R$102,25';

    document.querySelector('#transp_azul').innerText = 'Azul';
    document.querySelector('#valor_azul').innerText = 'R$ 97,50';

    document.querySelector('#transp_jadlog').innerText = 'Jadlog';
    document.querySelector('#valor_jadlog').innerText = 'R$66,34';

    document.querySelector('#transp_fedex').innerText = 'Fedex';
    document.querySelector('#valor_fedex').innerText = 'R$81,59';
  
  }else if(cep_destino >= 59000000 && cep_destino <= 68899999){
    
    document.querySelector('#transp_correios').innerText = 'Correios';
    document.querySelector('#valor_correios').innerText = 'R$156,65';

    document.querySelector('#transp_azul').innerText = 'Azul';
    document.querySelector('#valor_azul').innerText = 'R$ 101,69';

    document.querySelector('#transp_jadlog').innerText = 'Jadlog';
    document.querySelector('#valor_jadlog').innerText = 'R$79,43';

    document.querySelector('#transp_fedex').innerText = 'Fedex';
    document.querySelector('#valor_fedex').innerText = 'R$63,87';
  
  }else if(cep_destino >= 68900000 && cep_destino <= 76799999){
    
    document.querySelector('#transp_correios').innerText = 'Correios';
    document.querySelector('#valor_correios').innerText = 'R$122,07';

    document.querySelector('#transp_azul').innerText = 'Azul';
    document.querySelector('#valor_azul').innerText = 'R$ 119,61';

    document.querySelector('#transp_jadlog').innerText = 'Jadlog';
    document.querySelector('#valor_jadlog').innerText = 'R$102,77';

    document.querySelector('#transp_fedex').innerText = 'Fedex';
    document.querySelector('#valor_fedex').innerText = 'R$98,44';

  }else if(cep_destino >=88000000){   
    
    document.querySelector('#transp_correios').innerText = 'Correios';
    document.querySelector('#valor_correios').innerText = 'R$96,30';

    document.querySelector('#transp_azul').innerText = 'Azul';
    document.querySelector('#valor_azul').innerText = 'R$ 124,13';

    document.querySelector('#transp_jadlog').innerText = 'Jadlog';
    document.querySelector('#valor_jadlog').innerText = 'R$96,80';

    document.querySelector('#transp_fedex').innerText = 'Fedex';
    document.querySelector('#valor_fedex').innerText = 'R$77,87';

  }
}