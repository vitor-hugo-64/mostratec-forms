<html>
<head>
<script language="JavaScript">
function Validar(formulario)
{
	if (formulario.titulo.value == "")	{
		alert("Por favor, preencha o campo \"Título\".");
		return (false);
	}
	
	if (formulario.tema.value == "")	{
		alert("Por favor, preencha o campo \"Tema\".");
		return (false);
		
	}
	
	if (formulario.categoria.value == "") {
    alert("Por favor, selecione uma \"Categoria\".");
    return (false);
	
  }
  
  if (formulario.area.value == "") {
    alert("Por favor, selecione uma \"Área\".");
    return (false);
	
  }
  
  if (formulario.resumo.value == "") {
    alert("Por favor, preencha o campo \"Resumo\".");
    return (false);
	
  }
  
   if (formulario.objetivo.value == "") {
    alert("Por favor, preencha o campo \"Objetivo\".");
    return (false);
	
  }
  
  if (formulario.metodologia.value == "") {
    alert("Por favor, preencha o campo \"Metodologia empregada\".");
    return (false);
	
  }
  
   if (formulario.consideracoes.value == "") {
    alert("Por favor, preencha o campo \"Resultados e Conclusão\".");
    return (false);
	
  }
  
   if (formulario.nome_escola.value == "") {
    alert("Por favor, preencha o campo \"Nome da Escola\".");
    return (false);
	
  }
  
  if (formulario.nome_diretor.value == "") {
    alert("Por favor, preencha o campo \"Nome do Diretor\".");
    return (false);
	
  }
  
  if (formulario.endereco_escola.value == "") {
    alert("Por favor, preencha o campo \"Endereço da Escola\".");
    return (false);
	
  }
  
   if (formulario.cidade.value == "") {
    alert("Por favor, preencha o campo \"Cidade\".");
    return (false);
	
  }
  
   if (formulario.estado.value == "") {
    alert("Por favor, preencha o campo \"Estado\".");
    return (false);
	
  }
  
  if (formulario.pais.value == "") {
    alert("Por favor, preencha o campo \"País\".");
    return (false);
	
  }
  
  if (formulario.fone_escola.value == "") {
    alert("Por favor, preencha o campo \"Telefone\".");
    return (false);
	
  }
  
  if (formulario.email_escola.value == "")	{
		alert("Por favor, preencha o campo \"e-mail\" da Escola.");
		return (false);
	}
	
	if (formulario.tipo.value == "")	{
		alert("Sua Escola é Pública ou Privada? \"Selecione uma Opção\".");
		return (false);
	}
	
	if (formulario.opcao_pagamento.value == "") {
    alert("Selecione uma opção em \"Opções de Pagamento\".");
    return (false);
	
  }
  
  if (formulario.nome_o.value == "") {
    alert("Por favor, preencha o campo \"Nome do Professor Orientador\".");
    return (false);
	
  }
  
  if (formulario.sexo_o.value == "") {
    alert("Selecione uma opção em \"Sexo do Professor Orientador\".");
    return (false);
	
  }
  
  if (formulario.disciplina_o.value == "") {
    alert("Por favor, preencha o campo \"Disciplina do Professor Orientador\".");
    return (false);
	
  }
  
  if (formulario.outra_funcao_o.value == "") {
    alert("Por favor, preencha o campo \"Outra Função do Professor Orientador\".");
    return (false);
	
  }
  
  if (formulario.fone_o.value == "") {
    alert("Por favor, preencha o campo \"Telefone do Professor Orientador\".");
    return (false);
	
  }
  
  if (formulario.email_o.value == "") {
    alert("Por favor, preencha o campo \"e-mail do Professor Orientador\".");
    return (false);
	
  }
  
  if (formulario.nome_aluno_1.value == "") {
    alert("Por favor, preencha o campo \"Nome completo do Aluno\".");
    return (false);
	
  }
  
  if (formulario.sexo_aluno_1.value == "") {
    alert("Selecione uma opção em \"Sexo do Aluno 1\".");
    return (false);
	
  }
  
  if (formulario.data_nasc_1.value == "") {
    alert("Por favor, preencha o campo \"Data de Nascimento do Aluno 1\".");
    return (false);
	
  }
  
  if (formulario.turma_1.value == "") {
    alert("Por favor, preencha o campo \"Turma do Aluno 1\".");
    return (false);
	
  }
  
  if (formulario.email_1.value == "") {
    alert("Por favor, preencha o campo \"e-mail do Aluno 1\".");
    return (false);
	
  }
  
  if (formulario.fone_1.value == "") {
    alert("Por favor, preencha o campo \"Telefone para contato do Aluno 1\".");
    return (false);
	
  }
  
   if (formulario.fluencia_1.value == "") {
    alert("Selecione uma opção em \"Fluência em Língua Estrangeira do Aluno 1\".");
    return (false);
	
  }
  
  if (formulario.participou1.value == "") {
    alert("Selecione uma opção em \"Já participou de alguma edição da Mostratec Júnior? do Aluno 1\".");
    return (false);
	
  }
  
   if (formulario.feira_conveniada.value == "") {
    alert("Por favor, preencha o campo \"O projeto foi credenciado através de uma feira conveniada?\".");
    return (false);
	
  }
  
   
  if (formulario.municipio.value == "") {
    alert("Por favor, preencha o campo \"Município\".");
    return (false);
	
  }
  
	
	}
