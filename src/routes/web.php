<?php

Route::get('/activable', function () {
    return view('activable::hello');
});

Route::get('/activable2', function () {
    return view('vendor.activable.hello');
});