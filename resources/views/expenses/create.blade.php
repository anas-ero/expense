<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/expenses" method="POST">
        @csrf
        <x-text-input name="amount" type="number" step="0.01" class="block mt-1 w-full" placeholder="amount"/>
        <x-text-input name="category" type="text" class="block mt-1 w-full" placeholder="cate"/>
        <x-text-input name="spent_at" type="date" class="block mt-1 w-full" placeholder="spent"/>
        <x-text-input name="description" type="text" class="block mt-1 w-full" placeholder="decr"/>
        <x-primary-button type="submit">SEND</x-primary-button>
        
    </form>
    
</body>
</html>