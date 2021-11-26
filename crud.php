<?php

require_once('conexao.php');

// Admin
function listarAdmin($usuario, $senha) {
    $link = getConnection();

    $query = "select * from cd_administrativo where usuarioAdmin = '{$usuario}' and senhaAdmin = '{$senha}'";

    $resultado = mysqli_query($link, $query);
    
    mysqli_close($link);
    
    // return $resultado;
    return mysqli_fetch_assoc($resultado);

}

// Alunos
function listarAluno($cpf, $senha) {
    $link = getConnection();

    $query = "select * from cd_aluno where cpfAluno = '{$cpf}' and senhaAluno = '{$senha}'";

    $resultado = mysqli_query($link, $query);
    
    mysqli_close($link);
    
    return mysqli_fetch_assoc($resultado);
}

function listarAlunos() {
    $link = getConnection();

    $query = "select * from cd_aluno";

    $resultado = mysqli_query($link, $query);

    $alunos = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $row);
    }
    
    mysqli_close($link);
    
    return $alunos;
}

function getAluno($cpf) {
    $link = getConnection();

    $query = "select * from cd_aluno where cpfAluno = '{$cpf}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    return $resultado;
}

function getAlunoDados($cpf) {
    $link = getConnection();

    $query = "select cpfAluno, nomeAluno, emailAluno, telefoneAluno from cd_aluno where cpfAluno = '{$cpf}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    // return mysqli_fetch_assoc($resultado);
    return $resultado;
}

function editAluno($cpf, $nome, $telefone, $email) {
    $link = getConnection();

    $query = "update cd_aluno set cpfAluno = '{$cpf}', nomeAluno='{$nome}', telefoneAluno='{$telefone}',
    emailAluno='{$email}' where cpfAluno = '{$cpf}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao editar", 1);
        return false;
    }

    return true;
}

function deleteAluno($cpf) {
    $link = getConnection();

    $query = "delete from cd_aluno where cpfAluno = '{$cpf}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao deletar", 1);
        return false;
    }

    return true;
}

function cadastrarAluno($cpf, $nome, $email, $telefone, $senha, $curso, $turma) {
    $link = getConnection();
    
    $query = "insert into cd_aluno (cpfAluno, nomeAluno, emailAluno,  telefoneAluno, senhaAluno, idCurso, idTurma) 
    values ('{$cpf}', '{$nome}', '{$email}', '{$telefone}', '{$senha}', '{$curso}', '{$turma}');";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao gravar", 1);
        return false;
    }
    return true;
}


// Cursos
function getCurso($id) {
    $link = getConnection();

    $query = "select * from cd_curso where idCurso = '{$id}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    return $resultado;
}

function getCursoNome($id) {
    $link = getConnection();

    $query = "select nomeCurso from cd_curso where idCurso = '{$id}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    return mysqli_fetch_assoc($resultado);
}

function getCursos() {
    $link = getConnection();

    $query = "select * from cd_curso";

    $resultado = mysqli_query($link, $query);

    $cursos = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        array_push($cursos, $row);
    }
    
    mysqli_close($link);
    
    return $cursos;
}

function deleteCurso($id) {
    $link = getConnection();

    $query = "delete from cd_curso where idCurso = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao deletar", 1);
        return false;
    }

    return true;
}

function editCurso($idCurso, $cpfProf, $nomeCurso, $idTurma) {
    $link = getConnection();

    $query = "update cd_curso set cpfProf = '{$cpfProf}', nomeCurso ='{$nomeCurso}', idTurma = '{$idTurma}' where idCurso = '{$idCurso}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao editar", 1);
        return false;
    }

    return true;
}

function cadastrarCurso($nome, $professor, $turma) {
    $link = getConnection();
    
    $query = "insert into cd_curso (nomeCurso, cpfProf, idTurma) values ('{$nome}', '{$professor}', '{$turma}');";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao gravar", 1);
        return false;
    }
    return true;
}





// Histórico
function getHistoricoAluno($cpfAluno) {
    $link = getConnection();

    $query = "select * from cd_historico where cpfAluno = '{$cpfAluno}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    return $resultado;
}

function editHistorico($id, $alunoCPF, $curso, $turma) {
    $link = getConnection();

    $query = "update cd_historico set cpfAluno = '{$alunoCPF}', idCurso='{$curso}', 
    idTurma='{$turma}' where idHist = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao editar", 1);
        return false;
    }

    return true;
}

function getHistoricos() {
    $link = getConnection();

    $query = "select * from cd_historico";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    // return mysqli_fetch_assoc($resultado);
    return $resultado;
}

function getHistorico($id) {
    $link = getConnection();

    $query = "select * from cd_historico where idHist='{$id}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    // return mysqli_fetch_assoc($resultado);
    return $resultado;
}

