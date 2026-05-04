<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Http\Kernel')->handle(
    $request = \Illuminate\Http\Request::capture()
);

// Test the contact submission
use App\Models\Contact;

$contact = Contact::create([
    'name' => 'Test Contact',
    'email' => 'test@example.com',
    'phone' => '+8801234567890',
    'message' => 'This is a test message from artisan'
]);

dd($contact);
