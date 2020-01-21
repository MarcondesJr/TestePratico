<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\UsuarioFormRequest;
use Illuminate\Http\Request;
use App\Models\Painel\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $usuario;
    private $totalPage = 10; 

    public function __construct(Usuario $usuario)
    {
        $this-> usuario = $usuario;
    }

    public function index(Usuario $usuario)
    {
        $title = 'Oasis Desenvolvimento';

        $usuarios = $this->usuario->paginate($this->totalPage);

        return view('painel.usuarios.index', compact('usuarios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Usuário';
        $cats = ['admin','user'];
        $estados = [
            'Acre',
            'Alagoas',
            'Amapá',
            'Amazonas',
            'Bahia',
            'Ceará',
            'Distrito Federal',
            'Espirito Santo',
            'Goiás',
            'Maranhão',
            'Mato Grosso do Sul',
            'Mato Grosso',
            'Minas Gerais',
            'Pará',
            'Paraíba',
            'Paraná',
            'Pernambuco',
            'Piauí',
            'Rio de Janeiro',
            'Rio Grande do Norte',
            'Rio Grande do Sul',
            'Rondônia',
            'Roraima',
            'Santa Catarina',
            'São Paulo',
            'Sergipe',
            'Tocantins'
        ];

        return view('painel.usuarios.create-edit', compact('title','cats','estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {
        $dataForm = $request->except('_token');

        $insert = $this->usuario->insert($dataForm);

        if($insert)
            return redirect()->route('usuarios.index');
        else
            return redirect()->back();
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this->usuario->find($id);

        $title = "Usuário: {$usuario->name}";

        return view('painel.usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuario->find($id);

        $title = "Editar Usuário: {$usuario->name}";
        $cats = ['admin','user'];
        $estados = [
            'Acre',
            'Alagoas',
            'Amapá',
            'Amazonas',
            'Bahia',
            'Ceará',
            'Distrito Federal',
            'Espirito Santo',
            'Goiás',
            'Maranhão',
            'Mato Grosso do Sul',
            'Mato Grosso',
            'Minas Gerais',
            'Pará',
            'Paraíba',
            'Paraná',
            'Pernambuco',
            'Piauí',
            'Rio de Janeiro',
            'Rio Grande do Norte',
            'Rio Grande do Sul',
            'Rondônia',
            'Roraima',
            'Santa Catarina',
            'São Paulo',
            'Sergipe',
            'Tocantins'
        ];

        return view('painel.usuarios.create-edit', compact('title','cats','usuario','estados'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioFormRequest $request, $id)
    {
        $dataForm = $request->all();
        $usuario = $this->usuario->find($id);
        $update = $usuario->update($dataForm);
        if($update)
            return redirect()->route('usuarios.index');
        else
            return redirect()->route('usuarios.edit', $id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuario->find($id);

        $delete = $usuario->delete();

        if($delete)
            return redirect()->route('usuarios.index');
        else
            return redirect()->route('usuarios.show', $id)->with(['errors'=> 'Falha ao deletar.!!']);
    }


}
