<!DOCTYPE html>
<html>
<head>

<style>
    .retangulo {
        width: 100%;
        height: 2.5%;
        background-color: rgb(222, 225, 226);
        display: flex;
        align-items: center;
        text-align: center;
    }
    .texto {
        margin: auto;
        font-weight: bold;
        font-size: 16px;

    }
    .tabelas {
        border: 1px;
        border-style: solid;
        border-color: grey;
        width: 100%;
        border-collapse: collapse;
    }


    #ficha td {
    border: 1px solid rgb(160 160 160);
    padding: 8px 10px;
    }


    .tx {
        line-height:1.5;
        font-size: 15px;
    }

</style>

<style>
    .tela {
        width: 100%;
        height: 100px;
        border: 0px solid black;
        float: center;
        text-align: center;

    }
</style>
->header('Content-Type', 'image/jpeg');
</head>
<body>

<table style="width: 100%">
  <tr>
    <td><img src="{{ asset('img/logo-motomaster.png') }}" alt="Image" height="60" width="180"></td>
    <td> <p style="width: 100%; font-size:28px; font-weight: bold;" align="center">Locadora Motomaster</p>
         <p style="font-size:16px;" align="center">Av. Cesário de Melo, nº 4030 Campo Grande - Rio de Janeiro - RJ.<br>
                                                  Contato: (21)7402-1183<br>
                                                  Email: erike@rdbled.com.br - CNPJ: 53-825-708/0001-48</p>
    </td>
</tr>

</table>
<div class="retangulo">
    <span class="texto">FICHA DE LOCAÇÃO</span>
</div>
<table>
</table>
<div class="retangulo">
<span class="texto">LOCATÁRIO</span>
</div>

<table class="tabelas" width="100%" id='ficha'>
<tr>
    <td colspan="2">
        <b class="tx">Nome:</b> {{$locacao->Cliente->nome}}</p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <b class="tx">Endereço:</b>  {{$locacao->Cliente->endereco}}
    </td>
