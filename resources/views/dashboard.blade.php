<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}}
            <form id="form_47287" class="appnitro" enctype="multipart/form-data" method="post" action="file:///C:/Users/HP2I56~1/AppData/Local/Temp/Rar$EXa27148.19340/form/form.html">
                <div class="form_description">
        <h2>Untitled Form</h2>
        <p>This is your form description. Click here to edit.</p>
    </div>
        <ul>

                <li id="li_1">
    <label class="description" for="element_1">Nombre </label>
    <div>
        <input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value="">
    </div>
    </li>		<li id="li_2">
    <label class="description" for="element_2">Correo </label>
    <div>
        <input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value="">
    </div>
    </li>		<li id="li_3">
    <label class="description" for="element_3">Text </label>
    <div>
        <input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="">
    </div>
    </li>		<li id="li_4">
    <label class="description" for="element_4">Actividad </label>
    <div>
        <textarea id="element_4" name="element_4" class="element textarea medium"></textarea>
    </div>
    </li>		<li id="li_5">
    <label class="description" for="element_5">Subir foto </label>
    <div>
        <input id="element_5" name="element_5" class="element file" type="file">
    </div>
    </li>

                <li class="buttons">
            <input type="hidden" name="form_id" value="47287">

            <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit">
    </li>
        </ul>
    </form>
        </div>
    </div>
</x-app-layout>
