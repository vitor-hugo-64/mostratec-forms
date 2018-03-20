<?php

	$con = new mysqli('localhost', 'root', '', 'mostratec_junior');
	
	if ($con) {
		$default = 'default';
		$tipo = $_POST['tipo'];
		$nomeInstituicao = $_POST['nomeInstituicao'];
		$nomeResponsavel = $_POST['nomeResponsavel'];
		$telefoneResponsavel = $_POST['telefoneResponsavel'];
		$emailResponsavel = $_POST['emailResponsavel'];
		$nomeFeira = $_POST['nomeFeira'];
		$ruaFeira = $_POST['ruaFeira'];
		$numeroFeira = $_POST['numeroFeira'];
		$cepFeira = $_POST['cepFeira'];
		$cidadeFeira = $_POST['cidadeFeira'];
		$ufFeira = $_POST['ufFEira'];
		$paisFeira = $_POST['paisFeira'];
		$socialFeira = $_POST['socialFeira'];
		$nomeCordenador = $_POST['nomeCordenador'];
		$telefoneCordenador = $_POST['telefoneCordenador'];
		$emailCordenador = $_POST['emailCordenador'];
		$nomePessoa = $_POST['nomePessoa'];
		$telefonePessoa = $_POST['telefonePessoa'];
		$emailPessoa = $_POST['emailPessoa'];
		$periodoFeira = ($_POST['periodoFeira'] == 'anual') ? 'anual' : $_POST['outroPeriodoQual'];
		$dataRecenteFeira = $_POST['dataRecenteFeira'];
		$dataProximaFeira = $_POST['dataProximaFeira'];
		$confirmaData = $_POST['confirmaData'];
		$numeroEdicao = $_POST['numeroEdicao'];
		$tipoFeira = ($_POST['tipoFeira'] == 'outro') ? $_POST['outroTipo'] : $_POST['tipoFeira'];
		$observacoesAbrangenciaFeira = $_POST['observacoesAbrangenciaFeira'];
		$existeComite = $_POST['existeComite'];
		$descrevaProcesso = $_POST['descrevaProcesso'];
		$numeroTotalProjetosProximaEdicao = $_POST['numeroTotalProjetosProximaEdicao'];
		$numeroTotalEscolasProximaEdicao = $_POST['numeroTotalEscolasProximaEdicao'];


		$faixaEtariaInfantil = $_POST['faixaEtariaInfantil'];
		$faixaEtariaFundamental = $_POST['faixaEtariaFundamental'];
		$faixaEtariaMedio = $_POST['faixaEtariaMedio'];
		$faixaEtariaSuperior = $_POST['faixaEtariaSuperior'];

		$descrevaProcessoAvaliacao = $_POST['descrevaProcessoAvaliacao'];
		$dataUltimaFeira = $_POST['dataUltimaFeira'];
		$numero01Estudante = $_POST['numero01Estudante'];
		$numero02Estudante = $_POST['numero02Estudante'];
		$numero03Estudante = $_POST['numero03Estudante'];
		$numero04Estudante = $_POST['numero04Estudante'];
		$numero05Estudante = $_POST['numero05Estudante'];
		$numeroOrientadoresRelacao = $_POST['numeroOrientadoresRelacao'];
		$numeroEscolasPublicasRelacao = $_POST['numeroEscolasPublicasRelacao'];
		$numeroEscolasPrivadasRelacao = $_POST['numeroEscolasPrivadasRelacao'];
		$numeroProjetosEstudante1 = $_POST['numeroProjetosEstudante1'];
		$numeroProjetosEstudante2 = $_POST['numeroProjetosEstudante2'];
		$numeroProjetosEstudante3 = $_POST['numeroProjetosEstudante3'];
		$numeroProjetosEstudante4 = $_POST['numeroProjetosEstudante4'];
		$numeroProjetosEstudante5 = $_POST['numeroProjetosEstudante5'];
		$numeroAlunosRelacaoItem175 = $_POST['numeroAlunosRelacaoItem175'];
		$totalOrientadoresItem17 = $_POST['totalOrientadoresItem17'];
		$numeroEscolasPublicasTotal = $_POST['numeroEscolasPublicasTotal'];
		$numeroEscolasPrivadasTotal = $_POST['numeroEscolasPrivadasTotal'];
		$numeroProjetosCredenciamento = $_POST['numeroProjetosCredenciamento'];
		$numeroProjetosCredenciamentoDesejado = $_POST['numeroProjetosCredenciamentoDesejado'];
		$responsavelPreenchimento = $_POST['responsavelPreenchimento'];
		$cargoResponsavel = $_POST['cargoResponsavel'];
		$data = $_POST['data'];


		$sql = "INSERT INTO M_CADASTRO(
										C_ID_CADASTRO,
										C_TIPO_CADASTRO,
									    C_NOME_INSTITUICAO,
									    C_RESPONSAVEL_INSTITUICAO,
									    C_TELEFONE_RESPONSAVEL_INSTITUICAO,
									    C_EMAIL_REPOSANSAVEL_INSTITUICAO,
									    C_NOME_FEIRA_DE_CIENCIAS,
									    C_RUA_FEIRA_DE_CIENCIAS,
									    C_NUMERO_FEIRA_DE_CIENCIAS,
									    C_CEP_FEIRA_DE_CIENCIAS,
									    C_CIDADE_FEIRA_DE_CIENCIAS,
									    C_UF_FEIRA_DE_CIENCIAS,
									    C_PAIS_FEIRA_DE_CIENCIAS,
									    C_SITE_FEIRA_DE_CIENCIAS,
									    C_NOME_CORDENADOR_FEIRA,
									    C_TELEFONE_CORDENADOR_FEIRA,
									    C_EMAIL_CORDENADOR_FEIRA,
									    C_NOME_PESSOA_PRA_CONTATO,
									    C_TELEFONE_PESSOA_PRA_CONTATO,
									    C_EMAIL_PESSOA_PRA_CONTATO,
									    C_PERIDIOCIDADE_DA_FEIRA,
									    C_DATA_REALIZACAO_FEIRA_RECENTE,
									    C_DATA_REALIZACAO_FEIRA_PROXIMA,
									    C_DATA_CONFIRMADA_FEIRA,
									    C_NUMERO_EDICAO_FEIRA,
									    C_TIPO_DE_FEIRA,
									    C_DESCRICAO_ABRANGENCIA_FEIRA,
									    C_EXISTE_COMITE_REVISAO_CIENTIFICA,
									    C_DESCRICAO_PROCESSO_DE_SELECAO,
									    C_NUMERO_PROJETOS_PROXIMA_EDICAO,
									    C_NUMERO_ESCOLAS_PROXIMA_EDICAO,
									    C_PARTICIPAM_FEIRA_FAIXA_ETARIA_ENSINO_INFANTIL,
									    C_PARTICIPAM_FEIRA_FAIXA_ETARIA_ENSINO_FUDAMENTAL,
									    C_PARTICIPAM_FEIRA_FAIXA_ETARIA_ENSINO_MEDIO,
									    C_PARTICIPAM_FEIRA_FAIXA_ETARIA_ENSINO_SUPERIOR,
									    C_DESCRICAO_PROCESSO_AVALIACAO_FEIRA,
									    C_DATA_ULTIMA_FEIRA_REALIZADA,
									    C_ULTIMA_FEIRA_NUMERO_PROJETOS_UM_ESTUDANTE,
									    C_ULTIMA_FEIRA_NUMERO_PROJETOS_DOIS_ESTUDANTES,
									    C_ULTIMA_FEIRA_NUMERO_PROJETOS_TRES_ESTUDANTES,
									    C_ULTIMA_FEIRA_NUMERO_PROJETOS_QUATRO_ESTUDANTES,
									    C_ULTIMA_FEIRA_NUMERO_PROJETOS_CINCO_OU_MAIS_ESTUDANTES,
									    C_ULTIMA_FEIRA_NUMERO_TOTAL_PROFESSORES,
									    C_ULTIMA_FEIRA_NUMERO_ESCOLAS_PUBLICAS,
									    C_ULTIMA_FEIRA_NUMERO_ESCOLAS_PRIVADAS,
									    C_TODOS_PROJETOS_UM_ESTUDANTE,
									    C_TODOS_PROJETOS_DOIS_ESTUDANTE,
									    C_TODOS_PROJETOS_TRES_ESTUDANTE,
									    C_TODOS_PROJETOS_QUATRO_ESTUDANTE,
									    C_TODOS_PROJETOS_CINCO_OU_MAIS_ESTUDANTE,
									    C_TODOS_PROJETOS_TOTAL_ESTUDANTES,
									    C_TODOS_NUMERO_TOTAL_ORIENTADORES,
									    C_TODOS_NUMERO_ESCOLAS_PUBLICAS,
									    C_TODOS_NUMERO_ESCOLAS_PRIVADAS,
									    C_NUMERO_PROJETOS_CREDENCIAMENTO,
									    C_NUMERO_PROJETOS_DESEJADO_CREDENCIAMENTO,
									    C_NOME_RESPONSAVEL_PREECHIMENTO_CADASTRO,
									    C_CARGO_RESPONSAVEL_PREENCHIMENTO_CADASTRO,
									    C_DATA_CADASTRO
									) VALUES(
										DEFAULT,
										'$tipo',
										'$nomeInstituicao',
										'$nomeResponsavel',
										'$telefoneResponsavel',
										'$emailResponsavel',
										'$nomeFeira',
										'$ruaFeira',
										$numeroFeira,
										$cepFeira,
										'$cidadeFeira',
										'$ufFeira',
										'$paisFeira',
										'$socialFeira',
										'$nomeCordenador',
										'$telefoneCordenador',
										'$emailCordenador',
										'$nomePessoa',
										'$telefonePessoa',
										'$emailPessoa',
										'$periodoFeira',
										'$dataRecenteFeira',
										'$dataProximaFeira',
										'$confirmaData',
										$numeroEdicao,
										'$tipoFeira',
										'$observacoesAbrangenciaFeira',
										'$existeComite',
										'$descrevaProcesso',
										$numeroTotalProjetosProximaEdicao,
										$numeroTotalEscolasProximaEdicao,
										'$faixaEtariaInfantil',
										'$faixaEtariaFundamental',
										'$faixaEtariaMedio',
										'$faixaEtariaSuperior',
										'$descrevaProcessoAvaliacao',
										'$dataUltimaFeira',
										$numero01Estudante,
										$numero02Estudante,
										$numero03Estudante,
										$numero04Estudante,
										$numero05Estudante,
										$numeroOrientadoresRelacao,
										$numeroEscolasPublicasRelacao,
										$numeroEscolasPrivadasRelacao,
										$numeroProjetosEstudante1,
										$numeroProjetosEstudante2,
										$numeroProjetosEstudante3,
										$numeroProjetosEstudante4,
										$numeroProjetosEstudante5,
										$numeroAlunosRelacaoItem175,
										$totalOrientadoresItem17,
										$numeroEscolasPublicasTotal,
										$numeroEscolasPrivadasTotal,
										$numeroProjetosCredenciamento,
										$numeroProjetosCredenciamentoDesejado,
										'$responsavelPreenchimento',
										'$cargoResponsavel',
										'$data'
									)";

		if ($con->query($sql)) {
			echo "Sucesso";
		} else {
			echo "Erro!";
		}

		$sql2 = "SELECT MAX(C_ID_CADASTRO) as '0' FROM M_CADASTRO";
		if($result = $con->query($sql2)) {
			$aux = $result->fetch_assoc();
			$id = $aux[0];

			$nivelEnsinoAlunosEducacaoInfantil = isset($_POST['nivelEnsinoAlunosEducacaoInfantil'])?$_POST['nivelEnsinoAlunosEducacaoInfantil']:null;
			$numeroProjetosInfantil = isset($_POST['numeroProjetosInfantil'])?$_POST['numeroProjetosInfantil']:null;
			$numeroEscolasInfantil = isset($_POST['numeroEscolasInfantil'])?$_POST['numeroEscolasInfantil']:null;
			$nivelEnsinoAlunosEducacaoFundamental = isset($_POST['nivelEnsinoAlunosEducacaoFudamental'])?$_POST['nivelEnsinoAlunosEducacaoFudamental']:null;
			$numeroProjetosFundamental = isset($_POST['numeroProjetosFundamental'])?$_POST['numeroProjetosFundamental']:null;
			$numeroEscolasFundamental = isset($_POST['numeroEscolasFundamental'])?$_POST['numeroEscolasFundamental']:null;
			$nivelEnsinoAlunosEducacaoMedioProfissional = isset($_POST['nivelEnsinoAlunosEducacaoMedioProfissional'])?$_POST['nivelEnsinoAlunosEducacaoMedioProfissional']:null;
			$numeroProjetosMedioProfissional = isset($_POST['numeroProjetosMedioProfissional'])?$_POST['numeroProjetosMedioProfissional']:null;
			$numeroEscolasMedioProfissional = isset($_POST['numeroEscolasMedioProfissional'])?$_POST['numeroEscolasMedioProfissional']:null;
			$nivelEnsinoAlunosEducacaoSuperior = isset($_POST['nivelEnsinoAlunosEducacaoSuperior'])?$_POST['nivelEnsinoAlunosEducacaoSuperior']:null;
			$numeroProjetosSuperior = isset($_POST['numeroProjetosSuperior'])?$_POST['numeroProjetosSuperior']:null;
			$numeroEscolasSuperior = isset($_POST['numeroEscolasSuperior'])?$_POST['numeroEscolasSuperior']:null;

			if ($nivelEnsinoAlunosEducacaoInfantil) {
				$sql3 = "INSERT INTO M_NIVEL_ENSINO_ESTUDANTES_PROXIMA_EDICAO(
																				N_ID_NIVEL, 
																				N_TIPO_NIVEL, 
																				N_NUMERO_PROJETOS, 
																				N_NUMERO_ESCOLAS, 
																				N_ID_CADASTRO
																			) VALUES(
																				DEFAULT,
																				'$nivelEnsinoAlunosEducacaoInfantil',
																				$numeroProjetosInfantil,
																				$numeroEscolasInfantil,
																				$id
																			)";
				if($con->query($sql3)) {
					echo "Sim";
				}
			}

			if ($nivelEnsinoAlunosEducacaoFundamental) {
				$sql3 = "INSERT INTO M_NIVEL_ENSINO_ESTUDANTES_PROXIMA_EDICAO(
																				N_ID_NIVEL, 
																				N_TIPO_NIVEL, 
																				N_NUMERO_PROJETOS, 
																				N_NUMERO_ESCOLAS, 
																				N_ID_CADASTRO
																			) VALUES(
																				DEFAULT,
																				'$nivelEnsinoAlunosEducacaoFundamental',
																				$numeroProjetosFundamental,
																				$numeroEscolasFundamental,
																				$id
																			)";
				if($con->query($sql3)) {
					echo "Sim";
				}
			}

			if ($nivelEnsinoAlunosEducacaoMedioProfissional) {
				$sql3 = "INSERT INTO M_NIVEL_ENSINO_ESTUDANTES_PROXIMA_EDICAO(
																				N_ID_NIVEL, 
																				N_TIPO_NIVEL, 
																				N_NUMERO_PROJETOS, 
																				N_NUMERO_ESCOLAS, 
																				N_ID_CADASTRO
																			) VALUES(
																				DEFAULT,
																				'$nivelEnsinoAlunosEducacaoMedioProfissional',
																				$numeroProjetosMedioProfissional,
																				$numeroEscolasMedioProfissional,
																				$id
																			)";
				if($con->query($sql3)) {
					echo "Sim";
				}
			}

			if ($nivelEnsinoAlunosEducacaoSuperior) {
				$sql3 = "INSERT INTO M_NIVEL_ENSINO_ESTUDANTES_PROXIMA_EDICAO(
																				N_ID_NIVEL, 
																				N_TIPO_NIVEL, 
																				N_NUMERO_PROJETOS, 
																				N_NUMERO_ESCOLAS, 
																				N_ID_CADASTRO
																			) VALUES(
																				DEFAULT,
																				'$nivelEnsinoAlunosEducacaoSuperior',
																				$numeroProjetosSuperior,
																				$numeroEscolasSuperior,
																				$id
																			)";
				if($con->query($sql3)) {
					echo "Sim";
				}
			}			

			$opcao1 = isset($_POST['opcao1']) ? $_POST['opcao1'] : null;
			$opcao2 = isset($_POST['opcao2']) ? $_POST['opcao2'] : null;
			$opcao3 = isset($_POST['opcao3']) ? $_POST['opcao3'] : null;
			$opcao4 = isset($_POST['opcao4']) ? $_POST['opcao4'] : null;
			$opcao5 = isset($_POST['opcao5']) ? $_POST['opcao5'] : null;
			$opcao6 = isset($_POST['opcao6']) ? $_POST['opcao6'] : null;
			$opcao7 = isset($_POST['opcao7']) ? $_POST['opcao7'] : null;
			$opcao8 = isset($_POST['opcao8']) ? $_POST['opcao8'] : null;
			$opcao9 = isset($_POST['opcao9']) ? $_POST['opcao9'] : null;
			$opcao10 = isset($_POST['opcao10']) ? $_POST['opcao10'] : null;
			$opcao11 = isset($_POST['opcao11']) ? $_POST['opcao11'] : null;
			$opcao12 = isset($_POST['opcao12']) ? $_POST['opcao12'] : null;
			$opcao13 = isset($_POST['opcao13']) ? $_POST['opcao13'] : null;
			$opcao14 = isset($_POST['opcao14']) ? $_POST['opcao14'] : null;
			$opcao15 = isset($_POST['opcao15']) ? $_POST['opcao15'] : null;
			$opcao16 = isset($_POST['opcao16']) ? $_POST['opcao16'] : null;
			$opcao17 = isset($_POST['opcao17']) ? $_POST['informeQual'] : null;	

											if ($opcao1) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao1', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao2) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao2', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao3) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao3', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao4) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao4', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao5) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao5', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao6) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao6', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao7) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao7', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao8) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao8', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao9) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao9', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao10) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao10', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao11) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao11', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao12) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao12', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao13) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao13', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}	

			if ($opcao14) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao14', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao15) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao15', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao16) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao16', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

			if ($opcao17) {
				$sql4 = "INSERT INTO M_AREAS_DE_PESQUISA( A_ID_AREA, A_NOME_AREA, A_ID_CADASTRO) VALUES( DEFAULT, '$opcao17', $id)";

				if ($con->query($sql4)) {
					header("Location: http://gaia.liberato.com.br/m_junior/cadastrado.php");
				} else {
					header("Location: http://gaia.liberato.com.br/m_junior/erro.php");
				}
			}

		} else {
			echo "Não Foi Possível Cadastrar";
		}

	} else {
		echo "Desculpe, Houve Um Erro Ao Cadastrar!";
	}
