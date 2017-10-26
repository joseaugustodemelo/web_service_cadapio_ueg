<html>
<?php

header("Content-Type: application/json; charset=UTF-8", true);

$json_str = '{
  "weekly_menu_list": [
    {
      "date": "Segunda-feira - 23/10/2017",
      "main_course": "Recesso",
      "guarnicao": "",
      "salada": "",
      "acompanhamento": "",
      "sobremesa": ""
    },
    {
      "date": "Terca-feira - 24/10/2017",
      "main_course": "Feriado",
      "guarnicao": "",
      "salada": "",
      "acompanhamento": "",
      "sobremesa": ""
    },
    {
      "date": "Quarta-feira - 25/10/2017",
      "main_course": "Frango assado",
      "guarnicao": "Macarrao",
      "salada": "Alface, abobrinha e beterraba",
      "acompanhamento": "Arroz branco e feijao de caldo",
      "sobremesa": "Salada de frutas"      
    },
    {
      "date": "Quinta-feira - 26/10/2017",
      "main_course": "Bife de panela ao molho escuro",
      "guarnicao": "Abobrinha refogada",
      "salada": "Pepino, tomate e alafce",
      "acompanhamento": "Arroz branco e feijao de caldo",
      "sobremesa": "Doce de goiaba"
    },
    {
      "date": "Sexta-feira - 27/10/2017",
      "main_course": "Feijoada",
      "guarnicao": "Farofa de uva passa com cebola",
      "salada": "Vinagrete e couve",
      "acompanhamento": "Arroz branco e feijao de caldo",
      "sobremesa": "Abacaxi"
    }
  ]
}';

echo $json_str;
?>
</html>
