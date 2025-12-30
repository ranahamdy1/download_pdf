<?php
namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;

class ReportController extends Controller
{
    public function usersReport()
    {
        $users = User::all();

        $pdf = Pdf::loadView('reports.users', compact('users'));

        return $pdf->download('users-report.pdf');
        // أو
        // return $pdf->stream('users-report.pdf');
    }
}
