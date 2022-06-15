<!DOCTYPE html>
<html lang="en">

@include('sections.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <app-component ruta="{{ route('basepath') }}"></app-component>
  
</div>

@include('sections.script')

</body>
</html>
