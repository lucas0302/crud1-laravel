<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //add Student Model - Data is coming from the database via Model.

class StudentController extends Controller
{

    public function index(){
        $students = Student::all();// responsaval por buncar no os registro na tabela Student
        return view ('students.index')->with('students', $students);// with-> serve para pegar os dados do bd e colocar na pagina index
    }

    public function create(){
        return view('students.create');// serve para mostrar um view com um formulario para cadastro
    }

    public function store(Request $request) {//faz parte de um controlador Laravel e é usado para processar os dados recebidos dp formulário de criação de aluno

        $input = $request->all();// Esta linha de código pega todos os dados recebido do formulário por meio do objeto $request e os armazena na variável $input.
        Student::create($input);// cria um novo registro no banco de dado (insert)
        return redirect('student')->with('flash_message', 'Student Addedd!');//se o cadastro funcionar ele volta para a pagina student, também inclui uma mensagem flash, que é uma mensagem temporária que pode ser exibida para o usuário para informar que o aluno foi adicionado com sucesso.
    }

    public function show($id) {// show() serve para mostrar os dado de um aluno em específico usando o ID
        $student = Student::find($id);// estou usando o modelo Student para buscar no banco de dados o aluno com o ID fornecido. O método find($id) procura um registro na tabela de alunos com base no ID especificado e add os dados na variável $student.
        return view('students.show')->with('students', $student);
    }

    public function edit($id){//exibir um formulário de edição de um aluno específico com base no ID fornecido
        $student = Student::find($id);//consulta no banco de dado pelo Id do aluno e add na variavel $student
        return view('students.edit')->with('students', $student); //retorna um view com os dado do aluno para editar
    }

    public function update(Request $request, $id) {
        $student = Student::find($id);//consulta no banco de dado pelo Id do aluno e add na variavel $student
        $input = $request->all(); //recebe os dado do formulario de edição e add na variavel $input
        $student->update($input); //att os dado do aluno no bd para os novo dados que foi add no input
        return redirect('student')->with('flash_message', 'student Updated!');// //se o cadastro funcionar ele volta para a pagina student
    }

    public function destroy($id) {
        Student::destroy($id);// esse metodo pega o id do aluno espesifico na tabela student e apaga ele do bd
        return redirect()->back()->with('flash_message', 'Student deleted!');// apois apagar os dado retorna para tela de alunos cadastrado
    }
}
