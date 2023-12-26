<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        "supplier_name",
        "supplier_phone",
        "supplier_address1",
        "supplier_address2",
        "supplier_state",
        "supplier_city",
        "supplier_zip",
        "supplier_country",
        "supplier_info",
        "requestor_fname",
        "requestor_lname",
        "requestor_organization",
        "requestor_email",
        "requestor_phone",
        "requestor_info",
    ];
}
