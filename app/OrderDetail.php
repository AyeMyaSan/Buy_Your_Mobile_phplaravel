<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model  {
    
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'order_detail';
    
    /**
    * Attributes that should be mass-assignable.
    *
    * @var array
    */
    protected $fillable = ['do_id','o_id','p_id','color','unit_price','quantity','total_price','created_at'];
    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = [];
    
    /**
    * The attributes that should be casted to native types.
    *
    * @var array
    */
    protected $casts = [];
    
    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['created_at', 'updated_at'];
    
    // public function user(){
        //     return $this->belongsTo('App\User');
        // }
        
    }