</script>
<title>Funda&ccedil;&atilde;o Liberato - Inscrição</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
@import url("estilo.css");
.TESTE {
	color: #2B9593;
}
.TESTE {
	color: #317880;
}
-->
</style>

</head>

<body>
<form name="formulario" method="post" action="cadastra.php" onSubmit="return Validar(document.formulario)">
  <table border="1" align="center" width="59%">
    <tr> 
      <td height="3821" bgcolor="#DCE9E9"><p align="center"><br>
        <span class="titulon16vermelho"><img src="logo-mostratec.png" width="223" height="31"></span><span class="TESTE">-  J&Uacute;NIOR</span></p>
        <p align="center"><strong>Mostra de Trabalhos do Ensino Fundamental</strong></p>
        <p align="center"><strong>23 A 26 DE OUTUBRO DE 2017</strong></p>
        <h1 align="center">FICHA DE INSCRI&Ccedil;&Atilde;O</h1>
        <p>&nbsp;</p>
        <table width="96%" border="0" align="center">
          <tr class="texton12"> 
            <td class="texton12"><div align="right" class="texton14"><font color="#666666" class="texton12">T&Iacute;TULO DO TRABALHO:</font></div></td>
            <td><input type="text" name="titulo" size="60"></td>
          </tr>
          <tr class="texton12"> 
            <td height="24" class="texton12"> <div align="right"><font color="#666666" class="texton12">TEMA:</font></div></td>
            <td><input type="text" name="tema" size="60"></td>
          </tr>
          <tr class="texton12">
            <td height="24" class="texton12"><div align="right"><font color="#666666" class="texton12">CATEGORIA:</font></div></td>
            <td><label>
              <input type="radio" name="categoria" value="1" id="scategoria1">
              1&ordm; ao 5&ordm; Ano
            &nbsp;&nbsp;</label>
              <label> - &nbsp;&nbsp;
                <input type="radio" name="categoria" value="2" id="categoria2">
                6
              &ordm; ao 9&ordm; Ano</label></td>
          </tr>
          <tr class="texton12">
            <td height="24" class="texton12"><div align="right"><font color="#666666" class="texton12">&Aacute;REA:</font></div></td>
            <td><select name="area" >
                <option value = "" selected>--- Selecione a &Aacute;rea ---</option>
                <option value="Artes">Artes</option>
                <option value="Biologia">Biologia</option>
                <option value="Educação e Pedagogia">Educação e Pedagogia</option>
                <option value="Eletrônica, Informática e Robótica">Eletrônica, Informática e Robótica</option>
                <option value="Engenharia">Engenharia</option>
                <option value="Filosofia">Filosofia</option>
                <option value="Física">Física</option>
                <option value="Geografia">Geografia</option>
                <option value="História">História</option>
                <option value="Inclusão, Acessibilidade e Tecnologia Assistiva">Inclusão, Acessibilidade e Tecnologia Assistiva</option>
                <option value="Química">Química</option>
                <option value="Língua Portuguesa, Língua Estrangeira e Literatura">Língua Portuguesa, Língua Estrangeira e Literatura</option>
                <option value="Matemática">Matemática</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                <option value="Saúde">Saúde</option>
                <option value="Sociologia">Sociologia</option>
                <option value="Outra">Outra</option>
            </select></td>
          </tr>
          <tr class="texton12">
            <td height="24" class="texton12"><div align="right">SE <font color="#666666" class="texton12">OUTRA &Aacute;REA, QUAL:</font></div></td>
            <td><input type="text" name="outra_area" size="60"></td>
          </tr>
          <tr class="texton12"> 
            <td class="texton12"><div align="right"><font color="#666666" class="texton12">Resumo:</font></div></td>
            <td><textarea cols="58" rows="4" name="resumo"></textarea></td>
          </tr>
          <tr class="texton12">
            <td class="texton12">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
                    <tr class="texton12"> 
            <td class="texton12">&nbsp;</td>
            <td><font color="#666666" class="texton12">INFORMA&Ccedil;&Otilde;ES DO TRABALHO:</font></td>
          </tr>
          <tr class="texton12"> 
            <td class="texton12"><div align="right"><font color="#666666" class="texton12">Objetivo:</font></div></td>
            <td><textarea cols="58" rows="4" name="objetivo"></textarea></td>
          </tr>
          <tr class="texton12"> 
            <td class="texton12"><font color="#666666">&nbsp;</font></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td class="texton12"><div align="right"><span class="texton12"><font color="#666666" class="texton12">Metodologia empregada 
              :</font></span><font color="#666666"><br>
            </font></div></td>
            <td rowspan="2"><textarea cols="58" rows="4" name="metodologia"></textarea></td>
          </tr>
          <tr class="texton12">
            <td><div align="right">
              <p class="Aviso">Descrever quais foram os passos, as  etapas<br>
                Como foram coletados os dados,  medidos, comparados para chegar nos resultados.</p>
