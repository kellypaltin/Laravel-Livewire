<div>
    <h1>Mis Tareas</h1>

    <input type="text" wire:model.live="tarea">
    <button wire:click="addTarea">Agregar Tarea</button>
    <!-- <h3>{{ $tarea }}</h3> -->

    <ul>
        @foreach ($mis_tareas as $t)
            <li>{{ $t }}</li>
        @endforeach
    </ul>

    <table border="1">
        <tr>
            <td>Nombre de Tarea </td>
        </tr>
        @foreach ($mis_tareas as $t)
            <tr><td>{{ $t }}</td></tr>
        @endforeach
    </table>
</div>
