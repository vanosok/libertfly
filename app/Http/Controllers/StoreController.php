<?php

namespace App\Http\Controllers;

use App\Http\Requests\Core\StoreRequest;
use App\Models\Core\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //Método que lista todos os usuários do sistema
    public function index()
    {
        $data = Store::all();

        return response()->json(['data' => $data]);
    }

    //Método que cria uma loja nova no sistema
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        try {
            $store = Store::create($data);

            return response()->json([
                'data' => [
                    'msg' => 'Loja criada com sucesso!'
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }

 
    //Método que lista usuários no sistema pelo id
    public function show(string $id)
    {
        $data = Store::find($id);

        if($data != null) {
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['msg' => "A Loja não existe no sistema"]);
        }
        
    }

    //Método que atualzia uma loja nova no sistema
    public function update(StoreRequest $request, string $id)
    {
        $dataRequest = $request->all();

        $data = Store::findOrFail($id);

        try {
            $store = $data->update($dataRequest);

            return response()->json([
                'data' => [
                    'msg' => 'Loja atualizada com sucesso!'
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }

     //Método que exclui uma loja do sistema
    public function destroy(string $id)
    {
        $data = Store::find($id);
        $data->delete();

        return response()->json(['message' => 'Registro excluido com sucesso', 'data' => $data]);
    }
}
