<?php

$lista =[ ['id' => 1, 
        'nome'=> 'Primeiro'],
        ['id'=>2,
        'nome'=> 'Segundo']
];

// print_r($lista);



// print_r(json_encode($lista));


$lista2 = '
[
  {
    "id": 1,
    "titulo": "Smartphone Motorola",
    "descricao": "Android Oreo",
    "preco": "899.00",
    "fabricante": "Motorola",
    "created_at": null,
    "updated_at": null
  },
  {
    "id": 2,
    "titulo": "Iphone X",
    "descricao": "Tela 5.8 IOS 12",
    "preco": "4999.00",
    "fabricante": "Apple",
    "created_at": null,
    "updated_at": null
  },
  {
    "id": 3,
    "titulo": "Notebook DELL",
    "descricao": "Descricao do Notebook G15",
    "preco": "1999.88",
    "fabricante": "DELL SA",
    "created_at": "2024-07-09T23:06:56.000000Z",
    "updated_at": "2024-07-10T11:09:27.000000Z"
  }
]';


// print_r($lista2);



$lista3 = '{
"chaveExterna": "ALLCLINIC-LLCAI",
"contatos": [
{
"contato": "031XXXXXXXXX",
"cliente": "Cliente A",
"idExterno": 100,
"variaveis":
[ 
[{"paciente_nome": "Cliente A",
    "atendimento_id": 432641,
    "atendimento_data": "26/10",
    "atendimento_hora": "10:30",
    "modalidade_id": "9631",
    "modalidade_nome": "Ultrassonografia",
    "empresa_id": "1",
    "empresa_nome": "Clínica Vale"
    } ]
]
    
}
,

{
"contato": "031XXXXXXXXX",
"cliente": "Cliente B",
"idExterno": 200,
"variaveis":
[ {"paciente_nome": "Cliente B",
"atendimento_id": 432646,
"atendimento_data": "26/10",
"atendimento_hora": "07:00",
"modalidade_id": "9631",
"modalidade_nome": "Ultrassonografia",
"empresa_id": "1",
"empresa_nome": "Clínica Vale"
},
{"paciente_nome": "Cliente B",
"atendimento_id": 432667,
"atendimento_data": "26/10",
"atendimento_hora": "7:30",
"modalidade_id": "9674",
"modalidade_nome": "Tomografía computadorizada",
"empresa_id": "1",
"empresa_nome": "Clínica Vale"
} 
]}';

print_r($lista3);
