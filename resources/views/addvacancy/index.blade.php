<x-layouts.auth>
    <x-slot:title>
        Новая вакансия
    </x-slot:title>

    <x-card>
        <x-card.body>
            <x-form action="{{ route('addvacancy.store') }}" method="post">
                <x-form.item>
                    <x-form.label>Должность</x-form.label>
                    <x-form.text name="job_title" placeholder="Введите должность" autofocus />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Грейд</x-form.label>
                    <x-form.text name="grade" placeholder="Введите грейд" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Отдел</x-form.label>
                    <x-form.text name="department" placeholder="Введите название отдела" />
                </x-form.item>

                <x-form.item>
                    <x-form.label>Максимальная зарплата</x-form.label>
                    <x-form.text name="max_salary" placeholder="Введите максимальную зарплату" />
                </x-form.item>


                <x-form.item>
                    <x-form.label>Требования к кандидату</x-form.label>                    
                    <textarea name="requirements_for_candidate" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введите требования к кандидату"></textarea>
                </x-form.item>

                <x-form.item>
                    <x-form.label>Информация о проекте</x-form.label>                    
                    <textarea name="project_information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введите информацию о проекте"></textarea>
                </x-form.item>

                
                

                <x-button type="submit">Ввести данные</x-button>
            </x-form>
        </x-card.body>
    </x-card>

    <x-slot:crosslink>
        Уже зарегистрированы?
        <x-link to="{{ route('login') }}">
            Войти
        </x-link>
    </x-slot:crosslink>
</x-layouts.auth>