<br>
            </div></td>
          </tr>
          <tr class="texton12"> 
            <td><font color="#666666">&nbsp;</font></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Resultados e Conclus&atilde;o: </font></div></td>
            <td rowspan="2"><textarea cols="58" rows="4" name="consideracoes"></textarea></td>
          </tr>
          <tr>
            <td><div align="right" class="Aviso"></div></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Dados da Escola</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Nome da escola:</font></div></td>
            <td><input type="text" name="nome_escola" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Nome do diretor:</font></div></td>
            <td><input type="text" name="nome_diretor" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Endere&ccedil;o da escola:</font></div></td>
            <td><input type="text" name="endereco_escola" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Cidade:</font></div></td>
            <td><input type="text" name="cidade" size="26">
              Estado:
              <input type="text" name="estado" size="14"> 
              Pa&iacute;s:
              <input type="text" name="pais" size="17"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone:</font></div></td>
            <td><input type="text" name="fone_escola" size="26"> 
                
              e-mail:
            <input type="text" name="email_escola" size="39"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sua escola &eacute;:</font></div></td>
            <td><label><input type="radio" name="tipo" value="pública" id="tipo1">P&uacute;blica</label>
  <label> &nbsp;-&nbsp;<input type="radio" name="tipo" value="privada" id="tipo2">Privada</label>
            </td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Op&ccedil;&otilde;es de Pagamento:</font></div></td>
            <td><label>
                            <input type="radio" name="opcao_pagamento" value="Prefeitura" id="tipo3">Prefeitura</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td><input type="radio" name="opcao_pagamento" value="Depósitosito Bancário" id="tipo4">
            Dep&oacute;sito Banc&aacute;rio<br>
                <input type="radio" name="opcao_pagamento" value="Pagamento por Boleto Bancário" id="tipo5">
            Pagamento por Boleto Banc&aacute;rio</td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Dados do Professor Orientador</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Nome:</font></div></td>
            <td><input type="text" name="nome_o" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
            <td><label>
              <input type="radio" name="sexo_o" value="Masculino" id="sexo_o1">
              Masculino </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="sexo_o" value="Feminino" id="sexo_o2">
            Feminino</label></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Disciplina:</font></div></td>
            <td><input type="text" name="disciplina_o" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Outra fun&ccedil;&atilde;o::</font></div></td>
            <td><input type="text" name="outra_funcao_o" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone:</font></div></td>
            <td><input type="text" name="fone_o" size="34"> 
            e-mail:
            <input type="text" name="email_o" size="32"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Dados do Professor Coorientador::</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Nome:</font></div></td>
            <td><input type="text" name="nome_coo_1" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
             <td><label>
               <input type="radio" name="sexo_coo_1" value="Masculino" id="sexo_o3">
               Masculino </label>
               <label> &nbsp;-&nbsp;
                 <input type="radio" name="sexo_coo_1" value="Feminino" id="sexo_o4">
             Feminino</label></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Disciplina:</font></div></td>
            <td><input type="text" name="disciplina_coo_1" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Outra fun&ccedil;&atilde;o:</font></div></td>
            <td><input type="text" name="outra_funcao_coo_1" size="78"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone:</font></div></td>
            <td><input type="text" name="fone_coo_1" size="34"> 
            e-mail:
            <input type="text" name="email_coo_1" size="32"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td width="31%"><div align="right"><font color="#666666" class="texton12">Dados do Aluno 1</font></div></td>
            <td width="69%">&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Nome completo:</font></div></td>
            <td><input type="text" name="nome_aluno_1" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
            <td><label>
              <input type="radio" name="sexo_aluno_1" value="Sim" id="sexo_aluno_1">
              Masculino </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="sexo_aluno_1" value="Não" id="sexo_aluno_2">
                Feminino</label></td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Data de nascimento:</font></div></td>
            <td><input type="text" name="data_nasc_1" size="15"></td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Turma:</font></div></td>
            <td><input type="text" name="turma_1" size="15"></td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">E-mail:</font></div></td>
            <td><input type="text" name="email_1" size="40"></td>
          </tr>
          <tr class="texton12"> 
            <td><div align="right"><font color="#666666" class="texton12">Telefone para contato:</font></div></td>
            <td><input type="text" name="fone_1" size="15"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Tem flu&ecirc;ncia em L&iacute;ngua Estrangeira?</font></div></td>
            <td><label>
              <input type="radio" name="fluencia_1" value="Sim" id="fluencia_1">
              Sim
            </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="fluencia_1" value="Não" id="fluencia_2">Não
              </label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td><input type="checkbox" name="ingles1" value="Sim">Inglês<br>
				<input type=checkbox name="italiano1" value="Sim">Italiano<br>
				<input type=checkbox name="espanhol1" value="Sim">Espanhol<br>
				<input type=checkbox name="alemao1" value="Sim">Alemâo<br>
				<input type=checkbox name="frances1" value="Sim">Francês<br>
				<input type=checkbox name="outra1" value="Sim">Outra - Qual?
                <input type="text" name="outra_qual1" size="30">
              <br><BR></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">J&aacute; participou de alguma edi&ccedil;&atilde;o da Mostratec J&uacute;nior?</font></div></td>
            <td><label>
              <input type="radio" name="participou1" value="Sim" id="1">
              Sim</label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="participou1" value="N&atilde;o" id="2">
            N&atilde;o</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Dados do Aluno 2</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Nome completo:</font></div></td>
            <td><input type="text" name="nome_aluno_2" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
            <td><label>
              <input type="radio" name="sexo_aluno_2" value="Masculino" id="sexo_aluno_4">
              Masculino </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="sexo_aluno_2" value="Feminino" id="sexo_aluno_5">
                Feminino</label></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Data de nascimento:</font></div></td>
            <td><input type="text" name="data_nasc_2" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Turma:</font></div></td>
            <td><input type="text" name="turma_2" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">E-mail:</font></div></td>
            <td><input type="text" name="email_2" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone para contato:</font></div></td>
            <td><input type="text" name="fone_2" size="15"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Tem flu&ecirc;ncia em L&iacute;ngua Estrangeira?</font></div></td>
            <td><label>
              <input type="radio" name="fluencia_2" value="Sim" id="fluencia_3">
              Sim </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="fluencia_2" value="Não" id="fluencia_4">
                N&atilde;o </label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td><input type="checkbox" name="ingles2" value="Sim">Inglês<br>
				<input type=checkbox name="italiano2" value="Sim">Italiano<br>
				<input type=checkbox name="espanhol2" value="Sim">Espanhol<br>
				<input type=checkbox name="alemao2" value="Sim">Alemâo<br>
				<input type=checkbox name="frances2" value="Sim">Francês<br>
				<input type=checkbox name="outra2" value="Sim">Outra - Qual?
                <input type="text" name="outra_qual2" size="30">
              <br><BR></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">J&aacute; participou de alguma edi&ccedil;&atilde;o da Mostratec J&uacute;nior?</font></div></td>
            <td><label>
              <input type="radio" name="participou2" value="Sim" id="13">
              Sim</label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="participou2" value="N&atilde;o" id="23">
                N&atilde;o</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Dados do Aluno 3</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Nome completo:</font></div></td>
            <td><input type="text" name="nome_aluno_3" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
            <td><label>
              <input type="radio" name="sexo_aluno_3" value="Masculino" id="sexo_aluno_7">
              Masculino </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="sexo_aluno_3" value="Feminino" id="sexo_aluno_8">
                Feminino</label></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Data de nascimento:</font></div></td>
            <td><input type="text" name="data_nasc_3" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Turma:</font></div></td>
            <td><input type="text" name="turma_3" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">E-mail:</font></div></td>
            <td><input type="text" name="email_3" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone para contato:</font></div></td>
            <td><input type="text" name="fone_3" size="15"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Tem flu&ecirc;ncia em L&iacute;ngua Estrangeira?</font></div></td>
            <td><label>
              <input type="radio" name="fluencia_3" value="Sim" id="fluencia_5">
              Sim </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="fluencia_3" value="Não" id="fluencia_6">
                N&atilde;o </label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td><input type="checkbox" name="ingles3" value="Sim">Inglês<br>
				<input type=checkbox name="italiano3" value="Sim">Italiano<br>
				<input type=checkbox name="espanhol3" value="Sim">Espanhol<br>
				<input type=checkbox name="alemao3" value="Sim">Alemâo<br>
				<input type=checkbox name="frances3" value="Sim">Francês<br>
				<input type=checkbox name="outra3" value="Sim">Outra - Qual?
                <input type="text" name="outra_qual3" size="30">
              <br><BR></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">J&aacute; participou de alguma edi&ccedil;&atilde;o da Mostratec J&uacute;nior?</font></div></td>
            <td><label>
              <input type="radio" name="participou3" value="Sim" id="14">
              Sim</label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="participou3" value="N&atilde;o" id="24">
                N&atilde;o</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Dados do Aluno 4</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Nome completo:</font></div></td>
            <td><input type="text" name="nome_aluno_4" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
            <td><label>
              <input type="radio" name="sexo_aluno_4" value="Masculino" id="sexo_aluno_10">
              Masculino </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="sexo_aluno_4" value="Feminino" id="sexo_aluno_11">
                Feminino</label></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Data de nascimento:</font></div></td>
            <td><input type="text" name="data_nasc_4" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Turma:</font></div></td>
            <td><input type="text" name="turma_4" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">E-mail:</font></div></td>
            <td><input type="text" name="email_4" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone para contato:</font></div></td>
            <td><input type="text" name="fone_4" size="15"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Tem flu&ecirc;ncia em L&iacute;ngua Estrangeira?</font></div></td>
            <td><label>
              <input type="radio" name="fluencia_4" value="Sim" id="fluencia_7">
              Sim </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="fluencia_4" value="Não" id="fluencia_8">
                N&atilde;o </label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td><input type="checkbox" name="ingles4" value="Sim">Inglês<br>
				<input type=checkbox name="italiano4" value="Sim">Italiano<br>
				<input type=checkbox name="espanhol4" value="Sim">Espanhol<br>
				<input type=checkbox name="alemao4" value="Sim">Alemâo<br>
				<input type=checkbox name="frances4" value="Sim">Francês<br>
				<input type=checkbox name="outra4" value="Sim">Outra - Qual?
                <input type="text" name="outra_qual4" size="30">
              <br><BR></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">J&aacute; participou de alguma edi&ccedil;&atilde;o da Mostratec J&uacute;nior?</font></div></td>
            <td><label>
              <input type="radio" name="participou4" value="Sim" id="15">
              Sim</label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="participou4" value="N&atilde;o" id="25">
                N&atilde;o</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Dados do Aluno 5</font></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Nome completo:</font></div></td>
            <td><input type="text" name="nome_aluno_5" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Sexo:</font></div></td>
            <td><label>
              <input type="radio" name="sexo_aluno_5" value="Masculino" id="sexo_aluno_13">
              Masculino </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="sexo_aluno_5" value="Feminino" id="sexo_aluno_14">
                Feminino</label></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Data de nascimento:</font></div></td>
            <td><input type="text" name="data_nasc_5" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Turma:</font></div></td>
            <td><input type="text" name="turma_5" size="15"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">E-mail:</font></div></td>
            <td><input type="text" name="email_5" size="40"></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Telefone para contato:</font></div></td>
            <td><input type="text" name="fone_5" size="15"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">J&aacute; participou de alguma edi&ccedil;&atilde;o da Mostratec J&uacute;nior?</font></div></td>
            <td><label>
              <input type="radio" name="participou5" value="Sim" id="16">
              Sim</label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="participou5" value="N&atilde;o" id="26">
                N&atilde;o</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Tem flu&ecirc;ncia em L&iacute;ngua Estrangeira?</font></div></td>
            <td><label>
              <input type="radio" name="fluencia_5" value="Sim" id="fluencia_9">
              Sim </label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="fluencia_5" value="Não" id="fluencia_10">
                N&atilde;o </label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td><input type="checkbox" name="ingles5" value="Sim">Inglês<br>
				<input type=checkbox name="italiano5" value="Sim">Italiano<br>
				<input type=checkbox name="espanhol5" value="Sim">Espanhol<br>
				<input type=checkbox name="alemao5" value="Sim">Alemâo<br>
				<input type=checkbox name="frances5" value="Sim">Francês<br>
				<input type=checkbox name="outra5" value="Sim">Outra - Qual?
                <input type="text" name="outra_qual5" size="30">
              <br><BR></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">O projeto foi credenciado atrav&eacute;s de uma feira conveniada?</font></div></td>
            <td><label>
              <input type="radio" name="feira_conveniada" value="Sim" id="17">
              Sim</label>
              <label> &nbsp;-&nbsp;
                <input type="radio" name="feira_conveniada" value="N&atilde;o" id="27">
                N&atilde;o</label></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Qual Feira:</font></div></td>
            <td><select name="qual_feira" >
              <option value="">--- Se você assinalou "Sim" no item anterior, Selecione a Feira ---</option>
              <option value="Aluno Pesquisador - Lajeado-RS">Aluno Pesquisador - Lajeado-RS</option>
              <option value="Ca&iacute; na Pesquisa - S&atilde;o Sebasti&atilde;o do Ca&iacute;-RS">Ca&iacute; na Pesquisa - S&atilde;o Sebasti&atilde;o do Ca&iacute;-RS</option>
              <option value="CSI-Ci&ecirc;ncia a Servi&ccedil;o de Itumbiara - Itumbiara-GO">CSI-Ci&ecirc;ncia a Servi&ccedil;o de Itumbiara - Itumbiara-GO</option>
              <option value="Eureka Science Fair - Joinville-SC">Eureka Science Fair - Joinville-SC</option>
              <option value="Expo Eflur - Igrejinha-RS">Expo Eflur - Igrejinha-RS</option>
              <option value="Expo Nacional MILSET Brasil - Fortaleza-CE">Expo Nacional MILSET Brasil - Fortaleza-CE</option>
              <option value="FECI Feria de Ciencias, Tecnolog&iacute;as e Inventos - Assun&ccedil;&atilde;o-Paraguai">FECI Feria de Ciencias, Tecnolog&iacute;as e Inventos - Assun&ccedil;&atilde;o-Paraguai</option>
              <option value="FECITEC - Est&acirc;ncia Velha - RS">FECITEC - Est&acirc;ncia Velha - RS</option>
              <option value="FECITEC GIRASOLES - Assun&ccedil;&atilde;o-Paraguai">FECITEC GIRASOLES - Assun&ccedil;&atilde;o-Paraguai</option>
              <option value="FEICIC - Dois Irm&atilde;os-RS">FEICIC - Dois Irm&atilde;os-RS</option>
              <option value="FEICIPA - Parob&eacute;-RS">FEICIPA - Parob&eacute;-RS</option>
              <option value="Feira de Ci&ecirc;ncias - S&atilde;o Jos&eacute; do Hort&ecirc;ncio-RS">Feira de Ci&ecirc;ncias - S&atilde;o Jos&eacute; do Hort&ecirc;ncio-RS</option>
              <option value="Feira de Ci&ecirc;ncias da IENH - Novo Hamburgo-RS">Feira de Ci&ecirc;ncias da IENH - Novo Hamburgo-RS</option>
              <option value="Feira de Ci&ecirc;ncias de Port&atilde;o - Port&atilde;o-RS">Feira de Ci&ecirc;ncias de Port&atilde;o - Port&atilde;o-RS</option>
              <option value="Feira de Ci&ecirc;ncias do Col&eacute;gio Giordano Bruno - S&atilde;o Paulo-SP">Feira de Ci&ecirc;ncias do Col&eacute;gio Giordano Bruno - S&atilde;o Paulo-SP</option>
              <option value="Feira de Ci&ecirc;ncias Univates: descobrindo talentos para a pesquisa - Lajeado-RS">Feira de Ci&ecirc;ncias Univates: descobrindo talentos para a pesquisa - Lajeado-RS</option>
              <option value="Feira de Conhecimentos da Rede Municipal de Ensino do Recife - Recife-PE">Feira de Conhecimentos da Rede Municipal de Ensino do Recife - Recife-PE</option>
              <option value="Feira de Projetos de Vale Real - Vale Real-RS">Feira de Projetos de Vale Real - Vale Real-RS</option>
              <option value="Feira do Conhecimento - Feliz-RS">Feira do Conhecimento - Feliz-RS</option>
              <option value="Feira Multidisciplinar e Mostra de Inicia&ccedil;&atilde;o Cient&iacute;fica de Nova Santa Rita - Nova Santa Rita-RS">Feira Multidisciplinar e Mostra de Inicia&ccedil;&atilde;o Cient&iacute;fica de Nova Santa Rita - Nova Santa Rita-RS</option>
              <option value="Feira Municipal de Ci&ecirc;ncias e Ideias-FEMUCI - Esteio-RS">Feira Municipal de Ci&ecirc;ncias e Ideias-FEMUCI - Esteio-RS</option>
              <option value="Feira Municipal de Inicia&ccedil;&atilde;o Cient&iacute;fica e Tecnol&oacute;gica -FEMICTEC - Novo Hamburgo-RS">Feira Municipal de Inicia&ccedil;&atilde;o Cient&iacute;fica e Tecnol&oacute;gica -FEMICTEC - Novo Hamburgo-RS</option>
              <option value="Feira Pedag&oacute;gica de Feliz - Feliz-RS">Feira Pedag&oacute;gica de Feliz - Feliz-RS</option>
              <option value="FELIN - Linha Nova-RS">FELIN - Linha Nova-RS</option>
              <option value="FEMIC - Montenegro-RS">FEMIC - Montenegro-RS</option>
              <option value="FEMIC (Feira Municipal de Inicia&ccedil;&atilde;o Cientifica) - Nova Hartz-RS">FEMIC (Feira Municipal de Inicia&ccedil;&atilde;o Cientifica) - Nova Hartz-RS</option>
              <option value="FEMIC J&uacute;nior - Feira Mineira de Inicia&ccedil;&atilde;o Cient&iacute;fica J&uacute;nior - Mateus Leme-MG">FEMIC J&uacute;nior - Feira Mineira de Inicia&ccedil;&atilde;o Cient&iacute;fica J&uacute;nior - Mateus Leme-MG</option>
              <option value="FEMINT - Feira Municipal Integrada - Sapiranga-RS">FEMINT - Feira Municipal Integrada - Sapiranga-RS</option>
              <option value="FEMUCITEC - Canoas-RS">FEMUCITEC - Canoas-RS</option>
              <option value="FENECIT - Recife-PE">FENECIT - Recife-PE</option>
              <option value="Foro de Ciencias y Civilizaci&oacute;n - Cerrito-ARG">Foro de Ciencias y Civilizaci&oacute;n - Cerrito-ARG</option>
              <option value="IFCITEC - Feira de Ci&ecirc;ncias e Inova&ccedil;&atilde;o Tecnol&oacute;gica do IFRS - Canoas-RS">IFCITEC - Feira de Ci&ecirc;ncias e Inova&ccedil;&atilde;o Tecnol&oacute;gica do IFRS - Canoas-RS</option>
              <option value="IFTEC - Caxias do Sul-RS">IFTEC - Caxias do Sul-RS</option>
              <option value="Infomatrix Latinoam&eacute;rica - Guadalajara-M&eacute;xico">Infomatrix Latinoam&eacute;rica - Guadalajara-M&eacute;xico</option>
              <option value="MAP Mostra Anual de Projetos - Campo Bom-RS">MAP Mostra Anual de Projetos - Campo Bom-RS</option>
              <option value="MOPIC - Mostra de Projetos e de Inicia&ccedil;&atilde;o Cient&iacute;fica - Campo Bom-RS">MOPIC - Mostra de Projetos e de Inicia&ccedil;&atilde;o Cient&iacute;fica - Campo Bom-RS</option>
              <option value="MOPPAN - Mostra de Projetos de Pesquisa da E.M.E.F. Prof. Arno Nienow - Dois Irm&atilde;os-RS">MOPPAN - Mostra de Projetos de Pesquisa da E.M.E.F. Prof. Arno Nienow - Dois Irm&atilde;os-RS</option>
              <option value="Morro Reuter Cient&iacute;fica - Morro Reuter-RS">Morro Reuter Cient&iacute;fica - Morro Reuter-RS</option>
              <option value="Mostra Cient&iacute;fica Carmo - Caxias - RS">Mostra Cient&iacute;fica Carmo - Caxias - RS</option>
              <option value="Mostra Cient&iacute;fica e Engenharia da Escola Santa Teresinha - Imperatriz-MA">Mostra Cient&iacute;fica e Engenharia da Escola Santa Teresinha - Imperatriz-MA</option>
              <option value="Mostra De Artes e Ci&ecirc;ncias ALEF &ndash; XXII Mostra Monigr&aacute;fica do Col&eacute;gio Bialik - S&atilde;o Paulo-SP">Mostra De Artes e Ci&ecirc;ncias ALEF &ndash; XXII Mostra Monigr&aacute;fica do Col&eacute;gio Bialik - S&atilde;o Paulo-SP</option>
              <option value="Mostra de Ci&ecirc;ncia e Tecnologia de Fernand&oacute;polis e Regi&atilde;o - MOSTRAFER - Fernand&oacute;polis-SP">Mostra de Ci&ecirc;ncia e Tecnologia de Fernand&oacute;polis e Regi&atilde;o - MOSTRAFER - Fernand&oacute;polis-SP</option>
              <option value="Mostra de Ci&ecirc;ncias da ULBRA - Canoas-RS">Mostra de Ci&ecirc;ncias da ULBRA - Canoas-RS</option>
              <option value="Mostra de Inicia&ccedil;&atilde;o Cient&iacute;fica de Igrejinha - Igrejinha-RS">Mostra de Inicia&ccedil;&atilde;o Cient&iacute;fica de Igrejinha - Igrejinha-RS</option>
              <option value="Mostra de Inicia&ccedil;&atilde;o Cient&iacute;fica do Instituto Ivoti - Ivoti-RS">Mostra de Inicia&ccedil;&atilde;o Cient&iacute;fica do Instituto Ivoti - Ivoti-RS</option>
              <option value="Mostra de Projeto da Semana da Ci&ecirc;ncia e Tecnologia - Campo Bom-RS">Mostra de Projeto da Semana da Ci&ecirc;ncia e Tecnologia - Campo Bom-RS</option>
              <option value="MOSTRA DE PROJETOS DA 29 - Dois Irm&atilde;os-RS">MOSTRA DE PROJETOS DA 29 - Dois Irm&atilde;os-RS</option>
              <option value="Mostra de Tecnologia e Inova&ccedil;&atilde;o com Ci&ecirc;ncias - MOTIC S&Atilde;O LEO - S&atilde;o Leopoldo-RS">Mostra de Tecnologia e Inova&ccedil;&atilde;o com Ci&ecirc;ncias - MOTIC S&Atilde;O LEO - S&atilde;o Leopoldo-RS</option>
              <option value="Mostra Marcos - Alvorada-RS">Mostra Marcos - Alvorada-RS</option>
              <option value="Mostra Multidisciplinar - Novo Hamburgo-RS">Mostra Multidisciplinar - Novo Hamburgo-RS</option>
              <option value="Mostra Municipal de Incentivo &agrave; Pesquisa - Bom Princ&iacute;pio-RS">Mostra Municipal de Incentivo &agrave; Pesquisa - Bom Princ&iacute;pio-RS</option>
              <option value="Mostra Municipal de Trabalhos Escolares - Ven&acirc;ncio Aires-RS">Mostra Municipal de Trabalhos Escolares - Ven&acirc;ncio Aires-RS</option>
              <option value="Mostra T&eacute;cnica de Projetos - MTEP - Imperatriz-MA">Mostra T&eacute;cnica de Projetos - MTEP - Imperatriz-MA</option>
              <option value="MOSTRACLAK - Est&acirc;ncia Velha - RS">MOSTRACLAK - Est&acirc;ncia Velha - RS</option>
              <option value="MOSTRASSIS - Mostra Multidisciplinar da EMEF Assis Brasil - Canoas-RS">MOSTRASSIS - Mostra Multidisciplinar da EMEF Assis Brasil - Canoas-RS</option>
              <option value="MovimentoCient&iacute;fico Norte Nordeste-MOCINN - Imperatriz-MA">MovimentoCient&iacute;fico Norte Nordeste-MOCINN - Imperatriz-MA</option>
              <option value="Multifeira - Ivoti-RS">Multifeira - Ivoti-RS</option>
              <option value="MULTIFEIRA - Porto Alegre-RS">MULTIFEIRA - Porto Alegre-RS</option>
              <option value="Multifeira da Albano Hansen - Dois Irm&atilde;os-RS">Multifeira da Albano Hansen - Dois Irm&atilde;os-RS</option>
              <option value="PioTeC - Novo Hamburgo-RS">PioTeC - Novo Hamburgo-RS</option>
              <option value="Simp&oacute;sio de Pr&eacute;-inicia&ccedil;&atilde;o Cient&iacute;fica do Cientista Aprendiz - Col&eacute;gio Dante Alighieri - S&atilde;o Paulo-SP">Simp&oacute;sio de Pr&eacute;-inicia&ccedil;&atilde;o Cient&iacute;fica do Cientista Aprendiz - Col&eacute;gio Dante Alighieri - S&atilde;o Paulo-SP</option>
              <option value="Simp&oacute;sio Interativa de Tecnologia e Ci&ecirc;ncia - Londrina-PR">Simp&oacute;sio Interativa de Tecnologia e Ci&ecirc;ncia - Londrina-PR</option>
            </select></td>
          </tr>
          <tr class="texton12">
            <td><div align="right"><font color="#666666" class="texton12">Munic&iacute;pio:</font></div></td>
            <td><input type="text" name="municipio" size="40"></td>
          </tr>
          <tr class="texton12">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="texton12"> 
            <td colspan="2"><div align="center"></div></td>
          </tr>
          <tr class="texton11"> 
            <td colspan="2"><div align="center">
              <input type="submit" name="enviar" value="Enviar Inscrição">
            </div></td>
          </tr>
        </table>
  </table>
</form>
</body>
</html>
