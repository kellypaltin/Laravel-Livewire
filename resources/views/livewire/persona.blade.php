<div>
    <h1>Gestion Personas</h1>
    <form wire:submit.prevent="guardarPersona">
        <label for="">Ingresar Nombre</label>
        <input type="text" wire:model="nombre">
        @error('nombre') <span class="error">{{ $message }}</span> @enderror
    <br>
        <label for="">Ingresar Edad</label>
        <input type="text" wire:model="edad">
        @error('edad') <span class="error">{{ $message }}</span> @enderror
    <br>
        <label for="">Ingresar Correo</label>
        <input type="text" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    <br>

    <input type="submit">
    </form>

    <hr>

    <table border=1>
        <tr>
            <td>NOMBRE</td>
            <TD>EDAD</TD>
            <TD>CORREO</TD>
            <TD>ACTION</TD>
        </tr>
        @foreach ($personas as $per) 
            <tr>
                <td>{{$per["nombre"]}}</td>
                <TD>{{ $per["edad"] }}</TD>
                <TD>{{ $per["email"] }}</TD>
            </tr>
        @endforeach
    </table>

</div>