<tr>
    <td>
        <b class="tx">Cidade:</b> {{$locacao->Cliente->Cidade->nome}}
    </td>
    <td>
        <b class="tx">UF:</b> {{$locacao->Cliente->Estado->nome}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Rg:</b> {{$locacao->Cliente->rg}}
    </td>
    <td>
        <b class="tx">Org Exp:</b> {{$locacao->Cliente->exp_rg}}
    </td>

</tr>
<tr>
    <td>
        <b class="tx">Telefones:</b>  {{$tel_1.' - '.$tel_2}}
    </td>
    <td>
        <b class="tx">CPF/CNPJ:</b> {{$cpfCnpj}}
    </td>
</tr>

</table>
</table>
<div class="retangulo">
<span class="texto">VEÍCULO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Marca:</b> {{$locacao->Veiculo->Marca->nome}}
    </td>
    <td>
        <b class="tx">Modelo:</b> {{$locacao->Veiculo->modelo}}
    </td>
    <td>
        <b class="tx">Chassi:</b> {{$locacao->Veiculo->chassi}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Ano:</b>  {{$locacao->Veiculo->ano}}
    </td>
    <td>
        <b class="tx">Cor:</b>  {{$locacao->Veiculo->cor}}
    </td>
    <td>
        <b class="tx">Placa:</b>  {{$locacao->Veiculo->placa}}
    </td>
</tr>
</table>
<div class="retangulo">
<span class="texto">LOCAÇÃO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Data da Saída:</b> {{\Carbon\Carbon::parse($locacao->data_saida)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora da Saída:</b> {{$locacao->hora_saida}}
    </td>

    <td>
        <b class="tx">Data do Retorno:</b> {{\Carbon\Carbon::parse($locacao->data_retorno)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora do Retorno:</b> {{$locacao->hora_retorno}}
    </td>
</tr>
    <td>
        <b class="tx">Km de Saída:</b>  {{$locacao->km_saida}}
    </td>
    <td>
        <b class="tx">Qtd de Diárias:</b> {{$locacao->qtd_diarias}}
    </td>
    <td colspan="2">
        <b class="tx">Valor da Diária R$:</b> {{$locacao->Veiculo->valor_diaria}}
    </td>

</tr>
<tr>
    <td >
        <b class="tx">Km de Retorno:</b> {{$locacao->km_retorno}}
    </td>
    <td >
        <b class="tx">Valor do Desconto R$:</b> {{$locacao->valor_desconto}}
    </td>
    <td colspan="2">
        <b class="tx">Valor Total R$:</b> {{$locacao->valor_total_desconto}}
    </td>

</tr>

</table>

<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Observações: </b> {{$locacao->obs}}
    </td>
</tr>
</table>

<!-- PÁGINA 2 -->

<style>
    .break {
        page-break-before: always;
         }
    .parag {
        text-align: justify;
        font-size: 11;
    }
</style>

<div class="break">

<table style="width: 100%">
    <tr>
        <td><img src="{{ asset('img/logo-motomaster.png') }}" alt="Image" height="60" width="180"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
    <p class="parag">
        Registro: <b>{{$locacao->Veiculo->id}}</b><br><br>
        Parte, locadora. Motomaster Campo Grande Ltda CNPJ 53.825.708/0001-48 Endereço: AV. Cesario de Melo 04030 denominado LOCADOR.<br><br>


        CLÁUSULA 1 DO OBJETO DO CONTRATO:<br>
        1.1- Por meio deste contrato regula-se a locação da motocicleta da marca: <b>{{$locacao->Veiculo->modelo}} - {{$locacao->Veiculo->cor}} - {{$locacao->Veiculo->ano}}.</b>.<br>

        1.2. O veículo descrito acima, será utilizado exclusivamente pelo LOCATÁRIO, não sendo permitido sub-rogar para terceiros os direitos por ele obtidos
        contrato do presente, nem permitir que outra pessoa conduza o referido veículo sem a inequívoca e expressa autorização do LOCADOR, sob pena de
        rescisão contratual, multa de R$ 600,00 (seiscentos reais), bem como, a responsabilização total por qualquer ato ou danos em relação ao veículo,
        inclusive os provenientes de caso fortuito ou força maior.<br>
        CLÁUSULA 2ª – DO HORÁRIO DO ALUGUEL E LOCAL DE COLETA E DEVOLUÇÃO DO VEÍCULO.<br>
        2.1. O veículo em questão permanecerá na posse do LOCATÁRIO por período integral, de segunda a domingo.<br>
        2.2.O LOCATÁRIO deverá apresentar o veículo ao LOCADOR 01 (uma) vez por mês para a realização de vistoria, em data e endereço por este designado.<br>
        2.3.A não apresentação do veículo, no prazo e os supracitados locais, serão cobrados ao LOCATÁRIO multa de R$ 150,00 (cento e cinquenta reais)<br>
        mais R$ 50,00 (cinquenta reais) por dia de atraso, além da possível rescisão contratual.<br>
        CLÁUSULA 3ª – DAS OBRIGAÇÕES DO LOCADOR<br>
        3.1. O veículo objeto do presente contrato será submetido à manutenção preventiva periódica, ou em decorrência de problemas mecânicos e/ou<br>
        elétricos, aos quais o LOCATÁRIO não deu causa, em oficina mecânica designada pelo LOCADOR, nos termos a seguir:<br>
        3.1.1. Troca do Kit de Tração: Sempre que houver barulho anormal e/ou apresentar desgaste excessivo;<br>
        3.1.2. Troca de Pneus: Quando estiverem no nível do Tread Wear Indicator (TWI);<br>
        3.1.3. Se o LOCATARIO não fazer a devolução da moto ao término do contrato, na data e horário estipulados, o LOCADOR fica no direito de renovar
        automaticamente o contrato pelo mesmo tempo da locação anterior.<br>
        3.2. Caso, em alguma das manutenções supracitadas, seja necessária antes ou durante o período estipulado, deverá ser arcada integralmente pelo
        LOCADOR, salvo nos casos em que o LOCATÁRIO tenha dado causa ao evento, por mau uso.<br>
        3.3. Os gastos decorrentes da manutenção preventiva periódica supracitada, bem como o valor pago pela mão de obra do profissional que realizará o
        serviço, serão suportados pelo LOCADOR.<br>
        3.4. As manutenções que não foram citadas na cláusula<br>
        3.1 também serão arcadas pelo LOCADOR, quando forem necessárias e atestadas pelo mecânico do mesmo.<br>
        3.5. No caso de problemas mecânicos e/ou elétricos (quebra, defeito e/ou desgaste) percebidos em ocasião diversa da manutenção preventiva
        periódica, o LOCATÁRIO deverá informar imediatamente ao LOCADOR, bem como apresentar o veículo a este, no prazo de 24 horas, para reparo a
        ser realizado em oficina mecânica designada pelo LOCADOR.<br>
        3.6. O LOCADOR manterá proteção veicular no veículo, caso o LOCATÁRIO contrate os planos de seguro descrito no início deste contrato, caso não
        haja interesse de adquirir proteção veicular por parte do LOCATÁRIO, o veículo seguirá por total responsabilidade civil e criminal do LOCATÁRIO,
        ficando responsável por quaisquer danos causados ao veículo alugado ou a terceiros.<br>
        3.6.1 Caso o LOCATÁRIO opte por contratar alguma proteção veicular (seguro para pane, seguro para terceiros, seguro para o veículo alugado e
        seguro com moto reserva), fica a observação em que o seguro veicular só será válido dentro do perímetro de até 230 km (duzentos e trinta quilómetros)
        de distância da base da locadora, sendo que, a proteção veicular para terceiros fixada no valor máximo a ser coberto em até R$ 10.000,00 (dez
        mil reais), caso os danos a terceiros ultrapassar trinta mil reais, o valor excedente deve ser cobrado do LOCATÁRIO.
        3.7. O LOCADOR não é obrigado a disponibilizar veículo reserva (caso o mesmo não seja contratado previamente) e não se responsabiliza caso o
        LOCATÁRIO não possa dirigir devido à indisponibilidade do veículo.<br>
        CLÁUSULA 4ª – DAS OBRIGAÇÕES DO LOCATÁRIO<br>
        4.1. É de responsabilidade do LOCATÁRIO, a observância básica dos itens do veículo, como calibragem dos pneus, nível de óleo do motor, nível de
        fluido de freio, observância da marcação, sistema de iluminação e sinalização, entre outros.<br>
        4.1.1. Quaisquer danos/avarias ao veículo serão apurados no final do contrato e os custos de reparação serão arcados pelo LOCATÁRIO.<br>
        4.1.2. Os custos de revisões reparatórias causadas pelo mau uso dos veículos correrão por conta do LOCATÁRIO. Caso a bomba de combustível
        queime ou danifique por falta de combustível ou negligência, quando o veículo estiver em posse do LOCATÁRIO, este deverá arcar com o valor integral
        da peça, mão de obra, reboque do veículo e demais valores inerentes ao reparo.<br>
        4.2. É de responsabilidade do LOCATÁRIO o pagamento de quaisquer multas relativas às infrações de trânsito inerentes à utilização do veículo
        cometidas na vigência deste contrato.<br>
        4.2.1. O pagamento das multas pelo LOCATÁRIO deverá ser realizado imediatamente após a constatação no sistema do DETRAN,
        independentemente de qualquer procedimento, seja transferência de pontos ou recurso.<br>
        4.2.2. O LOCATÁRIO concorda que o LOCADOR irá indicá-lo como condutor/infrator responsável pelas infrações de trânsito apuradas durante a
        locação, nos termos do artigo 257, parágrafos 1º, 3º, 7º e 8º do Código de Trânsito. A partir da indicação, o LOCATÁRIO terá legitimidade para se
        defender perante o órgão atuador.<br>
        4.2.3. Qualquer questionamento sobre eventual improcedência de infração de trânsito deverá ser feito exclusivamente pelo LOCATÁRIO perante o
        órgão autuado.<br>
        4.3. Ao ocorrer as multas acima mencionadas, quando a autuação da infração chegar ao LOCADOR, deverá o LOCATÁRIO comparecer em local e
        data estipulados pelo LOCADOR, para a assinatura do auto de infração, com o intuito de transferência dos pontos para a sua CNH, sob pena de
        pagamento ao LOCADOR na quantia de R$ 200,00 (duzentos reais), em caso de perda do prazo para a transferência dos pontos.<br>
        4.4. Caso o veículo seja rebocado por estacionamento irregular, ou outra hipótese a qual tenha dado causa, o LOCATÁRIO deverá arcar com todos os
        custos necessários para a recuperação do veículo junto ao respectivo depósito público. O LOCATÁRIO deverá arcar também com multa contratual de
        R$ 30,00 (trinta reais) por dia pelo período em que a moto estiver no depósito, a título de lucro cessante.<br>
        4.5. É proibido o LOCATÁRIO acionar o serviço de proteção veicular do veículo, objeto deste contrato, sem a expressa permissão do LOCADOR, sob
        pena de multa de R$ 200,00 (duzentos reais), além da obrigação de arcar com eventuais custos de reboques e/ou transportes necessários, caso o
        serviço de proteção veicular não os disponibilize mais, devido ao limite de utilizações mensais deste serviço.<br>
        4.6.O LOCATÁRIO se responsabiliza por quaisquer acessórios do veículo que estiverem em sua posse, como por exemplo chave de ignição,
        documento do veículo, entre outros. Caso algum acessório do veículo seja perdido ou danificado, o LOCATÁRIO deverá arcar com todos os custos
        necessários à reposição.<br>
        4.7. É proibido o LOCATÁRIO sair do perímetro urbano da cidade onde a moto foi alugada, com o veículo objeto deste contrato, sem a autorização
        expressa e por escrito do LOCADOR, sob pena de multa de R$ 150,00 (cento e cinquenta reais), exceto se o LOCATÁRIO adquiriu o plano saída da
        cidade, além do pagamento dos custos para o retorno do veículo para base da locadora, bem como o pagamento de eventuais danos ocorridos com o
        veículo, inclusive caso furto e força maior. 4.9. Em caso de roubo ou furto do veículo, o LOCATÁRIO se compromete em avisar imediatamente ao
        LOCADOR, bem como a comparecer à delegacia de polícia mais próxima da residência do LOCADOR para registrar a ocorrência.<br>
        4.8. O LOCATÁRIO se compromete a comparecer à sede da empresa de proteção veicular, ou outro local especificado por ela, a fim de cumprir com
        procedimento de indenização do veículo.<br>
        4.9. Caso o LOCATÁRIO se envolva em sinistro, estando sob efeito de álcool/entorpecentes, ou se não fizer o teste de embriaguez requerido pela
        autoridade, este deverá pagar ao LOCADOR o valor da tabela FIPE do veículo, caso a indenização da proteção veicular seja negada e/ou com todos
        os custos inerentes à recuperação do veículo junto ao depósito, em caso de reboque.<br>
        4.10. O LOCATÁRIO deve manter as características originais do veículo, deste modo, a instalação de adesivos, pinturas especiais,
        equipamentos e outros, na constatação da falta ou danos e descaracterização do veículo, fica sujeito a multa de R$ 150,00 mais o pagamento
        do reparo ou substituição de peças ou avarias do veículo.<br>
        4.11. É de responsabilidade do LOCATÁRIO o pagamento e a troca do óleo do motor a cada 1.000 km (mil quilômetros) rodados e filtro, de
        acordo com as especificações do fabricante do veículo. Será exigido foto do painel do veículo e nota fiscal da compra do óleo, em caso da
        não realização da troca de óleo no período certo, fica sujeito a multa de R$ 100,00 (cem reais).<br>
        4.12. Aceitar que o LOCADOR promova, pelos meios processuais de que venha a dispor, o seu chamamento aos feitos judiciais promovidos por
        terceiros decorrentes de eventos com o veículo alugado, cabendo-lhe assumir o polo passivo nas demandas, inclusive quanto aos valores reclamados
        por terceiros e/ou para assegurar os direitos regressivos do LOCADOR. O LOCATÁRIO será responsável pelo pagamento de lucros cessantes que
        terceiros possam pleitear judicialmente em razão de conduta irregular do LOCATÁRIO.<br>
        CLÁUSULA 5ª – DAS OBRIGAÇÕES DECORRENTES DE COLISÕES E AVARIAS DO VEÍCULO<br>
        5.1. É de responsabilidade do LOCATÁRIO o pagamento do reboque, taxas e reparos ao veículo objeto do presente contrato ou a veículo de outrem,
        na ocorrência de acidentes e colisões sofridas na vigência do presente contrato, quando não contempladas pela cobertura da proteção veicular
        contratada para este veículo, independente de dolo, culpa, negligência, imprudência ou imperícia do LOCATÁRIO.<br>
        5.2. Na ocorrência da necessidade do pagamento da cota de participação da proteção veicular, a quantia será integralmente de
        responsabilidade do LOCATÁRIO, no valor de R$ 900,00 (novecentos reais), 24 (vinte e quatro) horas a contar da comunicação ao LOCADOR.
        No caso em que o LOCATÁRIO resilir o presente contrato, 24 (vinte e quatro) horas a contar do momento em que teve ciência da resilição,
        quando realizada pelo LOCADOR.<br>
        5.3. Será de responsabilidade do LOCATÁRIO, o pagamento de taxas e diárias para a liberação do veículo decorrentes ao reboque realizado pelo
        Poder Público, nos casos supracitados.<br>
        5.4.A responsabilidade determinada nos itens supracitados permanece estabelecida, inclusive, caso o LOCATÁRIO não se encontre no interior do
        veículo objeto do presente contrato.<br>
        CLÁUSULA 6ª – DO PAGAMENTO EM RAZÃO DA LOCAÇÃO DO VEÍCULO<br>
        6.1.O LOCATÁRIO pagará ao LOCADOR o valor citado no início do contrato semanalmente, realizado em toda segunda-feira.<br>
        6.2. Caso o pagamento seja realizado após a data acordada, o valor sofrerá um acréscimo de R$ 30,00 (trinta reais) a título de multa, bem
        como um acréscimo de R$ 20,00 (vinte reais) por dia de atraso a título de juros.<br>
        6.3. Após 24 (vinte e quatro) horas do não pagamento semanal acordado, o LOCADOR poderá encerrar o contrato e bloquear o veículo, entendendo
        que o não pagamento confirma o cancelamento do contrato por parte do LOCATÁRIO, e que o LOCADOR poderá usar o valor caução para cobrir os
        débitos e restante das diárias prevista em contrato da cláusula 8.1 e 8.1.1.<br>
        CLÁUSULA 7ª – DA QUANTIA CAUÇÃO<br>
        7.1. Estabelecem como partes, a QUANTIA CAUÇÃO no valor total descrito no início do contrato, a ser integralizada até o ato de retirada do veículo.
        7.2. Ao término da vigência do presente contrato caberá ao LOCADOR restituir a integralidade da QUANTIA CAUÇÃO ao LOCATÁRIO no prazo de 30
        (trinta) dias úteis, a contar da devolução do veículo por parte do LOCATÁRIO, conforme as seguintes CONDIÇÕES: A devolução do veículo em perfeito
        estado, em condição equivalente à observada ao último checklist de vistoria, e após vistoria realizada por vídeo enviado para o WhatsApp do
        LOCADOR; a inexistência de aluguéis, multas de trânsito ou multas por descumprimento contratual pendente por parte do LOCATÁRIO; após
        realização da manutenção necessária do veículo, caso haja necessidade; após descontados quaisquer outros subsídios pendentes.<br>
        7.3. Na hipótese de não estarem observadas as condições acima dispostas, o LOCADOR poderá utilizar-se da QUANTIA CAUÇÃO para adimplir
        subsídios eventuais ou reparar danos causados ao veículo, que não decorram o desgaste natural e a utilização adequada do bem, hipóteses em que
        só será de direito do LOCATÁRIO a quantidade remanescente a tal utilização da QUANTIA CAUÇÃO.<br>
        7.4. Os gastos com o combustível do veículo deverão ser arcados integralmente pelo LOCATÁRIO, e sempre devolver o veículo com a mesma
        quantidade de combustível contido no veículo quando a entrega deste foi realizado pelo LOCADOR, sob pena de desconto na QUANTIA CAUÇÃO do
        valor necessário a atingir tal quantidade de combustível.<br>
        7.5. Qualquer valor que implica a cobrança por passagem, estacionamento ou pedágio do veículo durante a posse do LOCATÁRIO, deverá por este ser
        arcado. Caso o LOCADOR seja cobrado por qualquer valor desta natureza, o LOCATÁRIO deverá reembolsá-lo imediatamente.<br>
        7.6. Caso o veículo seja devolvido sujo, será cobrada higienização no valor R$ 80,00 (oitenta reais). Na hipótese de lavagem especial será
        cobrada também 1 (um) dia de locação, ou quanto for permitido, até a disponibilização do veículo, limitadas a 10 (dez) diárias.<br>
        7.7. Quando o documento do veículo não for devolvido, será cobrada uma taxa de R$ 150,00 (cento e cinquenta reais).
        CLÁUSULA 8ª – DA VIGÊNCIA E RESCISÃO<br>
        8.1.O presente contrato se inicia na data de sua assinatura com prazo mencionado no início do contrato. A motocicleta
        mencionada deverá ser devolvida no final do contrato até às 12h00 (doze horas) ao LOCATÁRIO, caso não seja devolvida no dia previsto, o contrato
        poderá ser renovado automaticamente.<br>
        8.1. Em caso de devolução antecipada, o LOCATÁRIO pagará uma multa no valor de 50% (cinquenta por cento) das diárias restantes, não
        recuperando qualquer ônus ao LOCADOR.<br>
        8.2. É assegurado às partes a resiliência do presente CONTRATO a qualquer tempo, bastando, para tanto, dar ciência a outra parte, cabendo ao
        LOCATÁRIO a devolução do veículo ao LOCADOR em local designado por este no seguinte prazo: 24 (vinte e quatro) horas a contar da comunicação
        ao LOCADOR. No caso em que o LOCATÁRIO resista ao presente contrato. 24 (vinte e quatro) horas a contar do momento em que teve ciência da
        resiliência, quando realizada pelo LOCADOR.<br>
        8.2.1. Caso seja necessário o acionamento de guincho/reboque para buscar o veiculo alugado, será cobrado toda a despesa de transporte do locatário.
        8.3.O contrato poderá ser rescindido em pleno direito pelo LOCADOR, independentemente de qualquer notificação, e este, sem mais formalidades,
        providenciará a retomada do veículo, sem que isso enseje ao LOCATÁRIO qualquer direito de retenção, indenização ou devolução da quantia caução,
        quando:<br>
        8.3.1. O veículo não pode ser devolvido na data, hora e local previamente ajustados;<br>
        8.3.2. Corrija o uso inadequado do veículo;<br>
        8.3.3. Corrigir apreensão do veículo localizado por autoridades competentes;<br>
        8.3.4. O LOCATÁRIO não quitar seus subsídios nos respectivos vencimentos;<br>
        8.3.5. O LOCATÁRIO acumular uma dívida superior a R$ 50,00 (cinquenta reais), caso no qual o veículo deverá ser entregue no local determinado pelo
        LOCADOR, imediatamente, sob pena de multa de R$ 150,00 (cento e cinquenta reais) por dia, salvo acordo contrário entre as partes.<br>
        8.4. Fica desde já, pactuada a total inexistência de vínculo trabalhista entre as partes do presente contrato, sendo indevida toda e qualquer incidência
        das obrigações previdenciárias e dos encargos sociais, não havendo entre as partes, qualquer tipo de subordinação e controle típicos de relações de
        emprego.<br>
        8.5. Nos termos do artigo 265 do Código Civil Brasileiro, inexiste solidariedade, seja contratual ou legal entre o LOCADOR e o LOCATÁRIO, razão pela
        qual, com a locação e a efetiva retirada do veículo motorizado, o LOCATÁRIO assume sua posse autônoma para todos os fins de direito,
        responsabilizando-se por eventuais indenizações decorrentes do uso e circulação do veículo, cuja responsabilidade perdurará até a efetivação da
        devolução do veículo alternativo.<br>
        CLÁUSULA 9ª – DA DEVOLUÇÃO DO VEÍCULO<br>
        9.1. Ao término do contrato, o veículo deverá ser devolvido no local, dia e hora indicados pelo LOCADOR, sob pena de multa de R$ 150,00 (cento e
        cinquenta reais) por dia.<br>
        9.2.A não devolução de veículo pelo LOCATÁRIO, após notificação realizada pelo LOCADOR, configura crime de APROPRIAÇÃO INDÉBITA
        conforme artigo 168 do Código Penal Brasileiro, com pena de reclusão de um a quatro anos de prisão e multa.<br>
        CLÁUSULA 10ª - DAS DISPOSIÇÕES GERAIS<br>
        10.1. Quaisquer notificações e comunicados enviados sob esse contrato podem ser realizados de forma eletrônica (e-mail ou WhatsApp), escritos ou
        por correspondência com aviso de recepção aos endereços constantes do preâmbulo. Ficam as partes obrigadas a fornecer tal informação.<br>
        10.2. Todos os valores, despesas e encargos de locação específicos de dívidas líquidas e específicos para pagamento à vista, passíveis de cobrança
        executiva.<br>
        10.3. Eventuais tolerâncias do LOCADOR para com o LOCATÁRIO no cumprimento das obrigações ajustadas neste contrato específico mera
        liberalidade, não importando em hipóteses de novação ou renúncia, permanecendo integralmente as cláusulas e condições aqui contratadas.<br>
        10.4. O LOCATÁRIO autoriza o LOCADOR a coletar, usar e divulgar sua imagem para fins de cadastro, defesa e/ou promoção.<br>
        10.5. O LOCATÁRIO concorda que sua assinatura no contrato, implica ciência e adesão por si, seus herdeiros/sucessores a estas cláusulas.<br>
        10.6. Fica eleito o Foro desta cidade e Comarca de Rio de Janeiro RJ, como competente para dirimir quaisquer questões que possam
        aconselhar da aplicação do presente CONTRATO, por mais privilegiado que seja ou venha a ser, qualquer Foro.<br>
        10.7. E, por serem assim, justas e contratadas, as partes firmam o presente instrumento em 02 (duas) vias de igual teor e forma, para que produza
        seus efeitos legais, após ter lido o seu conteúdo ter sido claramente entendido e aceito.<br>



</div><br><br>

        <div style="text-align: center; font-size: 12">Rio de Janeiro, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br><br>

            <img src="data:image/png;base64,{{ base64_encode(0x646174613a696d6167652f706e673b6261736536342c6956424f5277304b47676f414141414e5355684555674141416b4141414147564341594141414157675534334141414141584e535230494172733463365141414941424a52454655654637746e59477835446153706b6b50646930345463515a4d4775425269616342644a356f4c46416b6755614430617952476f4c4a414d75597554426a5165316a6266464a335a314666456e6b414154784e6352477a4d374430676b766b776b666f4973636c33344277454951414143454941414243596a734534325836594c415168414141495167414145466751515351414243454141416843417748514545454454685a774a517741434549414142434341414349484941414243454141416843596a674143614c71514d32454951414143454941414242424135414145494141424345414141744d525141424e4633496d444145495141414345494141416f67636741414549414142434542674f6749496f4f6c437a6f51684141454951414143454541416b514d51674141454941414243457848414145305863695a4d41516741414549514141434343427941414951674141454941434236516767674b594c4f524f4741415167414145495141414252413541414149516741414549444164415154516443466e7768434141415167414145494949444941516841414149516741414570694f41414a6f753545775941684341414151674141454545446b414151684141414951674d4230424242413034576343554d414168434141415167674141694279414141516841414149516d493441416d69366b444e68434541414168434141415151514f5141424341414151684141414c5445554141545264794a677742434541414168434141414b4948494141424341414151684159446f43434b447051733645495141424345414141684241414a454445494141424341414151684d527741424e4633496d54414549414142434541414167676763674143454941414243414167656b494949436d437a6b546867414549414142434541414155514f51414143454941414243417748514545304851685a384951674141454941414243434341794145495141414345494141424b596a674143614c75524d4741495167414145494141424242413541414549514141434549444164415151514e4f466e416c44414149516741414549494141496763674141454951414143454a694f41414a6f7570417a5951684141414951674141454545446b41415167414145495141414330784641414530586369594d415168414141495167414143694279414141516741414549514741364167696736554c4f684345414151684141414951514143524178434141415167414145495445634141545264794a6b7742434141415168414141494949484941416843414141516741494870434343417067733545345941424341414151684141414645446b414141684341414151674d423042424e423049576643454941414243414141516767674d674243454141416843414141536d493441416d69376b544267434549414142434141415151514f51414243454141416843417748514545454454685a774a517741434549414142434341414349484941414243454141416843596a674143614c71514d32454951414143454941414242424135414145494141424345414141744d525141424e4633496d444145495141414345494141416f67636741414549414142434542674f6749496f4f6c437a6f51684141454951414143454541416b514d5167414145494441466764767439726664524c662f2f7557542f2b305a6a312b585a666c772f384f763637716d2f35392f41784e414141306350467948414151674149452f436577457a6a664c737679784c497371626b6f78766f75696456322f4c7a564376334d494949444f3463366f45494141424342515347416e644e49707a695a7939716337685a61727532324369424f696170547444534341326a4e6d42416841414149514b434477634d76717537754a43454a486e6330507153476e5179717576753051514831354d786f454941414243447768384f52555a7953686f385130335a4a4c2f3763395235543663464b6b6b477655426748554343786d49514142434544674f59476432426e78564b64565750635057534f4f576c4865325555416459444d454243414141526d4a6e4158504e767a4f70464f64725a66637156546d62662f667654727274303855745030374647767566414c7441594c4341485541436f6d49514142434d784b494f6a706a6b6e6f57474a33753932325833397470316d57376a567445555531394a4c597265785064776841414149516d4a7a4158665245754a32314677582f5870626c39393776367a6c52454c33644e72732f5938537a52634b615241414a6b4767434151684141414a2f456e673435656c3147326766676d596e4f703578336f6d687235646c2b634c54746d674c515851414367456b5a68484e49414142434d784d344d52546e6b337362443870482f6f4e7a43632b523554536c352f6c37785978416d6a6d6973626349514142434277514f4f486835666354692b5257373974585a79624443634a6f656a474541446f7a34786b62416843415145414375394f656c7265337068553761736737697149665a6e785a49774a497a55546151514143454c67776763616935314b337363354d677764523550334c73366c4f685242415a32597959304d41416841346d55416a346350447478336a327569585a35632f4655494164557853686f494142434151686342642b507a69354d2f374363394d7a2b303473584d336378644558693971764b7751516743357078344749514142434d516b734c7439346e48724a496d65532f77794b326130664c787950423236334f3078424a42506a6d454641684341514667436a734c6e5466527779684d323149654f655971684b7a77306a5141614d342f784767495167454357674a50775166526b53592f5834433647616b384368373439686741614c322f784741495167454475536a2f3966443339582b6b47782b327453584c4d3656516f3352346237764d62434b424a6b707870516741436378436f764c4c6e7447654f4e506c736c6f366e6852394775543247414a6f30325a6b32424342774c514956777566744a2b756a62467258696c724d3256546b306e354334572b50495942693568396551514143454a4149564778576e505a49684f6474645058625977696765584f626d554d4141674d545150674d484c7a425848635551756e37627439486d5434434b456f6b38414d4345494341514b4469425961632b41683861584a4d6f454a346234624433484a46414a487445494141424159675550484a697644505967794148786366434467496f57547831462b50495942496177684141414b424352514b4830353741736630537134353352373766566d576e3964312f5564504e6769676e72515a4377495167494249414f456a67714a5a47414a4f70304a6670516e31654e73344169684d3675414942434141675756422b4a41466f784e772b68687238314e4d424e446f6d59622f454944414a5167676643345252696178492b42306536795a454549416b613451674141455469534138446b52506b4e33492b42776538786443434741756f57666753414141516a38536142552b4b7a722b76614d425038674d4349426839746a626b4949415452694275457a424341774c49464334634e503259654e4f49342f4933415851756d447656385745716f575167696751764a30677741454947416855434238777277777a6a4a50326b4c4151714267585479614c785a434343424c7047674c4151684177456a675875442f75537a4c46324c58346f49753271635a424d4952754b2b54354e63766863365a31773043714a41303353414141516a6b434267662f445158384e7a342f42304349784b6f2b4e784c6d713538757867424e474a3234444d4549424365674548382f4d71447a65484469594d6e454b693450535a645443434154676771513049414174636d634c7664306a462b6573447a31542b6537376c32436a41375277495651756a774e4167423542676b54454541416e4d54454937752f31695735662f32654d332f334a4667396c636b55436945586f6f67424e4156733451355151414333516b4974377a6b5a784f364f382b4145426949674c4457486d667a3944597a416d69676f4f4d71424341516b344277792b7372546e31697867367678695567724c763935443637414545416a527437504963414245346d49427a4a5377396a6e6a774e686f6641734153454e66685342434741686730376a6b4d41416d6353454937684554396e426f697870794967724d654e782f744a45414a6f7168526873684341674163426f646a7930335950304e6941674947417343343361322b33704246414272673068514145356959674872667a7350506361634c7354795167697143334378514530496d42596d674951474163416b4a68355a62584f4f484530777354454e5a716d763050434b414c4a7746546777414566416749425a5662586a366f7351494246774c436d6c30515143366f4d51494243467952414c653872686856356a514c675a77495167444e6b676e4d457749514d424551337571633750462b48784e56476b4f674c34486252785830616b5145554e39594d426f454944414167647956343866766648484c61344134346949456a745979416f6a3867414145494c416a4949676666755646786b426749414b76316a5143614b416734696f45494e43576743422b754f58564e6752596830415441733975685347416d7144474b4151674d4271426a506a684a2b366a4252522f495a4135325555416b534951674d443042484c694a3730306258704941494441344151655035364b41426f386f4c675041516a5545636a38326f75486e657677306873435951673858756767674d4b45426b63674149457a4344786546653538515079634552444768454244416e735268414271434272544549424162414b5a5731383838427737664867486753494332775052434b416966485343414152474a354152502f7a5566665141347a384558684459316a3443694253424141536d4a484477686c6a457a35515a7761526e4970424545414a6f706f677a56776841344933413464746831355736534a3541594149434c50514a677377554951434254776c772b6b4e475141414343434279414149516d49724177656b507437366d7967516d4f7a7342424e4473476344384954415267614e332f717a632b706f6f45356771424a59464155515751414143307844673947656155444e524347514a4949437969476741415168636751436e50316549496e4f4167423842424a41665379784241414b4243584436457a67347541614245776767674536417a7041516745426641707a2b394f584e61424159675141436149516f34534d4549464246674e4f664b6e78306873416c435343414c686c574a675542434777454f50306846794141675763454545446b4251516763476b436e5035634f72784d44674c464242424178656a6f434145495243664136552f30434f4566424d346a674141366a7a306a517741436a516c772b744d594d4f59684d444142424e444177634e31434544676d4d44424e372b2b57746631562f684241414c7a456b41417a5274375a6736425378503465507372435a77766e307a793133566476377230354a6b63424343514a59414179694b69415151674d4349427676672b5974547747514c39434343412b72466d4a4168416f424f426732642f466a353632696b4944414f4234415151514d4544684873516749434e774e457676355a6c2b586c6431323973466d6b4e415168636b514143364970525a5534516d4a6a41375862375a566d5776373141774d5050452b6347553466416e67414369487941414151755179427a2b765044757137665832617954415143454b676967414371776b646e43454167456f476a30782b652f596b554b58794277506b454545446e787741504941414242774b5a3078397566546b7778675145726b51414158536c614449584345784d344f426e37377a335a2b4b38594f6f5165455541415552755141414377784d342b746e37736979632f67776659535941415838434343422f706c694541415232424f37694a4c32524f663079362b337a45353576597337632b754c306832794541415365456b414142556d4d65784650477750664a776f534539796f4a39446a5a49616676646648435173516d4a454141756a6b714c2f594950693537736c785966683641706d546d54524139656b4d503375766a784d574944417241515451695a48505842306a676b364d4455505845376a6462723874792f4c586a4b577135335034325874396e4c414167566b4a4949424f6a507a4272316265764f4b394a53634768364772436554792b7a35417364446e394b633652426941774e51454545416e68562b34505941414f696b32444f74446f494d416576584a692b7062617a3445734149424345516d674141364b546f496f4a50414d327758416b702b377877783377626a394b644c47426b454170636d674141364b62795a5836346b7237694b50536b3244467450774369417a4c66426550616e506b5a59674d4473424242414a3255414175676b38417a626855446d41663948483878692f2b44326d6c6c4d645148434942434151446743434b4354516949384832472b4c58445356426757417038524541542b4a333073442f7a7a7a533853446749513843434141504b67614c51683368354141426d35306a774f41554867507a6f72352f754275444b664a4d5568686963516745427641676967337353585a5645456b4f574b2b4951704d43514558684a513876744a5a2f6e57315947346b6b555534594d414243434141446f684234546e4937695350534575444f6c446f4b55414f724c4e52594e502f4c414367566b494949424f694c547766415143364953344d4b515041554867507874494f674536734d326138516b66566941774451454530416d6852674364414a306875784551387675704c386f4a7a6f4674535542316738424145494241654149496f424e434a447767536a452f4953344d36554f67735143367666435335333938776a656c6c6675743165382b766e2f74622b6b646241385130762b322f55742f2b374375362f645467727259704246416e514d71506839424d6538634634627a49344141386d4f4a7066594578492f32506e4f454339583234576b3641674b6f4b6437506a534f414f674e6e754f34456842504f567a3464436e3865674f3465796b73504b4e626948414e4555493551344c386a67446f48523378416c424f677a6e46684f44384346514c6f63444e4241506e4661485a4c596831574d53474356464c42326947414f6764457554326750417a61325732476734424d6f4b454153733964704f6330507676486d7048444d3358446832643950466b67676a787064724b46414f6f45656873474164515a4f4d4e314a564235577946334176524b415045542b4b3552486e4d7735314f665a78415151594f6c42674b6f6338435571324f755a6a73486865486343445157514c2f636636587a3643384379433243317a5055384e546e475377655878676f685242416e594f46414f6f4d6e4f47364571675551496443686d2b416451336c4a5161727a4d6353427639656c75582f724f76362b465036456c76306155774141645159384e36387568673541656f5946495a794a61446d2b4b74426a33496641655158717676746f4d3167457036583237413733504a36475a44494e54797430537647753252314949424b714258324d57774f484b4d574d7162627551514d4f6637553059774165765553524a3639454d4e2b6344736f4361444538524a4371464c3870464f6333782b51376c2b47714e414f6c5a4d763468374b52775771647873456b4466524133764b41394433376769676a6e46684b4438436c527650676744796938557a5337666237562f4c736e7a785970524c504574566d594e5061322b4a7a53696e514c66623761646c5762342b794b787039787345554e743638346c314246424832417831436f47536a654c4230566362554c6f4354773942502f73332f5a577345757a62376662747369772f5a746f4f7a6249692f374c6972384432365378466e374e7a562f4a72784459496f493552557836413567536f59304232512b324f694e502f7972642b43734d674674776a3677696751766135626d4c394f5833547a73336a3164384c62372b616276324a445063756e6e6136596c794c702f6c5a476d2b506667676744347143446550696e44495a4259784e6d76434663542b73466439563270776f7551584265736d45304c415a446e7361594468685437524d776d65503179694354684755686e6766726a752f7968445445674b6f5531794d43556c423778655833503378354d6b705261775441746468684f634e63754d395a5a315a503679584136724769363868633931595836766d61427972652f306f38432f354f4f55615167446c79724854333431584a31554c314d6e6c4b63794d634455335569412b627262707976724c437039664361416a75314d57623557787366594d79644b776a6c336d5a7869767177417146443849494855783061364d514e5146557a6162612f53714f4b31416f4c354967596f4376466c384a5942652f6e6f70797139744971344b617a78475a476d596f347634535845326a486d59313934355939786e39734f3773664765557974377166357a4174534b377336753851693636785644682b6d48484b4b676744334f593771436f51545367657372416654714d786a545872324b38546a69396d6869794f642f78453366666230615439594f582f476778444c58706d62746a536838637a787966302b38454541355367352f4c37677477416d44412f64584a676f4536564e544d78614e5846687169764464746c6b414559666e55536e49382b45456b4a6876546571704f50592b4f4533384b4479522b6952705a6c78445354676a67484956336548766d5a655050527668353356647633455947684e50434968586a4171373454594d5a56493162516f32336366687a414a6f31676334633347796e6c434d3972432f4b6b4261627536714431757357766c5357394e612b5a584c3062502b7673554e416451684167584a69514271464a65435453486e69667652656d37417948382f5177444e567279562b4266476f646b4a68654b7a7459306f5070724f7159437a757a386968304f38733632686252394141466c58585546374246414274415a645041724645376334426470426357444d435a42443768634b6666664e325745715430324965645a6c6259712b764d2f44553278597833345644302b6657735863302b36324a794f41504b6d2b73465567674959705242337775513168694d50506d572f6e505072454b64436469454e424e677567325971337369415151472b557574565251323178396173777a6f38703145556f4b6e6e626f38322b526947414f6841334c67375842644a68656b4d4d596469593338574d49573554465a436a67427334767a4c7a6c47576d30434e41507a3246732f7a7961782b4849664a597a4c46753469634246483361733637327232444d56327575327063684e6f452f4c394a756d3738496f4d61524b3768486a41427145424e427a487a32616e7a6a3152576238503973424b576237785a31424642462f6f73665044574a7a7770336d6e515663367a37656852716a4a73414b76686c38564573706846416a3649524164526b69583571314c67774545414e59704b4a776176624c6b6466494a2f3647506c56694d544e7956794d4f514853466b586c74396a436e77434a7078366e624f69696239556971474363772b535a36526279347a3641414e4c71536e4572546f434b30626c3146417247793674466f336a392b3771752f33427a6645424444515851397838506d4c35376761543731583745304254576d763155526842417679334c3874636a2f6d647536454b7471524a415276744b6d70346946685848504e75385768734949452f4b54327756467155706b7249782b6e667a755533357147446d2b6a374d3459393158662f5361313452787a4879656a5946506f5a614746696a574838327967674336503876792f49664234684f725a3046416b55573777573273356c30706c6a4d4f756655344967624173674a3869737a434b44476741587a4a62652f4e724d4638547531414173346d6a61702b4c3761356c654a4141712f63546546587659517269772b572f7575326c6657596f514e3353685570487068744b6b6976667936795632514959445556436c7370797a614a36616c5256486f306c54644250375a4b7a446a6c66586c693870524168573839667a52584e487a57424532766a4d586c6a464858376b6175753449617a6e4d4361776c48726e636253522b556736456a6e664e65684a79356330384171694773744258446353447163736d706f444d74556d75654f534b54334c4765717168324853645a43426a4f64364371302f66676936736f326e58544f34715632432b4e636c65444268737554635635686e6d34734f34446c376d72704433785a7976574b6675764e4b7a67756b484c4e6c2f434b41736f726f4768516b637568445645656e624f314d307055335447734d72466859316173496d6c545031386a4d77676d30706e6a6b48527671374e54637a6377746464345434682f4c66634170304a4942715879737835476c6679526f73654458414477696745744b47506f55464b7452434e6b773358464d504158512f4258702f655a597779576e6a4a3278534f5878486d3848524c38453275314f4a49416665372f47494c4e7a464f68707133566c4f675a367839347a746b305633715856695a50582b7a6a6345554b3463562f3564584c69506f345261794a554954757565593238702b49617275545466537855585377434e6865695a36554e325968796d344a2f4c62307663556c764c65724461726d30767a44584d37612f39584d56382f61786d43504f7451686f353170614a5755546d3365346e745145425a4b4664304c59776b524641426177667532534f524530463037697854374542507775526b564f4a41464a66546d6d4b72304f36645466687748727663326865776c78442b6d2f596f442b7047634a38612f4c744576584a774461782b75784e2f322b697634596966664d4545454235527131615a4b362b5441585475746a5764663271316277693233556f334e6e69624969464b636152755434523938727477502b334c4d762f467563566d7056776b684c796f7446512f392f35472f4a62444f326e7a55592f2f54487953634c6e773771756162313839673842564a5243656966444174676244626d5939566d6633314c672f764a683278636e473871473839353139434a544773456541696a355a68676e394d5a65776c6e49376332735251426c6857654a727835396c506c47586d3971726d357a454d54654875752f4d792b4766417a42372b75362f706448584d36775952512f32646369494941615231465a7645396351414256786b556f4f696247316a68474c73695661412b374339787a77387543785443576244506e5849532f692f502b3465445449632b6d59566f5050546b493877306458384f6d6e574b5754697a534c3739612f51764e3674576b4451773345354b675277433153724f37586576476d62724e756e6c3668554a67586c51456a46646d30674c306d6e4d554f305a477a397732786359775874674e33684937496266667a4b5561596d4354756f546b49383433704f2f377549717873497057532b71383534573530386b64576f6d6674335679387477755037793467442f6867414371537776686972476f594970467a485146556a6654654c324e6a4b6f46554449676a6e6b4a5153726b3972755945626d45336869462b6d6b537a476574474845542f7a33336f64644b2f347671587557597864324632442b7a6256726e434b4469384f67644c59566f75337254726450796b55434f64366e41464976593573345168646b7a65776f4c31714d4c526478794d622f4371776e452f4e732f54447638753673457757666138447a7a33574a4c6a4a3346704c56743062717944754c56767043584f526351514634524f37416a4647644f674a7a6949437963346b4967324a34366a6b3443714f675763473773557448726c4a62565a6e4c7a3277337766705676715473522b59687a48755a5577784b50366f5435334d41516e4f34786c7a396c735a756d57667938485459304149334a42774c57784939596a45594a716e44465746774978494b3852315538316969383933356142654b724f5a626d2f38483477386442794f754538784e78623677373452674a363633345975614d39655731506770384c78494842654e5564616e6755357937434b43716b476d6478654c3162717830413943387557367248675854754b6b4d555869384d734b6135393443614c4e334c3652762f2b2b72393339347a626d48485347764e7a632b325167737552717835676a35564c7a7839596a62347867564733794e752b46463470334c6c2b6f4854423967564f55414171676d7463532b776b4c6557777166734f4b30757a63544f46657a4e5261783676473651367759554f442f78374973582b5347694c675a353378752b5865426178722b4d374639415147556534617061764e7247624e5874693078636649764e434e6a505858664a784641546c6c325a4d5959354b6b3254532f38346c56796454457778724c6f655259764a6a337469507752514d616771506e32346d4f614f514878376b303030536e6b30354231556f326e4d5531654e512f4c714a4b4432386b36417367703078424148554165444346634a62735541364577662b4a6c7449326c565a52454c68382b767551744858586e2f6c554c31647741492f78645a507230394366396a356254686d68354b6d7951512b61494d432b3331497757303231696c517a6378452f794277486b6c6d367644526b4b57544c69736c46336d46616f4959526937375a77684c4832624e7a474451583877526c42674b596566312b5735556468486b4e7562734b385445314570692f7268544650517a45583568374b583074676a5847786d413564647971467a30756858776f49415652447a74415841575341566442555846687542564d636235734a41756a506d4b5950784371762b58654c565545366865686971426b7657566b32326d696e42546b42464d316653394c636272666647722f774d4e5246744c4665766b4c5a70493579416d544a33497132686d49554b6e6b72707479746136355965702b71475264306b345862446134776b4c685a762b5731754134757a79794856636a705a4f4b77566f69733331794a4a6967797667396449322b3332302f4c736e79647934474b76346534674b6a38646463322f66527474465150306e2b362f304d4175534e39627442516a495a65334a31777667386a62723775425946342f686c704d51594949484678714149374a316f4d4f596f41456d506a31637753472b4f59496659504e59637a6332732b467753514d62744b6d787353597671725877746a35556f3574314659787476614b754e756256754d582b4a7a717a3469697a63524b68622b616465414b435a544b4c4f4d524e5a62577268664a4e546b32355650674249585932786b6c47665847734d2b6c3574544e72397a4270532f493441555367357444496e524a66414f557a7264684c685a4e4c6d4b4d4d517a334e5731642b4155416251565a72487754377347464a6135573138376b54376b7a2b434664543138666f687874693756303053737052344b6b2b6f5758775351454132504a6f594536525a386a336d6461554d73496b324b676947654d776967334561372f30426e65676a3662356d386d58494e4342752f36625247464a74764e73382b4f646a6e673842682b50797731412b78786a6135304d754e3754795070732f37504a734c416967585961652f4334743647326e34786532454c4774474b50444e696f49686e7145326c79785559774f5241774a4934436f4b656a6d6e68665878376855435341695159785076423646377838395a2b435379702b783743434448704d365a456776534b596d51387a336133385546324f5430702b415751314d2f7a6f794e4e5137694a6a2f64476843465a4171316e45746976654545364951465a49693334703263453471786f7a5a4f762b7836484f4b30395934417173304951332f782f512b6e4a594e684b71633356546253316c644636676254326f387a67364845596239706931652b487a342b4d4a32375458626d744e3348466e504a564274456d794d4b6f473462766e756737775964425a41704a30726e6378632b7166743370546165394f76692b35472f43434448614f5a4d6963582f3533566476386e5a6d766e765976475162785755736851332f3676664173732b30374d586742396a6c2b377a357a36484d64556145452f527a506c38595146302b735a5a576a4e327038644a34437376425430617970775456722f767454623536696c386b687368596f6741736d5a4552587452414956496a4970704e753871436f2f6d56346e69787056344e50656c4f6651584177696237436446576d51327a526f5178587852446f6e725a4974736d4277566d49547874585464696573675a37347042796366482b6351616d306a6748497035766833595747485563614f303359335a643130335232344731514c78465676675a586b73376770687971537266496e325256354646337069375a4846454444353464614f77357972356e34636644746c647668346f5941616c6e64486d794c47305a52736573346a564f48456f7436732b4b776e3778614b435958514a2f45516f786675454c5a49756c76743975334c54384f4b374b4f4b4942795850362b7275732f5773536b6c30316a624c71636f716a31724942523250574d414371495a6d6b584246417075542f374361632f335a36354565505a7a5a3936756a594c59734645414c33414b76346f6f76694353497a30426b4d64414141626d306c455156525052414755657a356d2b4766456a4c485a5a3543376d4b6a774a5663773348334e44576a394f774c495371797976624342467865385374664364786346527a642b30667a7048634462376661765a566d2b4f4272333866524c7650494e587a687257617562547333706f54724766533564546b3056626f4c66772b6548754136616e7677496e4a56775057767a772f31743555302b59467271314c4e2b434342506d6f497451514264397352417748505952437761335172357a414b6f644f3752596c69626b7958395258624a644e564762397a67757132624844504237796f75756646372f46323565486a777732334f6a64376c6b39784e6769653977754c3748677739786b41416556413032454141475741394e42585964547639325677546650706a5864652f6c4d38365a6b3978452f3973377149416369763245656d4a445036397275742f31766776786d676249704941797231616f66733672346e4459313942344455352b626e6e777a397a70376146637831797a534b4143714e64326b33594d446b4265674a584c4f6264693767517a30752b31452f6378442b4c6839687679474b7131415444356c664e5146777a49777167616a5a4b724671304d63522f4737357172766363534c62536533786176467930797238576a4330324555415757673574785132672b3062754d4c576d4a6852754e63394c6c446f76434b436872315a666352486d6e6271574371424c357239466b486a6c7368696e7037457158524f312f59533150755361457562314762725350476a34416b4d585956616249313739455542654a45553734694959576c574c4b4f526d34735a78536c45554e7068542f4a4c68466a53736963664d2b532f4f505558456266304c2b526e78424f695753557333506758705839536c344f546e6252797241454c34324d4b44414c4c78716d34744c6f5468466e67316d414d4434735a7879716d4234707531694c566b365746626d665039567942665059346e397231632f6f76725075467946637769377a416e514b4b3448696f2f4444463458433779633241496e374c4b68674171343162635379324556397330693448397a39747963316545727075477856656c754630746c6b4938586d366f43692f504578424c4c467531465466314a6963786172324a38726b576b64557741736a412f316e365a643933644f665636766d65743950495558375358724a2b4555416c31437236714176696170746d4b624c6f4256474a353556694b63626a356447397775754341696a3371365a746562674c655a45334a30436c4265723435447239484c7a6d493649764256416e345a50573854412f6153384a49514b6f684670464833554475646f6d5549704d5044453435665a586d704f347751787a785a714c6b7869506c787535794d7464434f546d31657276346e79626e503763387a503356755674374241354b755a5843462b50637359593931656d506c734848595450634f2f7971566d37434b4161656f5639785673496c2f7a357442575a774f72557a564973644f454c74686f5849523576782b61767268784658716647564757526132653432456d6d6d7332354e6d61356558722b2f516f4379426a3349337a764633594e58313634482f38796455724e53515351537371786e5669517a4c38416348517868436d786b4a78322b6d4f34776d36327566554d6c426950354e4c4c6d4b6732726e4462554e7a4d6d35332b62495a4650304a73666d4a745048584e353961634b504a7a5a744c666631365735583831656e2f504e7636486a2f2f6c2b33566477332b325167466d62594d4173684a7a614b2b2b4276304b6d30414e4c7156775232436b464f304966746245346937327047645a6a75593669774179626f4a4e42624c6f792b6b43534d324e4b41397376317050536a326f585975562f643975633133353457615644774a494a655859376e61372f62517379396543796442584f6f4c2f785533455974683034314364467776653652754d4f70396e37635234704b375a6d4679646c79673439706962726e50526e39507a3035426a54586c3157696331773554325463496e78586e4b3035356e3042424170616c553055387353476d4530347453785453727574357574392b575a666c72786b6949516e6a314466312b2b714d2b544a754e795a5635475462784c62576272334852702b5a2b3541714363754b626245512b545458553968774f7a37386a664637515241423570706c6f793742495469394b347054636d796d625a4a52434b4262756f542b4b4b73347835594569674a526261646d544a50656b637a426f344353646c6a6d3439475a4357452b6e317872427836374d724f78767439753379374c38614f33587350326c332b486a775130423545485261454f3849677539324931544e6a55582b5954356c5a7834576858367976556f51474938336b776f6f6c5339414642736d524b7263574e31586a7333736d4c5279325642584a77714f413035647171666d58575365324772567a6950374844615936434d41444c41386d777146435235512f48304b34497438537136322b615259334c315a3771384e796544554167545979454872432b39363372694971797055345746344e385767713763636e48662f6d37496164576b7452334378306f7358624156394b474c4177454530484f49346d5a376172462b3950796a7a366e3466436d6b785441622b6e34756873314a6d703859342b5243794d337553667a5635364f327274337a563969675437314671395a4435526172734137646d786a383978346234564e424641465541612b6d712f656d55754e4c704c34696c3141626f374335684c35365059712f516178497437393256387a4b37594a516358374653637a5a6658644a4b48717553794648355139766576715662466c794441483052682f52343553454343416e6b46597a516b456164744f3073746874697571566450634e78456b6b444c47684635372b6d453431524e4667736c6d61647a5839444f7634315057736949797a6e726b53632b467434312f5839617561654c587161356844715176625439663547587370775366394545434f4d43326d4449567a7545335477754668733157656f776858424a584e3554375034574a704f4e6f33695649312f382f616c4a55634e7352394d33647137755a69655262726e462b37574a7a4b7a2b6b6953456d7439337935663430396e6137793768344c4f624574416b67453564334d55447a444c766f47544961394c5349573861466961636a526c41704e424a4456726e644f76724a6e5a4c4f5a4d5448796e6f75516f3933394d334c733770386c4271716f563232654a5568562f36375144674630596853466776546d3351774c77564138516862424b386253634b7876466e61476a532f6b715a6d4254516a786b357751664f362b7467536633697630434858776e746670567637326f34693354303763362f6976563576766964756e793941494942654d5a556255785444437769386a384763766b5956356f363331532b312f4e51466b4543674a555a4649455a6b563256626a56744c4f494e59333879486d494b7978376e364b4f5a4134686c33376c687979354d344d64642f43726b56624246414c71714a4e77324c6f666d556d5473476c6d57477a3756366731516b4b6d3075596b77426c546f61594a484e462b536c75667146696275515361754d57366b3158316b615752546d6d354872504e6b494d4e6e6375496668367369305a43774655517332706a3245786443314d54744f547a567842504677746c714934716472677854464362515333322b316679374a38495364336f546730324a6562436a6e6174633459316e3278794a626864476f6f7841414231436b5761526745554566596a304d5a726f4336467161655341774d516d324554324b702f4949746451736653304e4d61675751386b32774d4d2f414764373448664b3054346872317a556d43754371484f745a793553784441496f664a31513568753944514c6f3541694a526142725965714a7848415647506f49584e68634e717a68433573684a6c565835675a426358727344527458324467724f647272755250466c313064756b7a394d387a37394a7a7675512b634e52594336437a79393348567a615a585965714a7731414d777077434850473567706931784b543277645252506946695a424c3678434b586f3733716a46723337757674556d496746344d727a726e6e766d495a4377466b6f6457677258706c326173774e5a6a6953354f47496a6a454661425932454b4c4f554e4d716d2f6e71626c664b375271637270412f465364697458347176544e355769764f6d504a7331342b4b667738327552696b4d613432707739754c577767514271516456673037414a584f3071535033735265674e5a52397151314550476375437a623571486f627854685041687068757166447a757137664745704131366243356c73565533557967682b6271644e6972383746326b365a4f774c495372577350514b6f6a4a74624c384d6d4550375a45517355672f416270674161356851796c73624e33695575796d5a777a36737547334f686f483376466e336a456d4c636e4c4f683567317a38654e632b317a576c73576e5764736967414a4558747745516d366170666a454f51395641413246505679424d2f692b6864786c6f7851325a4e6678314877312b4c55334758364e43694b392b527773624b4d4c536a57664874746c36702f4c3269723162615a2b434b41413052614b55764979334b5a5a697336793259355741465668463231656c6b334a4d786646334f2b572f356263664d7a2f61444639746a3446337045453047567133684d426c4234422b4f376a576b722f7566314c6e387a67612b2b6c4730744250775251415454764c6b4a526568747968414b727346464667756447712f6a6c306359674a4a70764e4f7038436a5a3974797455793969743831396468792b34686f6e6e556479464f545956485a5a346a2f444f4c48574e76577033353748566437373458677655324238425a4154576f726d684b4c68745043336d6f6467307a44575a4732362b7767617a5951717a5952704557784d68626844457a5a675a347659307a56754c4d3256744b573255396464794c73723475336b4d742f3656474e416d44674545554a4259694a744173773267467762445a7476305372545666433046767556476f38375034752f64706e734f476e4969756541366671337775544d5a6171504f315a715765576d4a6455732f315056427532735451414146696139596946324c662b2b70477a66626f5461565063766342724e7265336f384c527453713833656d426475496b686363376c6c4d707851462f4b7a32646f7a354e747758484f4a77742f6a4555414142596d4a57497850337a4272634d31532f4d5259756d336b7054453553336738383166596c422b3746543877616f69506772615a574641474c326b6a724d4e6d646359515a7752515358447059794b4141444c68617464593359784750525a57353966716c4b466435443633624a6e726d6645554e734c4879545862374174383258777a6264624f34736330647338635042704c594e426b587266623764746c575834554f54544c4e5846386d6b3141414145554b4d6a4b3164475a4732594e4b71486f7670736664593537506f62356e6c4c6f4c534c7450712b6d562b51462f75787866376a2f59764437567a6c36742f2f505a566d2b714d6e6a58642b6d504a783866477047794d306d6337766462723874792f4a586357366e724176524e357064684141434b46416768634b55764232794d4269753849656333324d616962464d335a706362656653326843507a56547a754254343947796150397a46304b393330624f396279574878507233356a7973446c6e61357936327643394372414c586533774c4739724f5177414246436a5734715a35796f5a5a67386c532f4b35552b484b627a4a31703933694b65625950655a4d54675763354a544b7253556550766b4f4c6e775241344f773652364f34375a5a7648736d416a58454a494943437855346f544e30337a46704568754a3371634b6e436f33656f6b2f497355394333744d2f693169757a6376432f7137436f4e4348366d3543627272564757744d652b5a624e55674d4445304141525173664d4c6d4e4a52494d42612f5332777557306f5a3575363232655453325342474e315064664e747853382f79704d3845525072586e55504c79586357514c383866504c6861476f2f722b7636546375355978734347774545554c42635544616f6b6136514441382b44695873314c525234746e724f534344494e756d6431704d68413161445946487530754a6e775245795157504f714f4d3878436753313045655351664e746f52514143315931746b57536e38486f5770794c6d4354734b4a316d62316b6f56506957634330434f6d6f686a62522f6e556d4b6a7343744a5337564c3872694631674450623564616d52303461593367356f586c6d66426b37547741426c476655745956594d49596f464c66623761646c57623457414a3532306944345674306b7439483045454146562b496859694b75682b6f5950544577784271726d626767694b7359464f546371594b37686956397879534141416f594e3248447243704d766159737a4f5053707a2f62354d524e76476c4d686333754d533343624559664e394a3045764e6c72377a7464557579343379654469586b5a56564f43766233666c574e64545a4c78682b544141496f594e774534524469367677496e6158346552793142777a6a753076696c58437a4455416366343877584837646272642f4f6237453846573658507157312b4f6b6862796f79674f686a75316443694f344939635366504d6c6741447935656c6954626c616a7934616c446e635955337871772b4652367559476a6569464a61516d3546465642637378475943744d4358626c3179755647616b344b343476536e5735515a36425542424644413342414c6663684e4b7545552f58386a5831706741346274304357526958744d785846446e2f37736e577677647565666c325835593133586c352f52474333584c50344b7772776f4a7757373732374f55674d7363614674487749496f44366354614f49563039687231674e6d3237594f5a67434a6a5157593171303252774e6e377643662b7737306d5a307a375030624644363349586c33315333756a4c356b58766e306f64315855313878567a6633484c506555736930485a75416769676f5045584e7136712b2f4f74706d305150386d46715971663868794c707743785849586638324649515371654372324a6e767570592f72762f4e5065422f54377571372f5a59466c794c75514e6377795639714f545141424644522b53684878334379394d416a43625274717575496e696b4d5845574b38436b387875557738646f4c6f54656838504d464138427773384e79617464515a59393635354c705837634c4f664151515145466a336e4f7a394549672b72774e4e3258787932303239773237656c307141766f68376c4f64786e6e6c2f4258735a4e375762684c476c72797a434b73726347594f38516855463970345537714752364b594d42576e316d53557a58337a596462694a32345156654c516542562b71644f66316a6c2b5266753557714f75315a776442506356733266734f534741417364504552527163576f39545750787139726757382b6c705831566e4e54455652525a2b326c792b744d79364d4674432f6d537a512f6a2b67393134525938504c6a586b4141437143486357744e6955546c645449682b546e33726135384c776f5a547a4f7032753332374c4d75506874786a4d7a4c41756d4a5459663065436943682f794f32724b4336496d666d4649384141696865544e34394567764c36527559636c4b317733793659447337354f6f70304a375a2f53486c7734643544634b4b30352b7a6b7944512b454b6465626c6d686236504d7a3239586756436a79736e453041416e5279413350434b754b6935585a4962502f6433597747635876787350417646796838665878337734654d6e495835362f4756546f5430326f317943542f4233515a412f5862664774622b523550526e677077615a596f496f4f4352456a653255345346745143654b64536968566e596442535830346c51456b516c4c774f63356933634373695a327769352b466c39736137394f3939543674544d7357587578775151514d457a524377303656582b662b6b3946655630696c746672364d6978725a56574e6d4d577045643047356d4c622b6646417069366458734f5730634d432b75376a49434b48694531594c542b33546c6472763974437a4c3179492b4e7473586f4d51545068477a33497a4e5345593152305068596d5a376b2f59764a55523631366353482b6b7a4877454530414178463470546d6b55336b61474b7367307478652f77464368395a366c6f55366c49585a3744714942337861347468546a722f346f5a6334303549594147694f4e48775a477576744a7a486b662f65676f67546e3863382b59754b4c38722b4b686e695265632f705251753369665272646a7962574c3538336f30304d414452424273546831455543694c7876564c6a344e45454c4a52534e6279655a44492b4a52516d324350745a545851454a75535a416f736d3542424241352f4b585268654c553565724c664632334e75384f5071577776744a6f3059693650646c5766374f52304874385a6970682b4e744d4d545054496b7a3846775251494d4554784565725157486358502b3848484454632b33384b2b416750456838364d523368356552667755424747794c7362312f596f4f346d657976426c357567696751614a337467437946736657596d7951734657354b543737645451476d314656424f62726246336e4f30494937666e535a66675a4934414743614634504e316b7779736f696b333847435255376d37652b567466646b674d33434d78683048786c76736542726b3252327063627059496f454643716f6f5137354f58676d4b5969464951472b58565052376272635648556252394b347862586f33347a324c57635072495770386c4b5334345477545149454656426444396f356c6665557a4c4d4f5a2b754334505933764d44787351674d427241734a74643851504354513041515451514f4554437449326d2b72434a4e35796530617665757942516f4b72454c677367637746454f7638737047665a3249496f494669625479524b5370516862653833495458514f4841565168636e7344754a5a317072756e5736772f33552b62746475766c4754444236784a414141305532774a7859684a42526f48316a4279665742676f6e33415641684341774d77454545434452643871557453486f697475655848364d31674f34533445494141424343774c416d6a414c444138433551564a3137666f564b46316f433463526b434549414142433549414145305946414c626f576c576237664474754a6e7639596c755776446769343965554145524d5167414145494e435041414b6f483276586b617933776c77482f39535936546d6a686e35674767495167414145494341545141444a714f4931764e3175767a6d64344a524f44764654536f352b45494141424342774b674545304b6e343677612f335737664c737679593532566f7435383936634947353067414145495143414b415152516c4567552b6e48434b5242766569364d46643067414145495143414f415152516e46675565564c345148545257487a6a717851622f5341414151684149426f424246433069425436302b47686148377056526762756b45414168434151447743434b42344d536e32714a454934705a586355546f434145495141414355516b67674b4a47707349765279484572377771346b425843454141416843495377414246446332565a3435694344455431554536417742434541414170454a49494169523866424e3145492f62457353336f72645072506639386664755a727a7737384d51454243454141416a454a4949426978735864712f7576786635324e2f777562745a31526569343038596742434141415168454a344141696834682f494d414243414141516841774a3041417367644b51596841414549514141434549684f4141455550554c344277454951414143454943414f7745456b447453444549414168434141415167454a3041416968366850415041684341414151674141463341676767643651596841414549414142434541674f67454555505149345238454941414243454141417534454545447553444549415168414141495167454230416769673642484350776841414149516741414533416b67674e795259684143454941414243414167656745454544524934522f454941414243414141516934453041417553504649415167414145495141414330516b67674b4a484350386741414549514141434548416e674142795234704243454141416843414141536945304141525938512f6b45414168434141415167344534414165534f46494d5167414145494141424345516e6741434b486948386777414549414142434544416e51414379423070426945414151684141414951694534414152513951766748415168414141495167494137415153514f31494d5167414345494141424341516e5141434b4871453841384345494141424341414158634343434233704269454141516741414549514341364151525139416a6848775167414145495141414337675151514f35494d516742434541414168434151485143434b446f4563492f43454141416843414141546343534341334a466945414951674141454941434236415151514e456a684838516741414549414142434c67545141433549385567424341414151684141414c52435343416f6b63492f79414141516841414149516343654141484a48696b45495141414345494141424b4954514142466a78442b51514143454941414243446754674142354934556778434141415167414145495243654141496f65496679444141516741414549514d436441414c4948536b4749514142434541414168434954674142464431432b416342434541414168434167447342424a4137556778434141495167414145494243644141496f656f5477447749516741414549414142647749494948656b47495141424341414151684149446f4242464430434f4566424341414151684141414c7542424241376b6778434145495141414345494241644149496f4f6752776a38495141414345494141424e774a494944636b57495141684341414151674149486f4242424130534f4566784341414151674141454975424e41414c6b6a7853414549414142434541414174454a4949436952776a2f4941414243454141416842774a344141636b654b5151684141414951674141456f684e4141455750455035424141495167414145494f424f4141486b6a6853444549414142434141415168454a344141696834682f494d414243414141516841774a3041417367644b51596841414549514141434549684f4141455550554c344277454951414143454943414f7745456b447453444549414168434141415167454a3041416968366850415041684341414151674141463341676767643651596841414549414142434541674f67454555505149345238454941414243454141417534454545447553444549415168414141495167454230416769673642484350776841414149516741414533416b67674e795259684143454941414243414167656745454544524934522f454941414243414141516934453041417553504649415167414145495141414330516b67674b4a484350386741414549514141434548416e674142795234704243454141416843414141536945304141525938512f6b45414168434141415167344534414165534f46494d5167414145494141424345516e6741434b486948386777414549414142434544416e51414379423070426945414151684141414951694534414152513951766748415168414141495167494137415153514f31494d5167414345494141424341516e5141434b4871453841384345494141424341414158634343434233704269454141516741414549514341364151525139416a6848775167414145495141414337675151514f35494d516742434541414168434151485143434b446f4563492f43454141416843414141546343534341334a466945414951674141454941434236415151514e456a684838516741414549414142434c67545141433549385567424341414151684141414c52435343416f6b63492f79414141516841414149516343654141484a48696b45495141414345494141424b4954514142466a78442b51514143454941414243446754674142354934556778434141415167414145495243654141496f65496679444141516741414549514d436441414c4948536b4749514142434541414168434954674142464431432b416342434541414168434167447342424a4137556778434141495167414145494243644141496f656f5477447749516741414549414142647749494948656b47495141424341414151684149446f4242464430434f4566424341414151684141414c7542424241376b6778434145495141414345494241644149496f4f6752776a38495141414345494141424e774a494944636b57495141684341414151674149486f4242424130534f4566784341414151674141454975424e41414c6b6a7853414549414142434541414174454a4949436952776a2f4941414243454141416842774a344141636b654b5151684141414951674141456f684e4141455750455035424141495167414145494f424f4141486b6a6853444549414142434141415168454a2f4466753363664f70586678414d41414141415355564f524b35435949493d) }}">
            
            
            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><Br><br><br>

            ___________________________________________________________<br>
            LOCADOR: MOTOMASTER CAMPO GRANDE LTDA.



        </div>











</body>
</html>
