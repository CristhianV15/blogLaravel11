<x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página principal</h1>
    <!--para llamar a un componente -->
    <x-alert2 type="info" class="mb-4">
      <x-slot name="title">  <!--Para llamar solo a una parte del componente-->
      Información de la alerta
      </x-slot>
      Contenido de la alerta
    </x-alert2>  
        <div>Contenedor para probar espaciado de mv-4</div>
    </div>
</x-app-layout>