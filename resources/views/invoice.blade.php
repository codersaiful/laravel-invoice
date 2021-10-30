@extends('layouts.invoice-manager')


@if(isset($title) && is_string($title))
    @section('title', $title)
@else
    @section('title', "Laravel Invoice Handlee")
@endif
