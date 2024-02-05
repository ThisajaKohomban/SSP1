<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/m.css">

    </head>
    <body>
    <div class="container">
    
   
    <p style="color:#000">Hi, {{Auth::user()->name}}</p>
    <a style="color:#000" href="/"> Back to home page</a>
  </div>
    </body>
    </html>

</x-app-layout>
