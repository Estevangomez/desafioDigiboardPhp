function validarCampos(){
	var nome = cadastrar_colaborador.nome.value;
	var email = cadastrar_colaborador.email.value;
	var telefone = cadastrar_colaborador.telefone.value;
	var empresa = cadastrar_colaborador.empresa.value;
	var setor = cadastrar_colaborador.setor.value;
	var cargo = cadastrar_colaborador.cargo.value;

	if(nome == ""){
		alert("Nome é Obrigatório ! ");
		cadastrar_colaborador.nome.focus();
		return false;
	}

	if(email == ""){
		alert("Email é Obrigatório ! ");
		cadastrar_colaborador.email.focus();
		return false;
	}

	if(telefone == ""){
		alert("Telefone é Obrigatório ! ");
		cadastrar_colaborador.telefone.focus();
		return false;
	}

	if(empresa == ""){
		alert("Empresa é Obrigatório ! ");
		cadastrar_colaborador.empresa.focus();
		return false;
	}

	if(cargo == ""){
		alert("Cargo é Obrigatório ! ");
		cadastrar_colaborador.cargo.focus();
		return false;
	}

	if(setor == ""){
		alert("Setor é Obrigatório ! ");
		cadastrar_colaborador.setor.focus();
		return false;
	}

	
}
