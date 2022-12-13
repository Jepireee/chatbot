<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Validator;
use Auth;

class TestModel extends Model
{
    use HasFactory;
    public function DisplayMessage()
    {
        error_reporting (E_ALL ^ E_NOTICE);

        $conn = mysqli_connect("localhost", "root", "", "chat") or die("Database Error");
     
        // getting user message through ajax
        $getMesg = mysqli_real_escape_string($conn, $_POST['text']);
     
        //checking user query to database query
        $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
     
        $run_query = mysqli_query($conn, $check_data) or die("Error");
     
        // if user query matched to database query we'll show the reply otherwise it go to else statement
        if(mysqli_num_rows($run_query) >= 1){
     
        //fetching replay from the database according to the user query
        $fetch_data = mysqli_fetch_assoc($run_query);
    
        //storing replay to a varible which we'll send to ajax
        $reply = $fetch_data['replies'];
        return $reply;
    } 
    else{
        return "Sorry can't be able to understand you!";
    }
    }
}


