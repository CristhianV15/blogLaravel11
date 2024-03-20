<div {{ $attributes-> merge(['class' => 'p-4 text-sm rounded-lg ' . $class])}} role="alert">
    <span class="font-medium">{{ $title ?? 'Información de la alerta' }}</span> {{ $slot }} <!--Información de la alerta variable mediante operadores ternarios-->  
</div>