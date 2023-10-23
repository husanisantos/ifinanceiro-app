<?php

namespace App\Http\Controllers;

use App\Models\ContaPagar;
use Illuminate\Http\Request;

class ContasPagarController extends Controller
{
    public function getAll()  {
        $contasPagar = ContaPagar::all();

        if ($contasPagar->isEmpty()) {
            return response()->json(['error' => 'Nenhum registro encontrado'], 404);
        }
        
        return response()->json($contasPagar);
    }

    public function getById($id) {

        $contaPagar = ContaPagar::find($id);
        if (!$contaPagar) {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        return response()->json($contaPagar); 
    }

    public function insert(Request $request)  {
        
        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'string',
            'emissao' => 'required|date',
            'vencimento' => 'required|date',
            'pagamento' => 'date',
            'valor' => 'required|numeric',
        ]);

        $data = $request->all();
        $contaPagar = ContaPagar::create($data);

        return response()->json(['id' => $contaPagar->id], 200);
        
    }

    public function update(Request $request, $id)  {

        $contaPagar = ContaPagar::find($id);

        if (!$contaPagar) {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        $data = $request->all();

        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'string',
            'emissao' => 'date',
            'vencimento' => 'date',
            'pagamento' => 'date',
            'valor' => 'numeric',
        ]);

        $contaPagar->update($data);

        return response()->json(['message' => 'Registro atualizado com sucesso'], 200);

    }

    public function delete($id)  {
        
        $contaPagar = ContaPagar::find($id);

        if (!$contaPagar) {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }


        $contaPagar->update(['excluido' => true]);
        return response()->json(['message' => 'Registro excluído com sucesso'], 200);

    }
}
