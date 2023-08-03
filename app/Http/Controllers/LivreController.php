<?php
namespace App\Http\Controllers;
use App\Models\Livre;
use Illuminate\Http\Request;


class LivreController extends Controller
{
    public function getAll()
    {
        $data = Livre::all();
        return $data;
    }
    public function create(Request $request)
    {
        if (
            isset($request->libelle) and
            isset($request->auteur_id)
        ) {
            $livre = new Livre();
            $livre->libelle = $request->libelle;
            $livre->auteur_id = $request->auteur_id;
            $livre->save();
            return $livre;
        }
        $reponse["message"] = "Veuillez renseigner tous les champs SVP.";
        return $reponse;
    }
    public function update(Request $request)
    {
        $reponse = null;
        $id = $request->id;
        if (
            isset($id) and
            isset($request->libelle) and
            isset($request->auteur_id)
        ) {
            $livre = Livre::find($id);
            if ($livre != null) {
                $livre->libelle = $request->libelle;
                $livre->auteur_id = $request->auteur_id;
                $livre->save();
                return $livre;
            } else {
                $reponse["message"] = "Livre introuvable";
                return $reponse;
            }
        } else {
            $reponse["message"] = "Veuillez renseigner tous les champs SVP.";
            return $reponse;
        }
    }
    public function delete($id)
    {
        if (isset($id)) {
            $livre = Livre::find($id);
            if ($livre != null) {
                $livre->delete();
                $reponse["message"] = "Supprimé avec succès.";
                return $reponse;
            } else {
                $reponse["message"] = "Livre introuvable";
                return $reponse;
            }
        } else {
            $reponse["message"] = "Veuillez préciser un identifiant SVP.";
            return $reponse;
        }
    }
}
