<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl={{urlencode(route('menu.public.show', $menu->id))}}" >
  </body>
</html>
