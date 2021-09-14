<h1>Registro de Cliente - Visualizacão</h1>

<table class="table table-striped">
    <tr>
        <th> Nome:</th>
        <td>
            <?=$arrayClient['name']?>
        </td>
    </tr>
    <tr>
        <th>Email:</th>
        <td> 
             <?=$arrayClient['email']?>
        </td>
    </tr>
    <tr>
        <th>Telefone:</th>
        <td> 
             <?=$arrayClient['phone']?>
        </td>
    </tr>
    <tr>
        <th>Genero:</th>
        <td> 
             <?php
             switch ($arrayClient['gender']) {
                 case 'male':
                    echo('Masculino');
                     break;
                 
                 case 'female':
                    echo('Feminino');
                 break;
                 case 'other':
                   echo($arrayClient['gen']);
                 break;
             }
             
             ?>
        </td>
    </tr>
    <tr>
        <th>termo:</th>
        <td> 
             <?php
             if($arrayClient['accept']){
                 echo('Termo aceito');
             }else{
                 echo('Termo não aceito');
             }
             
             ?>
        </td>
    </tr>
</table>