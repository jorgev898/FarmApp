@extends('layouts.app')

@section('title')
Document
@endsection

@section('content')
        <?php 
        if ($category){
            echo "este es el producto: $product con la categoria: $category";
        }else{
            echo "producto: $product";
        }
       ?>
@endsection