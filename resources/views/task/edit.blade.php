<x-layout>
    <x-section-header sectionName="Créer une tâche" />

    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">

        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i>
            <a href="{{ route('task.index') }}">
                Liste des tâches
            </a>
        </p>

        <div class="leading-loose">
            @auth
            <form 
                class="p-10 bg-white rounded shadow-xl" 
                method="POST" 
                action="{{ route('task.store') }}"
            >
                @csrf

                <!-- Titre -->
                <x-form.input inputName="title" label="Titre de la tâche" />

                <!-- Description -->
                <div class="mt-4">
                    <label class="block text-sm text-gray-600">
                        Détails de la tâche
                    </label>
                    <textarea
                        name="description"
                        rows="6"
                        class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded"
                        placeholder="Décrivez la tâche en détail..."
                        required
                    >{{ old('description') }}</textarea>

                    <x-form.error inputName="description" />
                </div>

                <!-- Date limite -->
                <x-form.input
                    inputName="due"
                    type="date"
                    label="Date limite"
                    :min="now()->toDateString()"
                />

                <!-- Attribution -->
                <div class="mt-4">
                    <label class="block text-sm text-gray-600">
                        Assigner la tâche à
                    </label>

                    <select
                        name="assigneduser_id"
                        class="w-full px-4 py-2 bg-gray-200 rounded"
                    >
                        @foreach ($users as $user)
                            <option
                                value="{{ $user->id }}"
                                @selected(old('assigneduser_id') == $user->id)
                            >
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>

                    <x-form.error inputName="assigneduser_id" />
                </div>

                <!-- Bouton -->
                <x-form.button buttonName="Créer la tâche" />

            </form>
            @else
                <p class="font-bold text-red-600">
                    <a href="/login" class="underline">
                        Connectez-vous
                    </a>
                    pour créer une tâche.
                </p>
            @endauth
        </div>
    </div>
</x-layout>