function deleteHistorico($id) {
    $link = getConnection();

    $query = "delete from cd_historico where idHist = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao deletar", 1);
        return false;
    }

    return true;
}

function cadastrarHistorico($alunoCPF, $curso, $turma) {
    $link = getConnection();
    
    $query = "insert into cd_historico (cpfAluno, idCurso, idTurma) values ('{$alunoCPF}', '{$curso}', '{$turma}');";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao gravar", 1);
        return false;
    }
    return true;
}


// Turmas
function getTurmas() {
    $link = getConnection();

    $query = "select * from cd_turma";

    $resultado = mysqli_query($link, $query);

    $turmas = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        array_push($turmas, $row);
    }
    
    mysqli_close($link);
    
    return $turmas;
}

function cadastrarTurma($turma) {
    $link = getConnection();
    
    $query = "insert into cd_turma (idTurma) values ('{$turma}');";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao gravar", 1);
        return false;
    }
    return true;
}

function getTurma($id) {
    $link = getConnection();

    $query = "select * from cd_turma where idTurma = '{$id}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    // return mysqli_fetch_assoc($resultado);
    return $resultado;
}

function editTurma($id) {
    $link = getConnection();

    $query = "update cd_turma set idTurma = '{$id}' where idTurma = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao editar", 1);
        return false;
    }

    return true;
}

function deleteTurma($id) {
    $link = getConnection();

    $query = "delete from cd_turma where idTurma = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao deletar", 1);
        return false;
    }

    return true;
}



// Professores
function getProfessores() {
    $link = getConnection();

    $query = "select * from cd_professor";

    $resultado = mysqli_query($link, $query);

    $professores = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        array_push($professores, $row);
    }
    
    mysqli_close($link);
    
    return $professores;
}

function getProfessor($cpf) {
    $link = getConnection();

    $query = "select * from cd_professor where cpfProf= '{$cpf}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    return $resultado;

    // return mysqli_fetch_assoc($resultado);
}

function getProfessorName($cpf) {
    $link = getConnection();

    $query = "select nomeProf from cd_professor where cpfProf='{$cpf}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    return mysqli_fetch_assoc($resultado);
}

function editProf($cpf, $nome, $telefone, $email) {
    $link = getConnection();

    $query = "update cd_professor set cpfProf = '{$cpf}', 
    nomeProf ='{$nome}', telefoneProf='{$telefone}', emailProf='{$email}' where cpfProf = '{$cpf}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao editar", 1);
        return false;
    }

    return true;
}

function deleteProf($cpf) {
    $link = getConnection();

    $query = "delete from cd_professor where cpfProf = '{$cpf}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao deletar", 1);
        return false;
    }

    return true;
}

function cadastrarProf($cpf, $nome, $telefone, $email) {
    $link = getConnection();
    
    $query = "insert into cd_professor (cpfProf, nomeProf, telefoneProf, emailProf) values ('{$cpf}', '{$nome}', '{$telefone}', '{$email}');";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao gravar", 1);
        return false;
    }
    return true;
}



// Matérias
function getMaterias() {
    $link = getConnection();

    $query = "select * from cd_materia";

    $resultado = mysqli_query($link, $query);

    $materias = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        array_push($materias, $row);
    }
    
    mysqli_close($link);
    
    return $materias;
}

function listarMateriasPorCurso($idCurso) {
    $link = getConnection();

    $query = "select nomeMateria from cd_materia where idCurso = '{$idCurso}'";

    $resultado = mysqli_query($link, $query);

    $materias = array();

    while ($row = mysqli_fetch_assoc($resultado)) {
        array_push($materias, $row['nomeMateria']);
    }

    mysqli_close($link);

    return $materias;
}

function deleteMateria($id) {
    $link = getConnection();

    $query = "delete from cd_materia where idMateria = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao deletar", 1);
        return false;
    }

    return true;
}

function getMateria($id) {
    $link = getConnection();

    $query = "select * from cd_materia where idMateria = '{$id}'";

    $resultado = mysqli_query($link, $query);

    mysqli_close($link);

    // return mysqli_fetch_assoc($resultado);
    return $resultado;
}

function editMateria($id, $nome, $professor, $curso) {
    $link = getConnection();

    $query = "update cd_materia set cpfProf = '{$professor}', nomeMateria ='{$nome}', idCurso = '{$curso}' where idMateria = '{$id}'";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao editar", 1);
        return false;
    }

    return true;
}

function cadastrarMateria($nome, $curso, $professor) {
    $link = getConnection();
    
    $query = "insert into cd_materia (nomeMateria, cpfProf, idCurso) values ('{$nome}', '{$professor}', '{$curso}');";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Erro ao gravar", 1);
        return false;
    }
    return true;
}







