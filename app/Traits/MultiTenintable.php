<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
trait MultiTenintable
{
    

    public static function bootMultiTenintable($id=null)
    {
        $id=null;
        
     try {
         //code...
  
        if (auth()->check()) {
            $role=auth()->user()->roles;
            if ($role[0]->id==1) {
                $id=auth()->id();
            } else {
                $id=auth()->user()->user_id;
            }    
            // don't apply on Sub Shipper and Global Shipper
            if ($role[0]->id!=7 && $role[0]->id!=3) {
                static::creating(function ($model) {
                    $id=null;
                    $role=auth()->user()->roles;
                
                    if (auth()->check()) {
                        if ($role[0]->id==1) {
                            $id=auth()->id();
                        } else {
                            $id=auth()->user()->user_id;
                        }
                    }
                    $model->user_id=$id;
                });
                static::updating(function ($model) {
                    $id=null;
                    $role=auth()->user()->roles;
                
                    if (auth()->check()) {
                        if ($role[0]->id==1) {
                            $id=auth()->id();
                        } else {
                            $id=auth()->user()->user_id;
                        }
                    }
                    $model->user_id=$id;
                });
                static::deleting(function ($model) {
                    $id=null;
                    $role=auth()->user()->roles;
                
                    if (auth()->check()) {
                        if ($role[0]->id==1) {
                            $id=auth()->id();
                        } else {
                            $id=auth()->user()->user_id;
                        }
                    }
                    $model->user_id=$id;
                });
                static::addGlobalScope('user_id', function (Builder $builder) {
                    $id=null;
                    $role=auth()->user()->roles;
                
                    if (auth()->check()) {
                        if ($role[0]->id==1) {
                            $id=auth()->id();
                        } else {
                            $id=auth()->user()->user_id;
                        }
                    }
                    if (!((new self())->getTable()=="users" && $role[0]->id==2)) {
                        return $builder->where((new self())->getTable() .'.user_id', $id)->orWhere((new self())->getTable() .'.user_id', 0);
                    }
                    
                });
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
    } 
    }

    }
 