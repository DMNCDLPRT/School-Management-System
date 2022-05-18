<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class searchController extends Controller
{
    
    public function search(Request $request){

        if($request->ajax()){
    
            $data=Student::where('STUDENT_LRN','like','%'.$request->search.'%')
            ->orwhere('FIRST_NAME','like','%'.$request->search.'%')
            ->orwhere('MIDDLE_NAME','like','%'.$request->search.'%')
            ->orwhere('LAST_NAME','like','%'.$request->search.'%')
            ->orwhere('YEAR_LEVEL','like','%'.$request->search.'%')
            ->orwhere('SECTION','like','%'.$request->search.'%')
            ->get();    
    
            $output='';

        if(count($data)>0){
    
            $output ='
                <div class="container-fuid">
                    <div class="col-4"> 
                        <p class="m-0 pt-3">Search Results</h4>
                    </div>
                    <table class="table table-hover">
                    <tbody>';
                    foreach($data as $row){
                        $output .='
                        
                        <tr>
                            <td scope="row">'.$row->STUDENT_LRN.'</td>
                            <td>'.$row->FIRST_NAME.'</td>
                            <td>'.$row->MIDDLE_NAME.'</td>
                            <td>'.$row->LAST_NAME.'</td>
                            <td>'.$row->YEAR_LEVEL.'</td>
                            <td>'.$row->SECTION.'</td>
                        </tr>
                        ';
                    }
             $output .= '
                 </tbody>
                </table>
                </div>';
                
        }
        else{
            $output .='No results';
        }
        return $output;
        }
      }
}
