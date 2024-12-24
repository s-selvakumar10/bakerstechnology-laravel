<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertifiedWorkshop extends Model
{
    use HasFactory;
    protected $fillable = [   
                  "all_days","days",
                  "name",              
                  "designation",       
                  "company_name",      
                  "address",           
                  "city",              
                  "state",             
                  "country",           
                  "zip_code",          
                  "mobile",            
                  "whatsapp_number",   
                  "email",             
                  "website",           
                  "industry",          
                  "utr_number",         
                  "attachment",
                  "is_pass_sent"
        ];
    
  protected $casts = [
       'days' => 'array'
      ];
}
