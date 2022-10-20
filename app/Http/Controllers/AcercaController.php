<?php 
namespace App\Http\Controllers;
use App\Models\Acerca;
use Illuminate\Http\Request;

class AcercaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('acerca.acerca');
    }
}
?>